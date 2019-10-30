<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\ICasesRepository;
use App\Repositories\Interfaces\ICategoryRepository;
use App\Repositories\Interfaces\ILawyerRepository;
use App\Cases;
use App\Http\Requests\Cases\CasesUpdateRequest;
use App\Http\Requests\Cases\CasesCreateRequest;

class CasesController extends Controller
{
    protected $Cases;
    protected $Category;
    protected $Lawyer;
    public function __construct(ICasesRepository $ICases, ICategoryRepository $ICategory, ILawyerRepository $ILawyer)
    {
        $this->Cases = $ICases;
        $this->Category = $ICategory;
        $this->Lawyer = $ILawyer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cases = $this->Cases->GetAll();
        return view("admin.cases.index")->with(['active'=>'cases', 'subactive'=>'case', 'model'=>$cases]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dockets()
    {
        $cases = $this->Cases->GetAllUncompleted();
        return view("admin.cases.cindex")->with(['active'=>'cases', 'subactive'=>'case', 'model'=>$cases]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->Category->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        $judges = $this->Lawyer->GetAndOrderJudges()->pluck('name', 'id');
        return view("admin.cases.create")->with(['active'=>'cases', 'subactive'=>'case', 'categories'=>$categories, 'judges'=>$judges]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CasesCreateRequest $request)
    {
        $categories = $this->Category->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        $judges = $this->Lawyer->GetAndOrderJudges()->pluck('name', 'id');

        // Validated Request
        $data = $request->validated();

        //Handle File Upload
        if ($request->hasFile('cover_img')) {
            $ext = $request->file('cover_img')->getClientOriginalExtension();
            $cover_img = 'CI_' . time() . '.' . $ext;
            $path = $request->file('cover_img')->storeAs('public/cover_images', $cover_img);
        } else {
            $cover_img = 'default.jpg';
        }

        // Create Cases
        $entity = $this->Cases->SaveCases(
            $data["name"],
            $data["brief"],
            $data["details"],
            $cover_img,
            $data["judge_id"],
            $data["category_id"],
            auth()->user()->id,
            'Pending'
        );

        // Check case created
        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while creating case, Please try again!', 'categories'=>$categories, 'judges'=>$judges]);
        }
        return redirect("/admin/cases")->with(['success' => $entity->topic.' Cases Created!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cases  $caseType
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $model = $this->Cases->GetByID($id);
        if ($model == null) {
            return redirect('/admin/cases')->with(['error' => 'Cases not found!']);
        }

        if(auth()->user()->user_type_id == 0){
            return view("admin.cases.cdetails")->with(['active'=>'cases', 'subactive'=>'case', 'model'=>$model]);
        }else{
            return view("admin.cases.details")->with(['active'=>'cases', 'subactive'=>'case', 'model'=>$model]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cases  $caseType
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $categories = $this->Category->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        $judges = $this->Lawyer->GetAndOrderJudges()->pluck('name', 'id');
        $model = $this->Cases->GetByID($id);
        $status = ['Pending' => 'Pending', 'Ongoing' => 'Ongoing', 'Concluded' => 'Concluded'];
        if ($model == null) {
            return redirect('/admin/cases')->with(['error' => 'Cases not found!']);
        }
        return view("admin.cases.edit")->with(['active'=>'cases', 'subactive'=>'case', 'model'=>$model, 'categories'=>$categories, 'judges'=>$judges, 'status' => $status]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cases  $caseType
     * @return \Illuminate\Http\Response
     */
    public function update(CasesUpdateRequest $request, int $id)
    {
        $categories = $this->Category->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        $judges = $this->Lawyer->GetAndOrderJudges()->pluck('name', 'id');

        // Validated Request
        $data = $request->validated();

        $newFile = false;
        $cover_img = "";

        //Handle File Upload
        if ($request->hasFile('cover_img')) {
            $ext = $request->file('cover_img')->getClientOriginalExtension();
            $cover_img = 'CI_' . time() . '.' . $ext;
            $path = $request->file('cover_img')->storeAs('public/cover_images', $cover_img);
            $newFile = true;
        }

        // Save Cases
        $entity = $this->Cases->UpdateCases(
            $data["name"],
            $data["brief"],
            $data["details"],
            $cover_img,
            $data["judge_id"],
            $data["category_id"],
            auth()->user()->id,
            $data["status"],
            $id
        );

        // Check case created
        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while updating case, Please try again!', 'categories'=>$categories, 'judges'=>$judges]);
        }

        return redirect("/admin/cases")->with(['success' => $entity->topic.' Cases Updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cases  $caseType
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cases $caseType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cases  $caseType
     * @return \Illuminate\Http\Response
     */
    public function status(int $id)
    {
        $model = $this->Cases->GetByID($id);
        if ($model == null) {
            return redirect('/admin/cases')->with(['error' => 'Cases not found!']);
        }
        $model->is_logged_out = !$model->is_logged_out;
        $entity = $this->Cases->Update($model->toArray(), $id);
        if ($entity == null) {
            return redirect('/admin/cases')->with(['error' => 'Error encountered while updating case, Please try again!']);
        }

        return redirect("/admin/cases")->with(['success' => $entity->topic.' Cases Status Updated!']);
    }
}

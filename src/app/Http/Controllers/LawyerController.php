<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\ILawyerRepository;
use App\Repositories\Interfaces\IUserTypeRepository;
use App\Lawyer;
use App\Http\Requests\Lawyer\LawyerUpdateRequest;
use App\Http\Requests\Lawyer\LawyerCreateRequest;

class LawyerController extends Controller
{
    protected $Lawyer;
    protected $UserType;
    public function __construct(ILawyerRepository $ILawyer, IUserTypeRepository $IUserType)
    {
        // $this->middleware('auth');
        $this->Lawyer = $ILawyer;
        $this->UserType = $IUserType;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lawyers = $this->Lawyer->GetAll();
        return view("admin.lawyers.index")->with(['active'=>'users', 'subactive'=>'lawyer', 'model'=>$lawyers]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function judges()
    {
        $judges = $this->Lawyer->GetJudges();
        return view("admin.lawyers.judge")->with(['active'=>'users', 'subactive'=>'judge', 'model'=>$judges]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_types = $this->UserType->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        return view("admin.lawyers.create")->with(['active'=>'users', 'subactive'=>'lawyer', 'user_types'=>$user_types]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LawyerCreateRequest $request)
    {
        $user_types = $this->UserType->GetAllAndOrder('name', 'asc')->pluck('name', 'id');

        // Validated Request
        $data = $request->validated();
        //dd($data);

        //Handle File Upload
        if ($request->hasFile('dp_image')) {
            $ext = $request->file('dp_image')->getClientOriginalExtension();
            $dp_image = 'DP_' . time() . '.' . $ext;
            $path = $request->file('dp_image')->storeAs('public/DPs', $dp_image);
        } else {
            $dp_image = 'default.jpg';
        }

        // Create Lawyer
        $entity = $this->Lawyer->SaveLawyer(
            $data["dob"],
            $data["brief"],
            $data["gender"],
            $data["skills"],
            $data["website"],
            $data["facebook"],
            $data["twitter"],
            $data["linkedin"],
            $data["lastname"],
            $data["othernames"],
            $data["username"],
            $data["email"],
            $data["phone"],
            $data["address"],
            $data["user_type"],
            $dp_image,
            true
        );
        //dd($entity);
        // Check lawyer created
        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while creating lawyer, Please try again!', 'user_types'=>$user_types]);
        }
        return redirect("/admin/lawyers")->with(['success' => $data["username"].' Lawyer Created!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lawyer  $lawyerType
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $model = $this->Lawyer->GetByID($id);
        if ($model == null) {
            return redirect('/admin/lawyers')->with(['error' => 'Lawyers not found!']);
        }
        return view("admin.lawyers.details")->with(['active'=>'users', 'subactive'=>'lawyer', 'model'=>$model]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lawyer  $lawyerType
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $user_types = $this->UserType->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        $model = $this->Lawyer->GetByID($id);
        if ($model == null) {
            return redirect('/admin/lawyers')->with(['error' => 'Lawyers not found!']);
        }
        return view("admin.lawyers.edit")->with(['active'=>'users', 'subactive'=>'lawyer', 'model'=>$model, 'user_types'=>$user_types]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lawyer  $lawyerType
     * @return \Illuminate\Http\Response
     */
    public function update(LawyerUpdateRequest $request, int $id)
    {
        $user_types = $this->UserType->GetAllAndOrder('name', 'asc')->pluck('name', 'id');

        // Validated Request
        $data = $request->validated();

        $newFile = false;
        $dp_image = "";

        //Handle File Upload
        if ($request->hasFile('dp_image')) {
            $ext = $request->file('dp_image')->getClientOriginalExtension();
            $dp_image = 'DP_' . time() . '.' . $ext;
            $path = $request->file('dp_image')->storeAs('public/DPs', $dp_image);
            $newFile = true;
        }

        // Save Lawyer
        $entity = $this->Lawyer->UpdateLawyer(
            $data["dob"],
            $data["brief"],
            $data["gender"],
            $data["skills"],
            $data["website"],
            $data["facebook"],
            $data["twitter"],
            $data["linkedin"],
            $data['lastname'],
            $data['othernames'],
            $data['username'],
            $data['email'],
            $data['phone'],
            $data['address'],
            $data['user_type'],
            $dp_image,
            $newFile,
            $id
        );

        // Check lawyer created
        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while updating lawyer, Please try again!', 'user_types'=>$user_types]);
        }

        return redirect("/admin/lawyers")->with(['success' => $data['username'].' info Updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lawyer  $lawyerType
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lawyer $lawyerType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lawyer  $lawyerType
     * @return \Illuminate\Http\Response
     */
    public function status(int $id)
    {
        $model = $this->Lawyer->GetByID($id);
        if ($model == null) {
            return redirect('/admin/lawyers')->with(['error' => 'Lawyers not found!']);
        }
        $model->is_active = !$model->is_active;
        $entity = $this->Lawyer->Update($model->toArray(), $id);
        if ($entity == null) {
            return redirect('/admin/lawyers')->with(['error' => 'Error encountered while updating lawyer, Please try again!']);
        }

        return redirect("/admin/lawyers")->with(['success' => $entity->name.' Lawyer Status Updated!']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lawyer  $lawyerType
     * @return \Illuminate\Http\Response
     */
    public function judgestatus(int $id)
    {
        $model = $this->Lawyer->GetByID($id);
        if ($model == null) {
            return redirect('/admin/lawyers')->with(['error' => 'Lawyers not found!']);
        }
        $model->is_judge = !$model->is_judge;
        $entity = $this->Lawyer->Update($model->toArray(), $id);
        if ($entity == null) {
            return redirect('/admin/lawyers')->with(['error' => 'Error encountered while updating lawyer, Please try again!']);
        }

        return redirect("/admin/judges")->with(['success' => $entity->name.' Lawyer Status Updated!']);
    }
}

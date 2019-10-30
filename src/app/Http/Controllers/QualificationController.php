<?php

namespace App\Http\Controllers;

use App\Qualification;
use App\Repositories\Interfaces\IQualificationRepository;
use App\Http\Requests\Qualification\QualificationCreateRequest;
use App\Http\Requests\Qualification\QualificationUpdateRequest;

class QualificationController extends Controller
{
    protected $Qualification;
    public function __construct(IQualificationRepository $IQualification)
    {
        // $this->middleware('auth');
        $this->Qualification = $IQualification;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qualifications = $this->Qualification->GetAll();
        return view("admin.qualifications.index")->with(['active'=>'qualification', 'subactive'=>'qualification', 'model'=>$qualifications]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.qualifications.create")->with(['active'=>'qualification', 'subactive'=>'qualification']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QualificationCreateRequest $request)
    {
        // Validated Request
        $data = $request->validated();

        // Save Qualification
        $entity = $this->Qualification->SaveQualification(
            $data['name'],
            $data['title'],
            $data['description'],
            true
        );

        // Check qualification created
        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while creating user, Please try again!']);
        }

        return redirect("/admin/qualifications")->with(['success' => $entity->name.' Qualification Created!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $model = $this->Qualification->GetByID($id);
        if ($model == null) {
            return redirect('/admin/qualifications')->with(['error' => 'Qualifications not found!']);
        }
        return view("admin.qualifications.details")->with(['active'=>'qualification', 'subactive'=>'qualification', 'model'=>$model]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $model = $this->Qualification->GetByID($id);
        if ($model == null) {
            return redirect('/admin/qualifications')->with(['error' => 'Qualifications not found!']);
        }
        return view("admin.qualifications.edit")->with(['active'=>'qualification', 'subactive'=>'qualification', 'model'=>$model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function update(QualificationUpdateRequest $request, int $id)
    {
        // Validated Request
        $data = $request->validated();

        $entity = $this->Qualification->UpdateQualification(
            $data['name'],
            $data['title'],
            $data['description'],
            $id
        );

        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while updating user, Please try again!']);
        }

        return redirect("/admin/qualifications")->with(['success' => $entity->name.' Qualification Updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Qualification $qualification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function status(int $id)
    {
        $model = $this->Qualification->GetByID($id);
        if ($model == null) {
            return redirect('/admin/qualifications')->with(['error' => 'Qualifications not found!']);
        }
        $model->is_active = !$model->is_active;
        $entity = $this->Qualification->Update($model->toArray(), $id);
        if ($entity == null) {
            return redirect('/admin/qualifications')->with(['error' => 'Error encountered while updating user, Please try again!']);
        }

        return redirect("/admin/qualifications")->with(['success' => $entity->name.' Qualification Status Updated!']);
    }
}

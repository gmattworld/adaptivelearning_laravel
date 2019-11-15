<?php

namespace App\Http\Controllers;

use App\entity\Department;
use App\Repositories\Interfaces\IDepartmentRepository;
use App\Http\Requests\Department\DepartmentCreateRequest;
use App\Http\Requests\Department\DepartmentUpdateRequest;
use App\Repositories\Interfaces\ISchoolRepository;

class DepartmentController extends Controller
{
    protected $Department;
    protected $School;
    public function __construct(IDepartmentRepository $IDepartment, ISchoolRepository $ISchool)
    {
        // $this->middleware('auth');
        $this->Department = $IDepartment;
        $this->School = $ISchool;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = $this->Department->GetAll();
        return view("admin.departments.index")->with(['active'=>'department', 'subactive'=>'department', 'model'=>$departments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schools = $this->School->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        return view("admin.departments.create")->with(['active'=>'department', 'subactive'=>'department', 'schools' => $schools]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartmentCreateRequest $request)
    {
        $schools = $this->School->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        // Validated Request
        $data = $request->validated();

        // Save Department
        $entity = $this->Department->SaveDepartment(
            $data['name'],
            $data['code'],
            $data['description'],
            $data['school_id'],
            true
        );

        // Check department created
        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while creating user, Please try again!', 'schools'=>$schools]);
        }

        return redirect("/admin/departments")->with(['success' => $entity->name.' Department Created!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $model = $this->Department->GetByID($id);
        if ($model == null) {
            return redirect('/admin/departments')->with(['error' => 'Departments not found!']);
        }
        return view("admin.departments.details")->with(['active'=>'department', 'subactive'=>'department', 'model'=>$model]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $schools = $this->School->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        $model = $this->Department->GetByID($id);
        if ($model == null) {
            return redirect('/admin/departments')->with(['error' => 'Departments not found!']);
        }
        return view("admin.departments.edit")->with(['active'=>'department', 'subactive'=>'department', 'model'=>$model, 'schools'=>$schools]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(DepartmentUpdateRequest $request, int $id)
    {
        $schools = $this->School->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        // Validated Request
        $data = $request->validated();

        $entity = $this->Department->UpdateDepartment(
            $data['name'],
            $data['code'],
            $data['description'],
            $data['school_id'],
            $id
        );

        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while updating user, Please try again!', 'schools' => $schools]);
        }

        return redirect("/admin/departments")->with(['success' => $entity->name.' Department Updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function status(int $id)
    {
        $model = $this->Department->GetByID($id);
        if ($model == null) {
            return redirect('/admin/departments')->with(['error' => 'Departments not found!']);
        }
        $model->is_active = !$model->is_active;
        $entity = $this->Department->Update($model->toArray(), $id);
        if ($entity == null) {
            return redirect('/admin/departments')->with(['error' => 'Error encountered while updating user, Please try again!']);
        }

        return redirect("/admin/departments")->with(['success' => $entity->name.' Department Status Updated!']);
    }
}

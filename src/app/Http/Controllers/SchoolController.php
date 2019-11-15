<?php

namespace App\Http\Controllers;

use App\entity\school;
use App\Repositories\Interfaces\ISchoolRepository;
use App\Http\Requests\School\SchoolCreateRequest;
use App\Http\Requests\School\SchoolUpdateRequest;

class SchoolController extends Controller
{
    protected $School;
    public function __construct(ISchoolRepository $ISchool)
    {
        // $this->middleware('auth');
        $this->School = $ISchool;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = $this->School->GetAll();
        return view("admin.schools.index")->with(['active'=>'school', 'subactive'=>'school', 'model'=>$schools]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.schools.create")->with(['active'=>'school', 'subactive'=>'school']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SchoolCreateRequest $request)
    {
        // Validated Request
        $data = $request->validated();

        // Save School
        $entity = $this->School->SaveSchool(
            $data['name'],
            $data['code'],
            $data['description'],
            true
        );

        // Check school created
        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while creating user, Please try again!']);
        }

        return redirect("/admin/schools")->with(['success' => $entity->name.' School Created!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\entity\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $model = $this->School->GetByID($id);
        if ($model == null) {
            return redirect('/admin/schools')->with(['error' => 'Schools not found!']);
        }
        return view("admin.schools.details")->with(['active'=>'school', 'subactive'=>'school', 'model'=>$model]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\entity\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $model = $this->School->GetByID($id);
        if ($model == null) {
            return redirect('/admin/schools')->with(['error' => 'Schools not found!']);
        }
        return view("admin.schools.edit")->with(['active'=>'school', 'subactive'=>'school', 'model'=>$model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\entity\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(SchoolUpdateRequest $request, int $id)
    {
        // Validated Request
        $data = $request->validated();

        $entity = $this->School->UpdateSchool(
            $data['name'],
            $data['code'],
            $data['description'],
            $id
        );

        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while updating user, Please try again!']);
        }

        return redirect("/admin/schools")->with(['success' => $entity->name.' School Updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\entity\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\entity\School  $school
     * @return \Illuminate\Http\Response
     */
    public function status(int $id)
    {
        $model = $this->School->GetByID($id);
        if ($model == null) {
            return redirect('/admin/schools')->with(['error' => 'Schools not found!']);
        }
        $model->is_active = !$model->is_active;
        $entity = $this->School->Update($model->toArray(), $id);
        if ($entity == null) {
            return redirect('/admin/schools')->with(['error' => 'Error encountered while updating user, Please try again!']);
        }

        return redirect("/admin/schools")->with(['success' => $entity->name.' School Status Updated!']);
    }
}

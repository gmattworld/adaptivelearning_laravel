<?php

namespace App\Http\Controllers;

use App\entity\course;
use App\Repositories\Interfaces\ICourseRepository;
use App\Http\Requests\Course\CourseCreateRequest;
use App\Http\Requests\Course\CourseUpdateRequest;
use App\Repositories\Interfaces\ILevelRepository;

class CourseController extends Controller
{
    protected $Course;
    protected $Level;
    public function __construct(ICourseRepository $ICourse, ILevelRepository $ILevel)
    {
        // $this->middleware('auth');
        $this->Course = $ICourse;
        $this->Level = $ILevel;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = $this->Course->GetAll();
        return view("admin.courses.index")->with(['active'=>'course', 'subactive'=>'course', 'model'=>$courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $levels = $this->Level->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        return view("admin.courses.create")->with(['active'=>'course', 'subactive'=>'course', 'levels' => $levels]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseCreateRequest $request)
    {
        $levels = $this->Level->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        // Validated Request
        $data = $request->validated();

        // Save Course
        $entity = $this->Course->SaveCourse(
            $data['name'],
            $data['code'],
            $data['description'],
            $data['level_id'],
            true
        );

        // Check course created
        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while creating user, Please try again!', 'levels'=>$levels]);
        }

        return redirect("/admin/courses")->with(['success' => $entity->name.' Course Created!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\entity\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $model = $this->Course->GetByID($id);
        if ($model == null) {
            return redirect('/admin/courses')->with(['error' => 'Courses not found!']);
        }
        return view("admin.courses.details")->with(['active'=>'course', 'subactive'=>'course', 'model'=>$model]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\entity\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $levels = $this->Level->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        $model = $this->Course->GetByID($id);
        if ($model == null) {
            return redirect('/admin/courses')->with(['error' => 'Courses not found!']);
        }
        return view("admin.courses.edit")->with(['active'=>'course', 'subactive'=>'course', 'model'=>$model, 'levels'=>$levels]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\entity\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(CourseUpdateRequest $request, int $id)
    {
        $levels = $this->Level->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        // Validated Request
        $data = $request->validated();

        $entity = $this->Course->UpdateCourse(
            $data['name'],
            $data['code'],
            $data['description'],
            $data['level_id'],
            $id
        );

        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while updating user, Please try again!', 'level'=>$levels]);
        }

        return redirect("/admin/courses")->with(['success' => $entity->name.' Course Updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\entity\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\entity\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function status(int $id)
    {
        $model = $this->Course->GetByID($id);
        if ($model == null) {
            return redirect('/admin/courses')->with(['error' => 'Courses not found!']);
        }
        $model->is_active = !$model->is_active;
        $entity = $this->Course->Update($model->toArray(), $id);
        if ($entity == null) {
            return redirect('/admin/courses')->with(['error' => 'Error encountered while updating user, Please try again!']);
        }

        return redirect("/admin/courses")->with(['success' => $entity->name.' Course Status Updated!']);
    }
}

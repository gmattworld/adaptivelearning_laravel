<?php

namespace App\Http\Controllers;

use App\entity\subject;
use App\Repositories\Interfaces\ISubjectRepository;
use App\Http\Requests\Subject\SubjectCreateRequest;
use App\Http\Requests\Subject\SubjectUpdateRequest;
use App\Repositories\Interfaces\ICourseRepository;

class SubjectController extends Controller
{
    protected $Subject;
    protected $Course;
    public function __construct(ISubjectRepository $ISubject, ICourseRepository $ICourse)
    {
        // $this->middleware('auth');
        $this->Subject = $ISubject;
        $this->Course = $ICourse;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = $this->Subject->GetAll();
        return view("admin.subjects.index")->with(['active'=>'subject', 'subactive'=>'subject', 'model'=>$subjects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = $this->Course->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        return view("admin.subjects.create")->with(['active'=>'subject', 'subactive'=>'subject', 'courses'=>$courses]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubjectCreateRequest $request)
    {
        $courses = $this->Course->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        // Validated Request
        $data = $request->validated();

        // Save Subject
        $entity = $this->Subject->SaveSubject(
            $data['name'],
            $data['code'],
            $data['description'],
            $data['course_id'],
            true
        );

        // Check subject created
        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while creating user, Please try again!', 'courses'=>$courses]);
        }

        return redirect("/admin/subjects")->with(['success' => $entity->name.' Subject Created!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\entity\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $model = $this->Subject->GetByID($id);
        if ($model == null) {
            return redirect('/admin/subjects')->with(['error' => 'Subjects not found!']);
        }
        return view("admin.subjects.details")->with(['active'=>'subject', 'subactive'=>'subject', 'model'=>$model]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\entity\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $courses = $this->Course->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        $model = $this->Subject->GetByID($id);
        if ($model == null) {
            return redirect('/admin/subjects')->with(['error' => 'Subjects not found!']);
        }
        return view("admin.subjects.edit")->with(['active'=>'subject', 'subactive'=>'subject', 'model'=>$model, 'courses'=>$courses]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\entity\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(SubjectUpdateRequest $request, int $id)
    {
        $courses = $this->Course->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        // Validated Request
        $data = $request->validated();

        $entity = $this->Subject->UpdateSubject(
            $data['name'],
            $data['code'],
            $data['description'],
            $data['course_id'],
            $id
        );

        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while updating user, Please try again!', 'courses'=>$courses]);
        }

        return redirect("/admin/subjects")->with(['success' => $entity->name.' Subject Updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\entity\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\entity\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function status(int $id)
    {
        $model = $this->Subject->GetByID($id);
        if ($model == null) {
            return redirect('/admin/subjects')->with(['error' => 'Subjects not found!']);
        }
        $model->is_active = !$model->is_active;
        $entity = $this->Subject->Update($model->toArray(), $id);
        if ($entity == null) {
            return redirect('/admin/subjects')->with(['error' => 'Error encountered while updating user, Please try again!']);
        }

        return redirect("/admin/subjects")->with(['success' => $entity->name.' Subject Status Updated!']);
    }
}

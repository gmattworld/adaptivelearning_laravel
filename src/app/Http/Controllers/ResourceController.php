<?php

namespace App\Http\Controllers;

use App\entity\resource;
use App\Repositories\Interfaces\IResourceRepository;
use App\Http\Requests\Resource\ResourceCreateRequest;
use App\Http\Requests\Resource\ResourceUpdateRequest;
use App\Repositories\Interfaces\ICourseRepository;
use App\Repositories\Interfaces\ISubjectRepository;

class ResourceController extends Controller
{
    protected $Resource;
    protected $Subject;
    protected $Course;
    public function __construct(IResourceRepository $IResource, ISubjectRepository $ISubject, ICourseRepository $ICourse)
    {
        // $this->middleware('auth');
        $this->Resource = $IResource;
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
        if (auth()->user()->user_type_id == 0){
            $resources = $this->Resource->GetAll();
            return view("student.cresources.index")->with(['active'=>'resource', 'subactive'=>'resource', 'model'=>$resources]);
        }else{
            $resources = $this->Resource->GetAll();
            return view("admin.cresources.index")->with(['active'=>'resource', 'subactive'=>'resource', 'model'=>$resources]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (auth()->user()->user_type_id == 0){
            return redirect('/admin/resources')->with(['error' => 'Unauthorized!']);
        }
        $subjects = $this->Subject->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        $courses = $this->Course->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        return view("admin.cresources.create")->with(['active'=>'resource', 'subactive'=>'resource', 'subjects'=>$subjects, 'courses'=>$courses]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ResourceCreateRequest $request)
    {
        if (auth()->user()->user_type_id == 0){
            return redirect('/admin/resources')->with(['error' => 'Unauthorized!']);
        }

        // Validated Request
        $data = $request->validated();

        $subjects = $this->Subject->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        $courses = $this->Course->GetAllAndOrder('name', 'asc')->pluck('name', 'id');

        //Handle File Upload
        if ($request->hasFile('pdf_path')) {
            $ext = $request->file('pdf_path')->getClientOriginalExtension();
            $pdf_path = 'CI_' . time() . '.' . $ext;
            $PDFPath = $request->file('pdf_path')->storeAs('public/cover_images', $pdf_path);
        }

        if ($request->hasFile('video_path')) {
            $ext = $request->file('video_path')->getClientOriginalExtension();
            $video_path = 'CI_' . time() . '.' . $ext;
            $VideoPath = $request->file('video_path')->storeAs('public/cover_images', $video_path);
        }

        if ($request->hasFile('audio_path')) {
            $ext = $request->file('audio_path')->getClientOriginalExtension();
            $audio_path = 'CI_' . time() . '.' . $ext;
            $AudioPath = $request->file('audio_path')->storeAs('public/cover_images', $audio_path);
        }


        // Save Resource
        $entity = $this->Resource->SaveResource(
            $data['name'],
            "resource_".rand(100000, 999999),
            $data['description'],
            $data['subject_id'],
            $pdf_path,
            $audio_path,
            $video_path,
            true
        );

        // Check resource created
        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while creating user, Please try again!', 'subjects'=>$subjects, 'courses'=>$courses]);
        }

        return redirect("/admin/resources")->with(['success' => $entity->name.' Resource Created!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\entity\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        if (auth()->user()->user_type_id == 0){
            $model = $this->Resource->GetByID($id);
            if ($model == null) {
                return redirect('/admin/resources')->with(['error' => 'Resources not found!']);
            }
            return view("student.cresources.details")->with(['active'=>'resource', 'subactive'=>'resource', 'model'=>$model]);
        }else{
            $model = $this->Resource->GetByID($id);
            if ($model == null) {
                return redirect('/admin/resources')->with(['error' => 'Resources not found!']);
            }
            return view("admin.cresources.details")->with(['active'=>'resource', 'subactive'=>'resource', 'model'=>$model]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\entity\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        if (auth()->user()->user_type_id == 0){
            return redirect('/admin/resources')->with(['error' => 'Unauthorized!']);
        }
        $subjects = $this->Subject->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        $courses = $this->Course->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        $model = $this->Resource->GetByID($id);
        if ($model == null) {
            return redirect('/admin/resources')->with(['error' => 'Resources not found!']);
        }
        return view("admin.cresources.edit")->with(['active'=>'resource', 'subactive'=>'resource', 'model'=>$model, 'subjects'=>$subjects, 'courses'=>$courses]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\entity\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function update(ResourceUpdateRequest $request, int $id)
    {
        if (auth()->user()->user_type_id == 0){
            return redirect('/admin/resources')->with(['error' => 'Unauthorized!']);
        }
        $subjects = $this->Subject->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        $courses = $this->Course->GetAllAndOrder('name', 'asc')->pluck('name', 'id');

        // Validated Request
        $data = $request->validated();

        //Handle File Upload
        if ($request->hasFile('pdf_path')) {
            $ext = $request->file('pdf_path')->getClientOriginalExtension();
            $pdf_path = 'CI_' . time() . '.' . $ext;
            $PDFPath = $request->file('pdf_path')->storeAs('public/cover_images', $pdf_path);
        }

        if ($request->hasFile('video_path')) {
            $ext = $request->file('video_path')->getClientOriginalExtension();
            $video_path = 'CI_' . time() . '.' . $ext;
            $VideoPath = $request->file('video_path')->storeAs('public/cover_images', $video_path);
        }

        if ($request->hasFile('audio_path')) {
            $ext = $request->file('audio_path')->getClientOriginalExtension();
            $audio_path = 'CI_' . time() . '.' . $ext;
            $AudioPath = $request->file('audio_path')->storeAs('public/cover_images', $audio_path);
        }

        $entity = $this->Resource->UpdateResource(
            $data['name'],
            $data['description'],
            $data['subject_id'],
            $pdf_path,
            $audio_path,
            $video_path,
            $id
        );

        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while updating user, Please try again!', 'subjects'=>$subjects, 'courses'=>$courses]);
        }

        return redirect("/admin/resources")->with(['success' => $entity->name.' Resource Updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\entity\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resource $resource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\entity\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function status(int $id)
    {
        if (auth()->user()->user_type_id == 0){
            return redirect('/admin/resources')->with(['error' => 'Unauthorized!']);
        }
        $model = $this->Resource->GetByID($id);
        if ($model == null) {
            return redirect('/admin/resources')->with(['error' => 'Resources not found!']);
        }
        $model->is_active = !$model->is_active;
        $entity = $this->Resource->Update($model->toArray(), $id);
        if ($entity == null) {
            return redirect('/admin/resources')->with(['error' => 'Error encountered while updating user, Please try again!']);
        }

        return redirect("/admin/resources")->with(['success' => $entity->name.' Resource Status Updated!']);
    }
}

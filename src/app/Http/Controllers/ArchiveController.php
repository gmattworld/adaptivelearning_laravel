<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\IArchiveRepository;
use App\Repositories\Interfaces\ICasesRepository;
use App\Archive;
use App\Http\Requests\Archive\ArchiveUpdateRequest;
use App\Http\Requests\Archive\ArchiveCreateRequest;

class ArchiveController extends Controller
{
    protected $Archive;
    protected $Cases;
    public function __construct(IArchiveRepository $IArchive, ICasesRepository $ICases)
    {
        $this->Archive = $IArchive;
        $this->Cases = $ICases;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $archives = $this->Archive->GetAll();
        return view("admin.archives.index")->with(['active'=>'archives', 'subactive'=>'archive', 'model'=>$archives]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cases = $this->Cases->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        return view("admin.archives.create")->with(['active'=>'archives', 'subactive'=>'archive', 'cases'=>$cases]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArchiveCreateRequest $request)
    {
        $cases = $this->Cases->GetAllAndOrder('name', 'asc')->pluck('name', 'id');

        // Validated Request
        $data = $request->validated();

        //Handle File Upload
        if ($request->hasFile('filepath')) {
            $ext = $request->file('filepath')->getClientOriginalExtension();
            $filepath = 'AR_' . time() . '.' . $ext;
            $path = $request->file('filepath')->storeAs('public/archive', $filepath);
        } else {
            $filepath = 'default.jpg';
        }

        // Create Archive
        $entity = $this->Archive->SaveArchive(
            $data["name"],
            $data["description"],
            $filepath,
            $data["case_id"],
            auth()->user()->id,
            1
        );

        // Check archive created
        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while creating archive, Please try again!', 'cases'=>$cases]);
        }
        return redirect("/admin/archives")->with(['success' => $entity->name.' successfully added to Archive!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Archive  $archiveType
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $model = $this->Archive->GetByID($id);
        if ($model == null) {
            return redirect('/admin/archives')->with(['error' => 'Archives not found!']);
        }
        return view("admin.archives.details")->with(['active'=>'archives', 'subactive'=>'archive', 'model'=>$model]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Archive  $archiveType
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $cases = $this->Cases->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        $model = $this->Archive->GetByID($id);
        if ($model == null) {
            return redirect('/admin/archives')->with(['error' => 'Archives not found!']);
        }
        return view("admin.archives.edit")->with(['active'=>'archives', 'subactive'=>'archive', 'model'=>$model, 'cases'=>$cases]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Archive  $archiveType
     * @return \Illuminate\Http\Response
     */
    public function update(ArchiveUpdateRequest $request, int $id)
    {
        $cases = $this->Cases->GetAllAndOrder('name', 'asc')->pluck('name', 'id');

        // Validated Request
        $data = $request->validated();

        $newFile = false;
        $filepath = "";

        //Handle File Upload
        if ($request->hasFile('filepath')) {
            $ext = $request->file('filepath')->getClientOriginalExtension();
            $filepath = 'CI_' . time() . '.' . $ext;
            $path = $request->file('filepath')->storeAs('public/cover_images', $filepath);
            $newFile = true;
        }

        // Save Archive
        $entity = $this->Archive->UpdateArchive(
            $data["name"],
            $data["description"],
            $filepath,
            $data["case_id"],
            auth()->user()->id,
            1,
            $id
        );

        // Check archive created
        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while updating archive, Please try again!', 'cases'=>$cases]);
        }

        return redirect("/admin/archives")->with(['success' => $entity->name.' Archive Updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Archive  $archiveType
     * @return \Illuminate\Http\Response
     */
    public function destroy(Archive $archiveType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Archive  $archiveType
     * @return \Illuminate\Http\Response
     */
    public function status(int $id)
    {
        $model = $this->Archive->GetByID($id);
        if ($model == null) {
            return redirect('/admin/archives')->with(['error' => 'Archives not found!']);
        }
        $model->is_logged_out = !$model->is_logged_out;
        $entity = $this->Archive->Update($model->toArray(), $id);
        if ($entity == null) {
            return redirect('/admin/archives')->with(['error' => 'Error encountered while updating archive, Please try again!']);
        }

        return redirect("/admin/archives")->with(['success' => $entity->name.' Archive Status Updated!']);
    }
}

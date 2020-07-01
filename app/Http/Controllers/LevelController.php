<?php

namespace App\Http\Controllers;

use App\entity\level;
use App\Repositories\Interfaces\ILevelRepository;
use App\Http\Requests\Level\LevelCreateRequest;
use App\Http\Requests\Level\LevelUpdateRequest;
use App\Repositories\Interfaces\IDepartmentRepository;

class LevelController extends Controller
{
    protected $Level;
    protected $Department;
    public function __construct(ILevelRepository $ILevel, IDepartmentRepository $IDepartment)
    {
        // $this->middleware('auth');
        $this->Level = $ILevel;
        $this->Department = $IDepartment;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $levels = $this->Level->GetAll();
        return view("admin.levels.index")->with(['active'=>'level', 'subactive'=>'level', 'model'=>$levels]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = $this->Department->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        return view("admin.levels.create")->with(['active'=>'level', 'subactive'=>'level', 'departments' => $departments]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LevelCreateRequest $request)
    {
        $departments = $this->Department->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        // Validated Request
        $data = $request->validated();

        // Save Level
        $entity = $this->Level->SaveLevel(
            $data['name'],
            $data['code'],
            $data['description'],
            $data['department_id'],
            true
        );

        // Check level created
        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while creating user, Please try again!', 'departments' => $departments]);
        }

        return redirect("/admin/levels")->with(['success' => $entity->name.' Level Created!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\entity\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $model = $this->Level->GetByID($id);
        if ($model == null) {
            return redirect('/admin/levels')->with(['error' => 'Levels not found!']);
        }
        return view("admin.levels.details")->with(['active'=>'level', 'subactive'=>'level', 'model'=>$model]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\entity\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $departments = $this->Department->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        $model = $this->Level->GetByID($id);
        if ($model == null) {
            return redirect('/admin/levels')->with(['error' => 'Levels not found!']);
        }
        return view("admin.levels.edit")->with(['active'=>'level', 'subactive'=>'level', 'model'=>$model, 'departments'=>$departments]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\entity\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function update(LevelUpdateRequest $request, int $id)
    {
        $departments = $this->Department->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        // Validated Request
        $data = $request->validated();

        $entity = $this->Level->UpdateLevel(
            $data['name'],
            $data['code'],
            $data['description'],
            $data['department_id'],
            $id
        );

        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while updating user, Please try again!', 'departments'=>$departments]);
        }

        return redirect("/admin/levels")->with(['success' => $entity->name.' Level Updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\entity\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function destroy(Level $level)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\entity\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function status(int $id)
    {
        $model = $this->Level->GetByID($id);
        if ($model == null) {
            return redirect('/admin/levels')->with(['error' => 'Levels not found!']);
        }
        $model->is_active = !$model->is_active;
        $entity = $this->Level->Update($model->toArray(), $id);
        if ($entity == null) {
            return redirect('/admin/levels')->with(['error' => 'Error encountered while updating user, Please try again!']);
        }

        return redirect("/admin/levels")->with(['success' => $entity->name.' Level Status Updated!']);
    }
}

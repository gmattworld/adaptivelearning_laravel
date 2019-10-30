<?php

namespace App\Http\Controllers;

use App\Court;
use App\Repositories\Interfaces\ICourtRepository;
use App\Http\Requests\Court\CourtCreateRequest;
use App\Http\Requests\Court\CourtUpdateRequest;

class CourtController extends Controller
{
    protected $Court;
    public function __construct(ICourtRepository $ICourt)
    {
        // $this->middleware('auth');
        $this->Court = $ICourt;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courts = $this->Court->GetAll();
        return view("admin.courts.index")->with(['active'=>'courts', 'subactive'=>'court', 'model'=>$courts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.courts.create")->with(['active'=>'courts', 'subactive'=>'court']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourtCreateRequest $request)
    {
        // Validated Request
        $data = $request->validated();

        // Save Court
        $entity = $this->Court->SaveCourt(
            $data['name'],
            $data['description'],
            $data['address'],
            $data['contact_person'],
            null,
            $data['contact_phone'],
            null,
            $data['contact_email'],
            null,
            $data['longitude'],
            $data['latitude'],
            true
        );

        // Check court created
        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while creating user, Please try again!']);
        }

        return redirect("/admin/courts")->with(['success' => $entity->name.' Court Created!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $model = $this->Court->GetByID($id);
        if ($model == null) {
            return redirect('/admin/courts')->with(['error' => 'Courts not found!']);
        }
        return view("admin.courts.details")->with(['active'=>'courts', 'subactive'=>'court', 'model'=>$model]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $model = $this->Court->GetByID($id);
        if ($model == null) {
            return redirect('/admin/courts')->with(['error' => 'Courts not found!']);
        }
        return view("admin.courts.edit")->with(['active'=>'courts', 'subactive'=>'court', 'model'=>$model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function update(CourtUpdateRequest $request, int $id)
    {
        // Validated Request
        $data = $request->validated();

        $entity = $this->Court->UpdateCourt(
            $data['name'],
            $data['description'],
            $data['address'],
            $data['contact_person'],
            null,
            $data['contact_phone'],
            null,
            $data['contact_email'],
            null,
            $data['longitude'],
            $data['latitude'],
            $id
        );

        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while updating user, Please try again!']);
        }

        return redirect("/admin/courts")->with(['success' => $entity->name.' Court Updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function destroy(Court $court)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function status(int $id)
    {
        $model = $this->Court->GetByID($id);
        if ($model == null) {
            return redirect('/admin/courts')->with(['error' => 'Courts not found!']);
        }
        $model->is_active = !$model->is_active;
        $entity = $this->Court->Update($model->toArray(), $id);
        if ($entity == null) {
            return redirect('/admin/courts')->with(['error' => 'Error encountered while updating user, Please try again!']);
        }

        return redirect("/admin/courts")->with(['success' => $entity->name.' Court Status Updated!']);
    }
}

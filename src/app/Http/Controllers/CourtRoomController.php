<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\ICourtRoomRepository;
use App\Repositories\Interfaces\ICourtRepository;
use App\CourtRoom;
use App\Http\Requests\CourtRoom\CourtRoomUpdateRequest;
use CourtRoomStatusEnum;
use App\Http\Requests\CourtRoom\CourtRoomCreateRequest;

class CourtRoomController extends Controller
{
    protected $CourtRoom;
    protected $Court;
    public function __construct(ICourtRoomRepository $ICourtRoom, ICourtRepository $ICourt)
    {
        // $this->middleware('auth');
        $this->CourtRoom = $ICourtRoom;
        $this->Court = $ICourt;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courtrooms = $this->CourtRoom->GetAll();
        return view("admin.courtrooms.index")->with(['active'=>'courts', 'subactive'=>'courtroom', 'model'=>$courtrooms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courts = $this->Court->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        return view("admin.courtrooms.create")->with(['active'=>'courts', 'subactive'=>'courtroom', 'courts'=>$courts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourtRoomCreateRequest $request)
    {
        $courts = $this->Court->GetAllAndOrder('name', 'asc')->pluck('name', 'id');

        // Validated Request
        $data = $request->validated();

        // Create CourtRoom
        $entity = $this->CourtRoom->SaveCourtRoom(
            $data["name"],
            $data["seat_count"],
            $data["location"],
            $data["court_id"],
            //CourtRoomStatusEnum::open(),
            'open',
            true
        );

        // Check courtroom created
        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while creating courtroom, Please try again!', 'courts'=>$courts]);
        }
        return redirect("/admin/courtrooms")->with(['success' => $entity->name.' CourtRoom Created!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $model = $this->CourtRoom->GetByID($id);
        if ($model == null) {
            return redirect('/admin/courtrooms')->with(['error' => 'CourtRooms not found!']);
        }
        return view("admin.courtrooms.details")->with(['active'=>'courts', 'subactive'=>'courtroom', 'model'=>$model]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CourtRoom  $Court
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $courts = $this->Court->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        $model = $this->CourtRoom->GetByID($id);
        if ($model == null) {
            return redirect('/admin/courtrooms')->with(['error' => 'CourtRooms not found!']);
        }
        return view("admin.courtrooms.edit")->with(['active'=>'courts', 'subactive'=>'courtroom', 'model'=>$model, 'courts'=>$courts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CourtRoom  $Court
     * @return \Illuminate\Http\Response
     */
    public function update(CourtRoomUpdateRequest $request, int $id)
    {
        $courts = $this->Court->GetAllAndOrder('name', 'asc')->pluck('name', 'id');

        // Validated Request
        $data = $request->validated();

        // Save CourtRoom
        $entity = $this->CourtRoom->UpdateCourtRoom(
            $data["name"],
            $data["seat_count"],
            $data["location"],
            $data["court_id"],
            $id
        );

        // Check courtroom created
        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while updating courtroom, Please try again!', 'courts'=>$courts]);
        }

        return redirect("/admin/courtrooms")->with(['success' => $entity->name.' CourtRoom Updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CourtRoom  $Court
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourtRoom $Court)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CourtRoom  $Court
     * @return \Illuminate\Http\Response
     */
    public function status(int $id)
    {
        $model = $this->CourtRoom->GetByID($id);
        if ($model == null) {
            return redirect('/admin/courtrooms')->with(['error' => 'CourtRooms not found!']);
        }
        $model->is_logged_out = !$model->is_logged_out;
        $entity = $this->CourtRoom->Update($model->toArray(), $id);
        if ($entity == null) {
            return redirect('/admin/courtrooms')->with(['error' => 'Error encountered while updating courtroom, Please try again!']);
        }

        return redirect("/admin/courtrooms")->with(['success' => $entity->name.' CourtRoom Status Updated!']);
    }
}

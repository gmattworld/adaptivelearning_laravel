<?php

namespace App\Http\Controllers;

use App\efiling;
use App\Repositories\Interfaces\IEfilingRepository;
use App\Repositories\Interfaces\ICategoryRepository;
use App\Http\Requests\Efiling\EfilingUpdateRequest;
use App\Http\Requests\Efiling\EfilingCreateRequest;

class EfilingController extends Controller
{
    protected $Efiling;
    protected $Categories;
    public function __construct(IEfilingRepository $IEfiling, ICategoryRepository $ICategories)
    {
        $this->Efiling = $IEfiling;
        $this->Categories = $ICategories;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $efilings = $this->Efiling->GetAll();
        if(auth()->user()->user_type_id == 0){
            return view("admin.efilings.cindex")->with(['active'=>'efilings', 'subactive'=>'efiling', 'model'=>$efilings]);
        }
        return view("admin.efilings.index")->with(['active'=>'efilings', 'subactive'=>'efiling', 'model'=>$efilings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->Categories->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        if(auth()->user()->user_type_id == 0){
            return view("admin.efilings.ccreate")->with(['active'=>'efilings', 'subactive'=>'efiling', 'categories'=>$categories]);
        }

        return view("admin.efilings.create")->with(['active'=>'efilings', 'subactive'=>'efiling', 'categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EfilingCreateRequest $request)
    {
        $categories = $this->Categories->GetAllAndOrder('name', 'asc')->pluck('name', 'id');

        // Validated Request
        $data = $request->validated();

        //Handle File Upload
        if ($request->hasFile('filepath')) {
            $ext = $request->file('filepath')->getClientOriginalExtension();
            $filepath = 'AR_' . time() . '.' . $ext;
            $path = $request->file('filepath')->storeAs('public/efiling', $filepath);
        } else {
            $filepath = 'default.jpg';
        }

        // Create Efiling
        $entity = $this->Efiling->SaveEfiling(
            $data["name"],
            $data["description"],
            $filepath,
            $data["category_id"],
            auth()->user()->id,
            1
        );

        // Check efiling created
        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while creating efiling, Please try again!', 'categories'=>$categories]);
        }

        return redirect("/admin/efilings")->with(['success' => $entity->name.' successfully added to Efiling!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Efiling  $efilingType
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $model = $this->Efiling->GetByID($id);
        if ($model == null) {
            return redirect('/admin/efilings')->with(['error' => 'Efilings not found!']);
        }


        if(auth()->user()->user_type_id == 0){
            return view("admin.efilings.cdetails")->with(['active'=>'efilings', 'subactive'=>'efiling', 'model'=>$model]);
        }
        return view("admin.efilings.details")->with(['active'=>'efilings', 'subactive'=>'efiling', 'model'=>$model]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Efiling  $efilingType
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $categories = $this->Categories->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        $model = $this->Efiling->GetByID($id);
        if ($model == null) {
            return redirect('/admin/efilings')->with(['error' => 'Efilings not found!']);
        }


        if(auth()->user()->user_type_id == 0){
            return view("admin.efilings.cedit")->with(['active'=>'efilings', 'subactive'=>'efiling', 'model'=>$model, 'categories'=>$categories]);
        }

        return view("admin.efilings.edit")->with(['active'=>'efilings', 'subactive'=>'efiling', 'model'=>$model, 'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Efiling  $efilingType
     * @return \Illuminate\Http\Response
     */
    public function update(EfilingUpdateRequest $request, int $id)
    {
        $categories = $this->Categories->GetAllAndOrder('name', 'asc')->pluck('name', 'id');

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

        // Save Efiling
        $entity = $this->Efiling->UpdateEfiling(
            $data["name"],
            $data["description"],
            $filepath,
            $data["category_id"],
            auth()->user()->id,
            1,
            $id
        );

        // Check efiling created
        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while updating efiling, Please try again!', 'categories'=>$categories]);
        }

        return redirect("/admin/efilings")->with(['success' => $entity->name.' Efiling Updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Efiling  $efilingType
     * @return \Illuminate\Http\Response
     */
    public function destroy(Efiling $efilingType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Efiling  $efilingType
     * @return \Illuminate\Http\Response
     */
    public function status(int $id)
    {
        $model = $this->Efiling->GetByID($id);
        if ($model == null) {
            return redirect('/admin/efilings')->with(['error' => 'Efilings not found!']);
        }
        $model->is_logged_out = !$model->is_logged_out;
        $entity = $this->Efiling->Update($model->toArray(), $id);
        if ($entity == null) {
            return redirect('/admin/efilings')->with(['error' => 'Error encountered while updating efiling, Please try again!']);
        }
        return redirect("/admin/efilings")->with(['success' => $entity->name.' Efiling Status Updated!']);
    }
}

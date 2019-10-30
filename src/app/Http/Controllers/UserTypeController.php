<?php

namespace App\Http\Controllers;

use App\UserType;
use App\Repositories\Interfaces\IUserTypeRepository;
use Illuminate\Http\Request;
use App\Http\Requests\UserTypes\UserTypeCreateRequest;
use App\Http\Requests\UserTypes\UserTypeUpdateRequest;

class UserTypeController extends Controller
{
    protected $UserType;
    protected $UserTypeFactory;
    public function __construct(IUserTypeRepository $IUserType)
    {
        $this->UserType = $IUserType;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usertypes = $this->UserType->GetAll();
        return view("admin.usertypes.index")->with(['active'=>'users', 'subactive'=>'usertype', 'model'=>$usertypes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.usertypes.create")->with(['active'=>'users', 'subactive'=>'usertype']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserTypeCreateRequest $request)
    {
        // Validated Request
        $data = $request->validated();

        // Save User Type
        $entity = $this->UserType->SaveUserType(
            $data['name'],
            $data['description'],
            true
        );

        // Check user type created
        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while creating user, Please try again!']);
        }

        return redirect("/admin/usertypes")->with(['success' => $entity->name.' User Type Created!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $model = $this->UserType->GetByID($id);
        if ($model == null) {
            return redirect('/admin/usertypes')->with(['error' => 'User types not found!']);
        }
        return view("admin.usertypes.details")->with(['active'=>'users', 'subactive'=>'usertype', 'model'=>$model]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $model = $this->UserType->GetByID($id);
        if ($model == null) {
            return redirect('/admin/usertypes')->with(['error' => 'User types not found!']);
        }
        return view("admin.usertypes.edit")->with(['active'=>'users', 'subactive'=>'usertype', 'model'=>$model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function update(UserTypeUpdateRequest $request, int $id)
    {
        // Validated Request
        $data = $request->validated();

        $entity = $this->UserType->UpdateUserType(
            $data['name'],
            $data['description'],
            $id
        );

        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while updating user, Please try again!']);
        }

        return redirect("/admin/usertypes")->with(['success' => $entity->name.' User Type Updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserType $userType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function status(int $id)
    {
        $model = $this->UserType->GetByID($id);
        if ($model == null) {
            return redirect('/admin/usertypes')->with(['error' => 'User types not found!']);
        }
        $model->is_active = !$model->is_active;
        $entity = $this->UserType->Update($model->toArray(), $id);
        if ($entity == null) {
            return redirect('/admin/usertypes')->with(['error' => 'Error encountered while updating user, Please try again!']);
        }

        return redirect("/admin/usertypes")->with(['success' => $entity->name.' User Type Status Updated!']);
    }
}

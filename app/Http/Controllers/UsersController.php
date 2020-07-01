<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\ChangePasswordRequest;
use App\Repositories\Interfaces\IUserRepository;
use App\Repositories\Interfaces\IUserTypeRepository;
use App\entity\User;
use App\Http\Requests\Users\UserUpdateRequest;
use App\Http\Requests\Users\UserCreateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    protected $User;
    protected $UserType;
    public function __construct(IUserRepository $IUser, IUserTypeRepository $IUserType)
    {
        // $this->middleware('auth');
        $this->User = $IUser;
        $this->UserType = $IUserType;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->User->GetAll();
        return view("admin.users.index")->with(['active'=>'users', 'subactive'=>'user', 'model'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_types = $this->UserType->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        return view("admin.users.create")->with(['active'=>'users', 'subactive'=>'user', 'user_types'=>$user_types]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        $user_types = $this->UserType->GetAllAndOrder('name', 'asc')->pluck('name', 'id');

        // Validated Request
        $data = $request->validated();

        //Handle File Upload
        if ($request->hasFile('dp_image')) {
            $ext = $request->file('dp_image')->getClientOriginalExtension();
            $dp_image = 'DP_' . time() . '.' . $ext;
            $path = $request->file('dp_image')->storeAs('public/DPs', $dp_image);
        } else {
            $dp_image = 'default.jpg';
        }

        // Create User
        $entity = $this->User->SaveUser(
            $data["lastname"],
            $data["othernames"],
            $data["username"],
            $data["email"],
            $data["phone"],
            $data["address"],
            $data["user_type"],
            $dp_image,
            true
        );

        // Check user created
        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while creating user, Please try again!', 'user_types'=>$user_types]);
        }
        return redirect("/admin/users")->with(['success' => $entity->name.' User Created!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $userType
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $model = $this->User->GetByID($id);
        if ($model == null) {
            return redirect('/admin/users')->with(['error' => 'Users not found!']);
        }
        return view("admin.users.details")->with(['active'=>'users', 'subactive'=>'user', 'model'=>$model]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $userType
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $model = auth()->user();
        return view("admin.users.profile")->with(['active'=>'dashboard', 'model'=>$model]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $userType
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $user_types = $this->UserType->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        $model = $this->User->GetByID($id);
        if ($model == null) {
            return redirect('/admin/users')->with(['error' => 'Users not found!']);
        }
        return view("admin.users.edit")->with(['active'=>'users', 'subactive'=>'user', 'model'=>$model, 'user_types'=>$user_types]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $userType
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, int $id)
    {
        $user_types = $this->UserType->GetAllAndOrder('name', 'asc')->pluck('name', 'id');

        // Validated Request
        $data = $request->validated();

        $newFile = false;
        $dp_image = "";

        //Handle File Upload
        if ($request->hasFile('dp_image')) {
            $ext = $request->file('dp_image')->getClientOriginalExtension();
            $dp_image = 'DP_' . time() . '.' . $ext;
            $path = $request->file('dp_image')->storeAs('public/DPs', $dp_image);
            $newFile = true;
        }

        // Save User
        $entity = $this->User->UpdateUser(
            $data['lastname'],
            $data['othernames'],
            $data['username'],
            $data['email'],
            $data['phone'],
            $data['address'],
            $data['user_type'],
            $dp_image,
            $newFile,
            $id
        );

        // Check user created
        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while updating user, Please try again!', 'user_types'=>$user_types]);
        }

        return redirect("/admin/users")->with(['success' => $entity->name.' User Updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $userType
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $userType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $userType
     * @return \Illuminate\Http\Response
     */
    public function status(int $id)
    {
        if ($id == auth()->user()->id) {
            return redirect('/admin/users')->with(['error' => `Self disabling is not permitted`]);
        }

        $model = $this->User->GetByID($id);
        if ($model == null) {
            return redirect('/admin/users')->with(['error' => 'Users not found!']);
        }

        $model->is_logged_out = !$model->is_logged_out;
        $entity = $this->User->Update($model->toArray(), $id);
        if ($entity == null) {
            return redirect('/admin/users')->with(['error' => 'Error encountered while updating user, Please try again!']);
        }

        return redirect("/admin/users")->with(['success' => $entity->name.' User Status Updated!']);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $userType
     * @return \Illuminate\Http\Response
     */
    public function ResetPassword(int $id)
    {
        if ($id == auth()->user()->id) {
            return redirect('/admin/users')->with(['error' => `Self password reset is not permitted`]);
        }

        $model = $this->User->GetByID($id);
        if ($model == null) {
            return redirect('/admin/users')->with(['error' => 'Users not found!']);
        }
        $model->password = Hash::make('password');
        $model->save();
        return redirect("/admin/users")->with(['success' => $model->name.' User password reset successfully!']);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ChangePwd()
    {
        return view("admin.users.changepassword")->with(['active'=>'dashboard']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $userType
     * @return \Illuminate\Http\Response
     */
    public function ChangePassword(ChangePasswordRequest $request)
    {
        // User authorization required
        $model = $this->User->GetByID(auth()->user()->id);

        // Validated Request
        $data = $request->validated();
        // Check old password match
        if(Hash::check($model->password, $data['password'])){
            return redirect()->back()->withInput()->with(['error' => 'Incorrect password! Kindly check your input and try again!']);
        }
        $pwd = $data['newpassword'];
        $model->password = Hash::make($pwd);
        $model->save();
        Auth::logout();
        return redirect("/login")->with(['success' => $model->name.' password change!']);
    }
}

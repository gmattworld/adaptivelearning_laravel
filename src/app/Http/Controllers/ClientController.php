<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\IClientRepository;
use App\Repositories\Interfaces\IUserTypeRepository;
use App\Client;
use App\Http\Requests\Client\ClientUpdateRequest;
use App\Http\Requests\Client\ClientCreateRequest;


class ClientController extends Controller
{
    protected $Client;
    protected $UserType;
    public function __construct(IClientRepository $IClient, IUserTypeRepository $IUserType)
    {
        // $this->middleware('auth');
        $this->Client = $IClient;
        $this->UserType = $IUserType;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = $this->Client->GetAll();
        return view("admin.clients.index")->with(['active'=>'users', 'subactive'=>'client', 'model'=>$clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_types = $this->UserType->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        return view("admin.clients.create")->with(['active'=>'users', 'subactive'=>'client', 'user_types'=>$user_types]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientCreateRequest $request)
    {
        $user_types = $this->UserType->GetAllAndOrder('name', 'asc')->pluck('name', 'id');

        // Validated Request
        $data = $request->validated();
        //dd($data);

        //Handle File Upload
        if ($request->hasFile('dp_image')) {
            $ext = $request->file('dp_image')->getClientOriginalExtension();
            $dp_image = 'DP_' . time() . '.' . $ext;
            $path = $request->file('dp_image')->storeAs('public/DPs', $dp_image);
        } else {
            $dp_image = 'default.jpg';
        }

        // Create Client
        $entity = $this->Client->SaveClient(
            $data["dob"],
            $data["brief"],
            $data["gender"],
            $data["skills"],
            $data["occupation"],
            $data["lastname"],
            $data["othernames"],
            $data["username"],
            $data["email"],
            $data["phone"],
            $data["address"],
            $dp_image,
            true
        );
        //dd($entity);
        // Check client created
        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while creating client, Please try again!', 'user_types'=>$user_types]);
        }
        return redirect("/admin/clients")->with(['success' => $data["username"].' Client Created!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $clientType
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $model = $this->Client->GetByID($id);
        if ($model == null) {
            return redirect('/admin/clients')->with(['error' => 'Clients not found!']);
        }
        return view("admin.clients.details")->with(['active'=>'users', 'subactive'=>'client', 'model'=>$model]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $clientType
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $user_types = $this->UserType->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        $model = $this->Client->GetByID($id);
        if ($model == null) {
            return redirect('/admin/clients')->with(['error' => 'Clients not found!']);
        }
        return view("admin.clients.edit")->with(['active'=>'users', 'subactive'=>'client', 'model'=>$model, 'user_types'=>$user_types]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $clientType
     * @return \Illuminate\Http\Response
     */
    public function update(ClientUpdateRequest $request, int $id)
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

        // Save Client
        $entity = $this->Client->UpdateClient(
            $data["dob"],
            $data["brief"],
            $data["gender"],
            $data["skills"],
            $data["occupation"],
            $data['lastname'],
            $data['othernames'],
            $data['username'],
            $data['email'],
            $data['phone'],
            $data['address'],
            $dp_image,
            $newFile,
            $id
        );

        // Check client created
        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while updating client, Please try again!', 'user_types'=>$user_types]);
        }

        return redirect("/admin/clients")->with(['success' => $data['username'].' info Updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $clientType
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $clientType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $clientType
     * @return \Illuminate\Http\Response
     */
    public function status(int $id)
    {
        $model = $this->Client->GetByID($id);
        if ($model == null) {
            return redirect('/admin/clients')->with(['error' => 'Clients not found!']);
        }
        $model->is_active = !$model->is_active;
        $entity = $this->Client->Update($model->toArray(), $id);
        if ($entity == null) {
            return redirect('/admin/clients')->with(['error' => 'Error encountered while updating client, Please try again!']);
        }

        return redirect("/admin/clients")->with(['success' => $entity->name.' Client Status Updated!']);
    }
}

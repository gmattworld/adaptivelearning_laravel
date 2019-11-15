<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\IResourceRepository;
use App\Repositories\Interfaces\IUserRepository;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $Resource;
    protected $User;
    public function __construct(IResourceRepository $IResource, IUserRepository $IUser)
    {
        // $this->middleware('auth')
        $this->Resource = $IResource;
        $this->User = $IUser;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->user_type_id == 0){
            if (auth()->user()->read_type == null){
                return redirect("/admin/adaptive")->with(['active'=>'resource']);
            }

            $resources = $this->Resource->GetAll();
            return view("student.cresources.index")->with(['active'=>'resource', 'subactive'=>'resource', 'model'=>$resources]);
        } else
            return view('admin.dashboard.index')->with(['active'=>'dashboard', 'subactive'=>'']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adaptive()
    {
        if (auth()->user()->user_type_id == 0 && auth()->user()->read_type == null){
            return view("student.adaptive.test")->with(['active'=>'resource']);
        } else
            return redirect("/admin/dashboard")->with(['active'=>'dashboard', 'subactive'=>'']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function save_adaptive(Request $request)
    {
        // User authorization required
        $model = $this->User->GetByID(auth()->user()->id);

        // Validated Request
        $data = $request->input('read_type');
        $model->read_type = $data;
        $model->save();

        return redirect("/admin/dashboard")->with(['success' => auth()->user()->name .' read type has been updated to '. $data .'!']);
    }
}

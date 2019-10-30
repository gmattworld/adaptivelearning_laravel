<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\ICasesRepository;

class DashboardController extends Controller
{
    protected $Cases;
    public function __construct(ICasesRepository $ICases)
    {
        // $this->middleware('auth');
        $this->Cases = $ICases;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->user_type_id == 0){
            return view('admin.dashboard.cindex')->with(['active'=>'dashboard', 'subactive'=>'']);
        }else {
            $pendingcases = $this->Cases->GetAllPending();
            $ongoingcases = $this->Cases->GetAllOngoing();
            return view('admin.dashboard.index')->with(['active'=>'dashboard', 'subactive'=>'', 'pendingcases'=> $pendingcases, 'ongoingcases'=> $ongoingcases]);
        }
    }
}

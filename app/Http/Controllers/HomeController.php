<?php

namespace App\Http\Controllers;
use App\Models\data;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
     public function index()
    {
        $sd = data::where('pendidikan_terakhir', 'SD')->count();
        $smp = data::where('pendidikan_terakhir', 'SMP')->count();
        $sma = data::where('pendidikan_terakhir', 'SMA')->count();
        $s1 = data::where('pendidikan_terakhir', 'S1')->count();
        $s2 = data::where('pendidikan_terakhir', 'S2')->count();
        $s3 = data::where('pendidikan_terakhir', 'S3')->count();
        

        $total = data::all()->count();

        $totaladmin = User::all()->count();
        return view('dashboard.index', compact('total', 'totaladmin', 'sd', 'smp', 'sma', 's1', 's2', 's3'));
    }

}

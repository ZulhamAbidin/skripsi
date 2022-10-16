<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data;
use App\Models\User;
use App\Http\Requests\DataRequest;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
        return view('Dashboard.index', compact('total', 'totaladmin', 'sd', 'smp', 'sma', 's1', 's2', 's3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

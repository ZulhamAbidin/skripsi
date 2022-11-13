<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data;
use App\Http\Requests\DataRequest;
use App\Exports\dataexport;
use Excel;

class datacontroller extends Controller
{
    /**

     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {

        return view('Dashboard.data.index', [
            "datamhs" => data::all()
        ]);

        // $keyword = $request->keyword;
        // $datamhs = data::where('nama_lengkap', 'LIKE', '%' . $keyword . '%')
        //     ->orWhere('alamat_domisili', 'LIKE', '%' . $keyword . '%')
        //     ->orWhere('hari', 'LIKE', '%' . $keyword . '%')
        //     ->orWhere('jenis_kelamin', 'LIKE', '%' . $keyword . '%')
        //     ->orWhere('pendidikan_terakhir', 'LIKE', '%' . $keyword . '%')
        //     ->orWhere('jurusan', 'LIKE', '%' . $keyword . '%')
        //     ->orderBy('id', 'desc')
        //     ->paginate(5);
        // return view('Dashboard.data.index', compact('datamhs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new data();
        return view('dashboard.data.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DataRequest $request)
    {
        $model = new data();
        $model->nama_lengkap = $request->nama_lengkap;
        $model->alamat_domisili = $request->alamat_domisili;
        $model->hari = $request->hari;
        $model->jenis_kelamin = $request->jenis_kelamin;
        $model->pendidikan_terakhir = $request->pendidikan_terakhir;
        $model->jurusan = $request->jurusan;
        $model->save();
        return redirect('dashboard/data')->with('success', 'Data Berhasil Disimpan');
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
        // [ "title" => "Edit"];
        $model = data::find($id);
        return view('dashboard.data.edit', compact('model'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DataRequest $request, $id)
    {
        $model = data::find($id);
        $model->nama_lengkap = $request->nama_lengkap;
        $model->hari = $request->hari;
        $model->alamat_domisili = $request->alamat_domisili;
        $model->jenis_kelamin = $request->jenis_kelamin;
        $model->pendidikan_terakhir = $request->pendidikan_terakhir;
        $model->jurusan = $request->jurusan;
        $model->save();
        return redirect('dashboard/data')->with('success', 'Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = data::find($id);
        $model->delete();
        return redirect('dashboard/data')->with('success', 'Data Berhasil Dihapus');
    }

    public function cetakForm()
    {
        return view('/dashboard/cetak/cetak-pekerja-form');
    }

    public function cetakPekerjaPertanggal($tglawal, $tglakhir)
    {
        $cetakPertanggal = data::whereBetween('hari', [$tglawal, $tglakhir])->get();
        return view('/dashboard/cetak/cetak-pekerja-pertanggal', compact('cetakPertanggal'));
    }

    public function exportintoexcel()
    {
        return Excel::download(new dataexport(), 'datalist.xlsx');
    }

    public function exportintocsv()
    {
        return Excel::download(new dataexport(), 'datalist.xlsx');
    }
}

<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\datacontroller;
use App\Http\Controllers\documentcontroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UpdatePasswordController;


Route::get('/', function () {
    return view('/auth/login');
});

//  LOGIN AUTH 
Route::get('/', function () {
    return view('/auth/login');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//  LOGIN DASHBOARD 
Route::get('/dashboard', function( ) {
    return view('dashboard.index');
})->middleware('auth');

//  DATA INPUTAN 
Route::get('/dashboard', [DashboardController::class, 'index', "title" => "Coba" ])->middleware('auth');
Route::resource('dashboard/data', datacontroller::class)->middleware('auth');

// CETAK DATA PERTANGGAL
Route::get('/dashboard/cetak/cetak-data-pekerja-form', [datacontroller::class, 'cetakForm'])->name('cetak-data-pekerja-form')->middleware('auth');
Route::get('/dashboard/cetak/cetak-data-pertanggal/{tglawal}/{tglakhir}', [datacontroller::class, 'cetakPekerjaPertanggal'])->name('cetak-data-pertanggal')->middleware('auth');
Route::get('/exportexcel', [datacontroller::class, 'exportexcel'])->name('exportexcel');

// DOCUMENT SHOW DOWNLOAD ADD
Route::get('/dashboard/document/index',[documentcontroller::class,'uploaddocument'])->middleware('auth');
Route::post('/dashboard/document/',[documentcontroller::class,'store'])->middleware('auth');
Route::get('/dashboard/document/show',[documentcontroller::class,'show'])->middleware('auth');
Route::get('/dashboard/document/download/{file}',[documentcontroller::class,'download'])->middleware('auth');

// DOCUMENT DELETE
Route::get('/dashboard/document/show/{id}',[documentcontroller::class,'delete'])->middleware('auth');
Route::get('/dashboard/document/view/{is}',[documentcontroller::class,'view'])->middleware('auth');

// GANTI PASSWORD
Route::get('dashboard/password/edit',[UpdatePasswordController::class,'edit'])->name('password.edit')->middleware('auth');
Route::put('dashboard/password/edit',[UpdatePasswordController::class,'update'])->middleware('auth');



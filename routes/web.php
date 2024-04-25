<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home ', function () {
    return view('biodata');
});


Route::get('/about', function () {
    $nama = "Ali";
    $jenis_kelamin = "laki_laki";
    $alamat = "Cibaduyouth";
    $pendidikan = "SMK";
    $pekerjaan = "uniko";
    return view('biodata2',compact('nama','jenis_kelamin','alamat','pendidikan','pekerjaan'));
});

Route::get('/kontak', function () {
    return view('biodata3');
});


//parameter
Route::get('/about2/{nama}/{jenis_kelamin}/{alamat}/{pendidikan}/{pekerjaan}', function (Request $request, $nama, $jenis_kelamin, $alamat, $pendidikan, $pekerjaan) {
    $nama2 = $nama;
    $jenis_kelamin2 = $jenis_kelamin;
    $alamat2 = $alamat;
    $pendidikan2 = $pendidikan;
    $pekerjaan2 = $pekerjaan;
    return view('param',compact('nama2','jenis_kelamin2','alamat2','pendidikan2','pekerjaan2'));
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengenalanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StaffBranchController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\BranchController;

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

Route::get('/welcome', function () {
    echo ('<center>');
    echo ('<u> Hello semuanya, apa kabar? </u><br>');
    echo ('<u> Pada kali ini kita sedang belajar route basic </u>');
    echo ('</center>');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/pages1', function () {
    return view('pages1.index');
});

Route::get('/pages2', function () {
    return view('pages2.index');
});

Route::get('/pages3', function () {
    return view('pages3.index');
});

// route parameter
Route::get(
    '/biodata/{nama}/{umur}/{alamat}/{jenis_kelamin}/{hobby}',
    function ($nama, $umur, $alamat, $jenis_kelamin, $hobby) {
        return view(
            'pages1.biodata',
            compact('nama', 'umur', 'alamat', 'jenis_kelamin', 'hobby')
        );
    }
);

// route optional parameter
Route::get('/pesanan/{material?}/{material1?}', function ($material = 'kosong', $material1 = 'kosong') {
    return view('pages1.pesanan', compact('material', 'material1'));
});

Route::get('/pengenalan', [App\Http\Controllers\PengenalanController::class, 'pengenalan']);

Route::get('/intro/{nama}/{alamat}/{umur}', [PengenalanController::class, 'intro']);

Route::get('/siswa', [PengenalanController::class, 'siswa']);

Route::get('/menu', [App\Http\Controllers\LatihanController::class, 'menu']);

Route::get('/kampus', [App\Http\Controllers\LatihanController::class, 'kampus']);

Route::get('/tv', [App\Http\Controllers\LatihanController::class, 'tv']);

Route::get('/belanja', [App\Http\Controllers\LatihanController::class, 'belanja']);

Route::get('/post', [PostController::class, 'index']);

Route::get('/staffbranch', [StaffBranchController::class, 'index']);

Route::get('/staff', [StaffController::class, 'index']);

Route::get('/branch', [BranchController::class, 'index']);

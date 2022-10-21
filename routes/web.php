<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;

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

Route::controller(MatakuliahController::class)->group(function () {
    Route::get('/insert_mk', 'insert');
    Route::get('/select_mk', 'select');
    Route::get('/update_mk', 'update');
    Route::get('/delete_mk', 'delete');
});

Route::controller(MahasiswaController::class)->group(function () {
    Route::get('/insert_mhs', 'insert');
    Route::get('/select_mhs', 'select');
    Route::get('/update_mhs', 'update');
    Route::get('/delete_mhs', 'delete');
});

Route::controller(DosenController::class)->group(function () {
    Route::get('/insert_dsn', 'insert');
    Route::get('/select_dsn', 'select');
    Route::get('/update_dsn', 'update');
    Route::get('/delete_dsn', 'delete');
});


Route::get('/', function () {
    $dsn = [
    'Apriade Voutama, M.Kom.',
    'Betha Nurina Sari, M.Kom.',
    'Intan Purnamasari, M.Kom.',
    'Iqbal Maulana, M.Kom.',
    'Oman Komarudin, M.Kom.',
    'Purwantoro, M.Kom.',
    'Ratna Mufidah, M.Kom.',
    'Riza Ibnu Adam, M.Si.',
    'Susilawati, M.Si.',
    'Tesa Nur Padilah, S.Si., M.Sc.',
    ];
    return view('dosen')->with('dosen',$dsn);
});

Route::get('/matkul', function () {
    $mk = [
        'Sistem Operasi',
        'Data Mining',
        'Pemrograman Berbasis Mobile',
        'Pemrograman Berbasis Web',
        'Pendidikan Agama Islam',
        'Framework Web',
        'Cloud Computing',
        'Blockchain',
        'Jaringan Komputer',
        'Basis Data',
        ];
    return view('matakuliah')->with('matkul',$mk);
});

Route::get('/mahasiswa', function () {
    $mhs = [
        'Risa Adelia',
        'Sopiatul Ulum',
        'Radika Tripena Lubis',
        'Nabila Khairunnisa',
        'Nazwa Ariana Salsabila',
        'Reza Zulfiqri',
        'Rifqy Al-Farezal',
        'Rangga Fitra',
        'Raden Mohammad Riswan',
        'Nanda Sukarno',
        ];
    return view('mahasiswa')->with('mahasiswa',$mhs);
});

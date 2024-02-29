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
    return redirect()->route('dashboard.index');
})->name('/');


/**
 * Deklarasi
 */
// Dashboard
use App\Http\Controllers\DashboardController as c_dashboard; $dashboard = c_dashboard::class;
// Note
use App\Http\Controllers\NoteController as c_note; $note = c_note::class;


use App\Http\Controllers\PengeluaranController as c_pengeluaran; $pengeluaran = c_pengeluaran::class;
use App\Http\Controllers\MstParameterController as c_mst_parameter; $mst_parameter = c_mst_parameter::class;




// dashhboard
Route::get('/dashboard',[$dashboard,'index'])->name('dashboard.index');


// note
Route::get('/page/note', [$note, 'index'])->name('note.index');
Route::get('/page/note/create', [$note, 'create'])->name('note.create');
route::post('/page/note/store',[$note,'store'])->name('note.simpan');
Route::get('/page/note/delete/{id}',[$note,'delete'])->name('note.delete');
Route::get('/page/note/show/{id}',[$note,'show'])->name('note.show');
Route::get('/page/note/edit/{id}',[$note,'edit'])->name('note.edit');
route::post('/page/note/update/{id}',[$note,'update'])->name('note.update');

// pengeluaran;
// Route::get('/page/pengeluaran',[$pengeluaran,'index'])->name('pengeluaran.index');
// Route::get('/page/pengeluaran/create',[$pengeluaran,'create'])->name('pengeluaran.create');
// Route::post('/page/pengeluaran/store',[$pengeluaran,'store'])->name('pengeluaran.store');
// Route::get('/page/pengeluaran/{id}')

// Parameter
Route::get('/page/parameter',[$mst_parameter,'index'])->name('parameter.index');
Route::post('/page/parameter/save',[$mst_parameter,'store'])->name('parameter.save');
Route::get('/page/parameter/delete',[$mst_parameter,'delete'])->name('parameter.delete');

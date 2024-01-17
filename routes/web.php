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
use App\Http\Controllers\DashboardController as c_dashboard;
$dashboard = c_dashboard::class;
// Note
use App\Http\Controllers\NoteController as c_note;
$note = c_note::class;




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

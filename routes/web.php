<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
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
Route::get('index', [PageController::class, 'index'])->name('index');
Route::get('/', [PageController::class, 'index'])->name('/');
Route::get('legals', [PageController::class, 'legals'])->name('legals');

Route::get('/export', [AdminController::class, 'export'])->name('export')->middleware('auth');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::post('participate', [PageController::class, 'participate'])->name('participate');


Route::get('/admin/participations', [AdminController::class, 'participations'])->name('admin.participations')->middleware('auth');
Route::get('/admin/participations/{participation}/edit', [AdminController::class, 'participationsEdit'])->name('admin.participationsEdit')->middleware('auth');
Route::patch('/admin/participations/{participation}/update', [AdminController::class, 'participationsUpdate'])->name('admin.participationsUpdate')->middleware('auth');
/*Route::get('/admin/news/store', [NewsController::class, 'store'])->name('admin.news.store')->middleware('auth');*/
Route::delete('/admin/participations/{participation}/destroy', [AdminController::class, 'participationsDestroy'])->name('admin.participations.destroy')->middleware('auth');

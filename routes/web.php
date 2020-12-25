<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\WebsiteController;

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
    return view('website.index');
});
Route::get('/',[WebsiteController::class,'index'])->name('index');
Route::get('/project',[WebsiteController::class,'team'])->name('team');
Route::get('/member',[WebsiteController::class,'member'])->name('member');
Route::get('/about',[WebsiteController::class,'about'])->name('about');

// Route::resource('/team', 'WebsiteController')->route('team');
Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', function () {
        return view('dashboard.index');
    })->name('dashboard');

    Route::get('/team',[TeamController::class,'index'])->name('team');
    Route::post('/team',[TeamController::class,'store'])->name('team');
    Route::post('/team/{team}/edit',[TeamController::class,'update'])->name('team');
    Route::delete('/team/{team}',[TeamController::class,'destroy'])->name('team');

    Route::get('/project',[ProjectController::class,'index'])->name('project');
    Route::post('/project',[ProjectController::class,'store'])->name('project');
    Route::post('/project/{project}/edit',[ProjectController::class,'update'])->name('project');
    Route::delete('/project/{project}',[ProjectController::class,'destroy'])->name('project');

});

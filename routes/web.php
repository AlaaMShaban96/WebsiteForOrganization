<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DasboardController;

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
Route::get('/project',[WebsiteController::class,'project'])->name('project');
Route::get('/project/{project}',[WebsiteController::class,'showProject'])->name('project');
Route::get('/members',[WebsiteController::class,'member'])->name('member');
Route::get('/about',[WebsiteController::class,'about'])->name('about');
Route::get('/login',[WebsiteController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'login']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout',[LoginController::class,'logout']);

    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/',[DasboardController::class,'index'] )->name('dashboard');

        Route::get('/team',[TeamController::class,'index'])->name('team');
        Route::post('/team',[TeamController::class,'store'])->name('team');
        Route::post('/team/{team}/edit',[TeamController::class,'update'])->name('team');
        Route::delete('/team/{team}',[TeamController::class,'destroy'])->name('team');
    
        Route::get('/project',[ProjectController::class,'index'])->name('project');
        Route::post('/project',[ProjectController::class,'store'])->name('project');
        Route::post('/project/{project}/edit',[ProjectController::class,'update'])->name('project');
        Route::delete('/project/{project}',[ProjectController::class,'destroy'])->name('project');
        
        Route::get('/aboutUs',[AboutUsController::class,'index'])->name('aboutUs');
        Route::post('/aboutUs',[AboutUsController::class,'store'])->name('aboutUs');
        Route::put('/aboutUs/{aboutUs}',[AboutUsController::class,'update'])->name('aboutUs');
        Route::post('/restpassword',[AboutUsController::class,'restpassword'])->name('aboutUs');
    
    });
});
// Route::resource('/team', 'WebsiteController')->route('team');


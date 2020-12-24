<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;

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
    return view('index');
});
// Route::resource('/team', 'TeamController')->route('team');
Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('team');
    Route::get('/team',[TeamController::class,'index'])->name('team');

});

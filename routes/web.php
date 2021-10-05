<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\FoldersController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Monolog\Registry;

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
Auth::routes();

Route::get('/', [LandingController::class, 'index']);
Route::get('/tasks', [HomeController::class, 'index']);
Route::get('/profile', function(){
    return view("dashboard.profile");
});
Route::get("/list", function () {
    return abort("404");
});

Route::get("/task", function () {
    return abort("404");
});
Route::resource("/task", TaskController::class);
Route::resource("/list", FoldersController::class);

Route::get("/tasks/{listName}/{listId?}/{taskId?}", [HomeController::class, 'index']);
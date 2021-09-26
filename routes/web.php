<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', [HomeController::class, 'index'])->name('home');
// Auth::routes();
// Route::get("/today", [FolderController::class, "index"])->name("Today");
// Route::get("/important", [FolderController::class, "index"]);
// Route::get("/Events", [FolderController::class, "index"]);
// Route::get("/project", [FolderController::class, "index"]);

Route::put("/test", function() {
    return "request recived";
});
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
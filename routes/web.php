<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\FolderController;
use App\Models\Folder;
use App\Models\Task;
use App\Http\Controllers\TestController;
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

Route::get("/", function ()
{
    return view("layout");
});

Route::get("/profile", function ()
{
    return view("dashboard.profile");
});

// Route::get("/profile/blank", function ()
// {
//     return view("dashboard.blank");
// });
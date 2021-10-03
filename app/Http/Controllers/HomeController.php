<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\FoldersController;
use App\Http\Controllers\TaskController;
// use Google\Service\OrgPolicyAPI\Resource\FoldersConstraints;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $folders = new FoldersController;
        $lists = $folders->index();

        $tasks = new TaskController;
        $allTasks = $tasks->index();
        return view('home', 
        [
            "folders" => $lists,
            "tasks" => $allTasks
        ]);
    }
}

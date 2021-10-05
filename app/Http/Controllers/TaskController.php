<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;
use App\Http\Controllers\FoldersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class TaskController extends Controller
{
    public function showing()
    {
        $userId = Auth::user()->id ?? null;
        $folders =  (new FoldersController())->index();     

        $tasks = Tasks::where([
           ["userId", $userId],
           ])->get();
        return view("tasks", [
            "tasks" => $tasks,
            "folders" => $folders
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $lists = (new FoldersController)->index();
        $userId = Auth::user()->id ?? null;
             $tasks = Tasks::where([
                ["userId", $userId],
                ])->get();
         return $tasks;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $userId = Auth::user()->id ?? null;

        $tasks = new Tasks;
        $tasks->name = $request->taskName;
        $tasks->userId = $request->userId;
        $tasks->folderId = $request->listId;
        $tasks->reminder = $request->remindData;
        // dd($request->userId);
        $tasks->isDone = 0;
        $tasks->save();
        // return $request->taskName;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {        
        $aTask = Tasks::where("id",$id)->get()->first();        
        if($aTask->isDone == 1)
        {  
            Tasks::where("id", $id)->update(["isDone"=>0]);
        }
        else
        {
            Tasks::where("id", $id)->update(["isDone"=>1]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tasks = new Tasks;
        $tasks->destroy($id);
    }
}

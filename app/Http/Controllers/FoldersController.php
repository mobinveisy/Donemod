<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folders;
use Illuminate\Support\Facades\Auth;

class FoldersController extends Controller
{
    // public function showing()
    // {
    //         return view("folders", [
    //             "folders" => $this->index()
    //         ]);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $userId = Auth::user()->id ?? null;
            $folders = Folders::where("userId", $userId)
            ->get();
            return $folders;
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
     * @return \Illuminate\Http\Response
     */
    public function store($userId)
    {
        $folders = new Folders;
        $folders->name = "Today";
        $folders->userId = $userId;
        $folders->taskEntity = 0;
        $folders->save();
    }
    public function store2($userId)
    {
        $folders = new Folders;
        $folders->name = "Events";
        $folders->userId = $userId;
        $folders->taskEntity = 0;
        $folders->save();
    }
    public function store3($userId)
    {
        $folders = new Folders;
        $folders->name = "Planned";
        $folders->userId = $userId;
        $folders->taskEntity = 0;
        $folders->save();
    }
    public function store4($userId)
    {
        $folders = new Folders;
        $folders->name = "Meeting";
        $folders->userId = $userId;
        $folders->taskEntity = 0;
        $folders->save();
    }
    public function store5($userId)
    {
        $folders = new Folders;
        $folders->name = "Ideas";
        $folders->userId = $userId;
        $folders->taskEntity = 0;
        $folders->save();
    }
    public function store6($userId)
    {
        $folders = new Folders;
        $folders->name = "Project";
        $folders->userId = $userId;
        $folders->taskEntity = 0;
        $folders->save();
    }
    
    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     $folders = new Folders;
    //     $folders->name = $request->name;
    //     $folders->userId = $request->userId;
    //     $folders->taskEntity = 1;
    //     $folders->save();
    // }

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $folders = Folders::find($id);
        $folders->delete();
        return redirect("/tasks");
    }
}

<?php

namespace App\Http\Controllers\Work;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Work\RoomRequest;
use App\Service\RoomContent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //ルーム作成
        return view('Work.Room.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoomRequest $request,RoomContent $roomContent)
    {
        $userId = Auth::id();
        $room_id =$roomContent->roomSave(
          $request->title,
          $request->rule,
          $userId
        );
        return redirect()->route('room.show',['id' =>$room_id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $id = $id;
        return view('Work.Message.index')->with('id',$id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

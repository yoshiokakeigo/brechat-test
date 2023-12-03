<?php

namespace App\Http\Controllers\Work;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Service\MessageContent;
use App\Service\RoomContent;
use App\Events\RoomMessageSent;


class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $message = new Message();
        $message->message = $request->message;
        $message->user_id = Auth::id();
        $message->room_id = $request->room_id;
        $message->save();
        $user = Auth::user();
        event(new RoomMessageSent($message,$user));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, RoomContent $roomContent, MessageContent $messageContent)
    {
        //
        $owner = $roomContent->getRoom($id);
        $message = $messageContent->getMessage($id);
        return [$owner,$message];
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

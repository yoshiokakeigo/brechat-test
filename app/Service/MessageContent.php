<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;

class MessageContent {
  public function getMessage(int $id) {
    $message = Message::where('room_id',$id)->with(['user:id,name'])->get();
    return $message;
  }
}
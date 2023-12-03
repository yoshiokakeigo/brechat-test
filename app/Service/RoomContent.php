<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;

class RoomContent {
  public function roomSave(string $title, string $rule, int $userId) {
      $room_create = new Room;
      $room_create->title = $title;
      $room_create->rule = $rule;
      $room_create->owner_id = $userId;
      $room_create->save();
      $room_id = $room_create->id;
      return $room_id;
    }

    public function getRoom(int $id) {
      $room = Room::where('id',$id)->with('owner:id,name')->first();
      return $room;
    }
}
<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;
use App\Models\User;

class HomeContent {
  public function getOwner() {
    return Room::with(['owner:id,name'])->orderBy('id', 'DESC')->paginate(12);
  }
}
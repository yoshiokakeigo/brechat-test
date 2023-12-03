<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Room extends Model
{
    use HasFactory;
    protected $table = 'room';

    public $incrementing = true;

    public function owner() {
      return $this->belongsTo(User::class,'owner_id');
    }
}

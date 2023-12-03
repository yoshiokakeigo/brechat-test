<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class UserContent {
  public function checkAuth(int $id) {
    $userId = Auth::id();
    if($id != $userId) {
      throw new AccessDeniedHttpException;
    }
  }
  public function getUser(int $id) {
    $user = User::where('id',$id)->first();
    return $user;
  }
}
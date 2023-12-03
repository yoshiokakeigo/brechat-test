<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        //トップページ
        return view('top');
    }
}

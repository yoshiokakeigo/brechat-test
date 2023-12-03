<?php

namespace App\Http\Controllers\Work;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service\HomeContent;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(HomeContent $homeContent)
    {
        //
        $owners = $homeContent->getOwner();
        return view('Work.home')->with('owners',$owners);
    }
}

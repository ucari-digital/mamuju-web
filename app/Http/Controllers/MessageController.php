<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use App\Http\Controllers\GlobalController as G;

class MessageController extends Controller
{
    public function register()
    {
        $agent = new Agent();
        if ($agent->isMobile())
    	    return view('mobile.message.register');
        else
            $populer = G::news('4', '0')['data'];
            return view('desktop.message.register', compact('populer'));
    }
}

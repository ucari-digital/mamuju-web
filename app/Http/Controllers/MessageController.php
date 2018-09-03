<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function register()
    {
    	return view('mobile.message.register');
    }
}

<?php

namespace App\Http\Controllers\Desktop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DesktopController extends Controller
{
    public function index()
    {
    	return view('desktop.index');
    }
}

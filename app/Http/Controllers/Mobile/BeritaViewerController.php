<?php

namespace App\Http\Controllers\Mobile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BeritaViewerController extends Controller
{
    public function index()
    {
    	return view('mobile.berita-viewer');
    }

    public function user()
    {
    	return view('mobile.user-viewer');
    }
}

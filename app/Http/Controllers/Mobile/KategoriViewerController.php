<?php

namespace App\Http\Controllers\Mobile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoriViewerController extends Controller
{
    public function index()
    {
    	return view('mobile.kategori-viewer');
    }
}

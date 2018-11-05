<?php

namespace App\Http\Controllers\Mobile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GlobalController as G;
use App\Model\Iklan;
class KategoriViewerController extends Controller
{
    public function index($kategori)
    {
    	$data_single = G::news('1', '0', $kategori)['data'];
        $data_multiple = G::news('4', '1', $kategori)['data'];
    	return view('mobile.kategori-viewer', compact('data_single', 'data_multiple'));
    }
}

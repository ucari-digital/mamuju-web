<?php

namespace App\Http\Controllers\desktop;

use App\Model\Iklan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GlobalController as G;

class KategoriViewerController extends Controller
{
    public function index($kategori)
    {
        $data_single = G::news('1', '0', $kategori)['data'];
        $data_multiple = array_chunk(G::news('100', '1', $kategori)['data'], 4);
        $ads_l = Iklan::where('type', 'L')->inRandomOrder()->first();
        $ads_b = Iklan::where('type', 'B')->inRandomOrder()->first();

        $ads = [
            'ads_l' => $ads_l ? $ads_l : [],
            'ads_b' => $ads_b ? $ads_b : []
        ];
        // return $ads;
        return view('desktop.kategori-viewer', compact('data_single', 'data_multiple', 'kategori', 'ads'));
    }
}

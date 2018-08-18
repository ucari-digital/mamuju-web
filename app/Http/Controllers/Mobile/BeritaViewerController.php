<?php

namespace App\Http\Controllers\Mobile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Helper\Guzzle;
use App\Http\Controllers\GlobalController as G;
class BeritaViewerController extends Controller
{
    public function index($kategori, $kode_berita)
    {
    	$url = explode('-', $kode_berita);
    	$id = end($url);

    	$process_seo = array_slice($url, 0, -1);
    	$seo = implode('-', $process_seo);
    	$param = [
            'method' => 'GET',
            'url' => 'news/'.$id.'/'.$seo,
            'request' => [
                'allow_redirects' => true,
                'headers' => [
                ],
                'form_params' => [
                ]
            ]
        ];
        $data = Guzzle::request($param)['data']['news_detail'];
    	return view('mobile.berita-viewer', compact('data'));
    }

    public function user()
    {
        $terbaru = G::news('4', '1')['data'];
    	return view('mobile.user-viewer', compact('terbaru'));
    }
}

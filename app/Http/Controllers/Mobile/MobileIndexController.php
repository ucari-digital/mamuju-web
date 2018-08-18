<?php

namespace App\Http\Controllers\Mobile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GlobalController as G;

use App\Helper\Guzzle;
class MobileIndexController extends Controller
{
    public function index()
    {
    	$headline = G::news('1', '0')['data'];
        $terbaru = G::news('4', '1')['data'];
        $infografis = G::news('4', '0', '1')['data'];
        $foto = G::news('5', '0', '2')['data'];
        $video = G::news('1', '0', '3')['data'];
        $populer = G::news('5', '0')['data'];
    	return view('mobile.index', compact('headline', 'terbaru', 'infografis', 'foto', 'video', 'populer'));
    }

    public static function populer_news($take, $skip, $kategori = '')
    {
        $param = [
            'method' => 'POST',
            'url' => 'populer',
            'request' => [
                'allow_redirects' => true,
                'headers' => [
                    
                ],
                'form_params' => [
                    'take' => $take,
                    'skip' => $skip,
                    'kategori' => $kategori
                ]
            ]
        ];
        return Guzzle::request($param);
    }
    
}

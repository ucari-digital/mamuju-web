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

    public function profil()
    {
        return view('mobile.user-profil');
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

    public function subscribe(Request $request)
    {
        try {
            $param = [
                'method' => 'POST',
                'url' => 'subscribe',
                'request' => [
                    'allow_redirects' => true,
                    'headers' => [
                    ],
                    'form_params' => [
                        'email' => $request->email
                    ]
                ]
            ];
            $data = Guzzle::request($param)['data'];
            return redirect()->back();
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function search(Request $request)
    {
        try {
            $param = [
                'method' => 'post',
                'url' => 'news/search',
                'request' => [
                    'allow_redirects' => true,
                    'headers' => [
                    ],
                    'form_params' => [
                        'text' => $request->text,
                    ]
                ]
            ];
            $data = Guzzle::request($param)['data'];
            return view('mobile.berita-cari')
                ->with('data', $data)
                ->with('cari', $request->cari);
        } catch (\Exception $e) {
            return $e;
        }
    }
    
}

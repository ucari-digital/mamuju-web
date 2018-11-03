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
        $terbaru = G::news('5', '1')['data'];
        $infografis = G::news('4', '0', '245')['data'];
        $foto = G::news('4', '0', '247')['data'];
        $video = G::news('1', '0', '249')['data'];
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
            alert()->success('Terimakasih', 'pantau terus info menarik mamuju today');
            return redirect()->back();
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function search(Request $request)
    {
        try {
            $param = [
                'method' => 'get',
                'url' => 'news/'.$request->text,
                'request' => [
                    'allow_redirects' => true,
                    'headers' => [
                    ],
                    'form_params' => [
                    ]
                ]
            ];
            $data = Guzzle::request($param)['data'];
            return collect($data)->take(50);
        } catch (\Exception $e) {
            return $e;
        }
    }
    
}

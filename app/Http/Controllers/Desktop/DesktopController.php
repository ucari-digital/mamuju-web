<?php

namespace App\Http\Controllers\Desktop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GlobalController as G;

use App\Helper\Guzzle;
class DesktopController extends Controller
{
    public function index()
    {
        $headline = G::news('1', '0')['data'];
        $terbaru = G::news('4', '1')['data'];
        $infografis_head = G::news('1', '0', '1')['data'];
        $infografis = G::news('3', '1', '1')['data'];
        $foto = G::news('3', '0', '2')['data'];
        $video = G::news('1', '0', '3')['data'];
        $populer = G::news('5', '0')['data'];
    	return view('desktop.index', compact('headline', 'terbaru', 'infografis_head', 'infografis', 'foto', 'video', 'populer'));
    }

    public function profil()
    {
        return view('desktop.user-profil');
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

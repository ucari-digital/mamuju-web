<?php

namespace App\Http\Controllers\Desktop;

use Carbon\Carbon;
use App\Helper\Guzzle;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Controllers\GlobalController as G;

class DesktopController extends Controller
{
    public function index()
    {
        $carbon = Carbon::now();
        setlocale(LC_TIME, 'Indonesian');
        $time = "{$carbon->day} {$carbon->localeMonth} {$carbon->year}";
    	return view('desktop.index', compact('time'));
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
            if(! $data)
            {
                alert()->info('opps', "sepertinya info yang anda cari mengenain ".$request->text." belum tersedia...");
                return redirect('/');
            }

            $populer = G::news('5', '0')['data'];
            return view('desktop.berita-cari')
                ->with('data', $data)
                ->with('populer', $populer)
                ->with('cari', $request->text);
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function getApi(Request $request)
    {
        return G::news($request->take, $request->skip, $request->kategori)['data'];
    }

    public function getPopuler(Request $request)
    {
        return G::populer($request->take, $request->skip, $request->kategori)['data'];
    }
}

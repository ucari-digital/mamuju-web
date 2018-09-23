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
        $data = Guzzle::request($param)['data'];
        $berita = $data['news_detail'];
        $penulis = $data['user_detail'];
        $komentar = $data['komentar'];
        $sum_komentar = $data['sum_komentar'];
    	return view('mobile.berita-viewer', compact('berita', 'penulis', 'komentar', 'sum_komentar'));
    }

    public function user($user)
    {
        $param = [
            'method' => 'post',
            'url' => 'user',
            'request' => [
                'allow_redirects' => true,
                'headers' => [
                ],
                'form_params' => [
                    'nickname' => $user
                ]
            ]
        ];
        $data = Guzzle::request($param)['data'];   
    	return view('mobile.user-viewer', compact('data'));
    }

    public function komentar(Request $request, $berita_id)
    {
        try {
            $param = [
                'method' => 'POST',
                'url' => 'komentar',
                'request' => [
                    'allow_redirects' => true,
                    'headers' => [
                    ],
                    'form_params' => [
                        'berita_id' => $berita_id,
                        'user_id' => session('id'),
                        'komentar' => $request->komentar
                    ]
                ]
            ];
            $data = Guzzle::request($param)['data'];
            alert()->success('Berhasil', 'komentar anda berhasil diposting');
            return redirect()->back();
        } catch (\Exception $e) {

        }
    }
}

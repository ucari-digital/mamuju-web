<?php

namespace App\Http\Controllers\Desktop;

use App\Helper\Guzzle;
use App\Http\Controllers\GlobalController as G;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $terbaru = G::news('3', '0')['data'];
        return view('desktop.berita-viewer', compact('berita', 'penulis', 'komentar', 'terbaru'));
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

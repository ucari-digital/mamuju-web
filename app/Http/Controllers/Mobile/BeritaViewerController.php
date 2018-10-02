<?php

namespace App\Http\Controllers\Mobile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Helper\Guzzle;
use Illuminate\Pagination\LengthAwarePaginator;

class BeritaViewerController extends Controller
{
    public function index(Request $request, $kategori, $kode_berita)
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
        $sum_komentar = $data['sum_komentar'];

        $items = Guzzle::request($param)['data']['komentar'];

        // Get current page form url e.x. &page=1
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        // Create a new Laravel collection from the array data
        $itemCollection = collect($items);

        // Define how many items we want to be visible in each page
        $perPage = 10;

        // Slice the collection to get the items to display in current page
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();

        // Create our paginator and pass it to the view
        $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);

        // set url path for generted links
        $paginatedItems->setPath($request->url());
    	return view('mobile.berita-viewer', [
            'komentar' => $paginatedItems,
            'berita' => $berita,
            'penulis' => $penulis,
            'sum_komentar' => $sum_komentar,
        ]);
    }

    public function user(Request $request, $user)
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
        $data = Guzzle::request($param)['data']['users'];
        $items = Guzzle::request($param)['data']['berita'];

        // Get current page form url e.x. &page=1
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        // Create a new Laravel collection from the array data
        $itemCollection = collect($items);

        // Define how many items we want to be visible in each page
        $perPage = 15;

        // Slice the collection to get the items to display in current page
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();

        // Create our paginator and pass it to the view
        $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);

        // set url path for generted links
        $paginatedItems->setPath($request->url());
    	return view('mobile.user-viewer', ['items' => $paginatedItems, 'user' => $data]);
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

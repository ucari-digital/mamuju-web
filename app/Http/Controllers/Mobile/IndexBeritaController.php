<?php

namespace App\Http\Controllers\Mobile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Helper\Guzzle;
use App\Http\Controllers\GlobalController as G;
class IndexBeritaController extends Controller
{
	protected $judul;
	public function __construct()
	{
		$this->judul = 'Index';
	}
    public function index(Request $request)
    {
    	$judul = $this->judul;
    	$param = [
            'method' => 'GET',
            'url' => 'kategori',
            'request' => [
                'allow_redirects' => true,
                'headers' => [
                    
                ],
                'form_params' => [
                ]
            ]
        ];
       	$kategori = Guzzle::request($param)['data'];
        $berita = G::news('10', '0', $request->kategori)['data'];
        return view('mobile.index-berita', compact('kategori', 'berita', 'judul'));
    }
}

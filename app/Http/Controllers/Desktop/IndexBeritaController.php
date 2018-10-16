<?php

namespace App\Http\Controllers\Desktop;

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
        $berita = array_chunk(G::news('50', '0', $request->kategori)['data'], 4);
        return view('desktop.index-berita', compact('kategori', 'berita', 'judul'));
    }
}

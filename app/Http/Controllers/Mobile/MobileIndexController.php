<?php

namespace App\Http\Controllers\Mobile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Helper\Guzzle;
class MobileIndexController extends Controller
{
    public function index()
    {
    	$headline = self::headline()['data'];
        $news_line = self::news_line()['data'];
        $news_list = self::news_list()['data'];
        $infografis = self::news_kategori('1', 5)['data'];
        $foto = self::news_kategori('2', 5)['data'];
        $video = self::news_kategori('3', 1)['data'];
    	return view('mobile.index', compact('headline', 'news_line', 'news_list', 'infografis', 'foto', 'video'));
    }

    public static function headline()
    {
    	$param = [
            'method' => 'POST',
            'url' => 'news',
            'request' => [
                'allow_redirects' => true,
                'headers' => [
                    
                ],
                'form_params' => [
                    'take' => '1',
                    'skip' => '0'
                ]
            ]
        ];
        return Guzzle::request($param);
    }

    public static function news_line()
    {
        $param = [
            'method' => 'POST',
            'url' => 'news',
            'request' => [
                'allow_redirects' => true,
                'headers' => [
                    
                ],
                'form_params' => [
                    'take' => '2',
                    'skip' => '1'
                ]
            ]
        ];
        return Guzzle::request($param);
    }

    public static function news_list()
    {
        $param = [
            'method' => 'POST',
            'url' => 'news',
            'request' => [
                'allow_redirects' => true,
                'headers' => [
                    
                ],
                'form_params' => [
                    'take' => '3',
                    'skip' => '3'
                ]
            ]
        ];
        return Guzzle::request($param);
    }

    public static function news_kategori($id, $take)
    {
        $param = [
            'method' => 'POST',
            'url' => 'news',
            'request' => [
                'allow_redirects' => true,
                'headers' => [
                    
                ],
                'form_params' => [
                    'take' => $take,
                    'skip' => '0',
                    'kategori' => $id
                ]
            ]
        ];
        return Guzzle::request($param);
    }
    
}

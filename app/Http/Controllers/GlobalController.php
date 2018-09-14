<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\Guzzle;
class GlobalController extends Controller
{
    public static function news($take, $skip, $kategori = '')
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
                    'skip' => $skip,
                    'kategori' => $kategori
                ]
            ]
        ];
        return Guzzle::request($param);
    }

    public static function kategori_menu()
    {
        $param = [
            'method' => 'POST',
            'url' => 'kategori/menu',
            'request' => [
                'allow_redirects' => true,
                'headers' => [
                ],
                'form_params' => [
                ]
            ]
        ];
        return Guzzle::request($param);
    }
}

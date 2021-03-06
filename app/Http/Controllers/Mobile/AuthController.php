<?php

namespace App\Http\Controllers\Mobile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

use App\Helper\Guzzle;
use Jenssegers\Agent\Agent;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $agent = new Agent();
        return view('mobile.auth.login');
    }

    public function loginSubmit(Request $request)
    {
    	try {
    		$param = [
	            'method' => 'POST',
	            'url' => 'login',
	            'request' => [
	                'allow_redirects' => true,
	                'headers' => [
	                ],
	                'form_params' => [
	                	'email' => $request->email,
	                	'password' => $request->password
	                ]
	            ]
	        ];
	        $data = Guzzle::request($param);

	        if ($data['status'] == 200) {
	        	$request->session()->put('id', $data['data']['id']);
	        	$request->session()->put('name', $data['data']['name']);
	        	$request->session()->put('email', $data['data']['email']);
	        	$request->session()->put('avatar', $data['data']['avatar']);
	        	$request->session()->save();

                alert()->success('selamat datang '.$data['data']['name'], 'pantau terus info menarik mamuju today');
	        	return redirect('/');
	        } else {
	        	return redirect()->back()
	        	->with('message', 'Email atau Password salah');
	        }

    	} catch (\Exception $e) {
    		
    	}
    }

    public function register()
    {
    	return view('mobile.auth.register');
    }

    public function registerSubmit(Request $request)
    {
    	try {
    		$param = [
	            'method' => 'POST',
	            'url' => 'register',
	            'request' => [
	                'allow_redirects' => true,
	                'headers' => [
	                ],
	                'form_params' => [
	                	'name' => $request->name,
	                	'email' => $request->email,
	                	'password' => $request->password
	                ]
	            ]
	        ];
	        $data = Guzzle::request($param);
	        if ($data['status'] == 200) {
	        	$request->session()->put('id', $data['data']['id']);
	        	$request->session()->put('name', $data['data']['name']);
	        	$request->session()->put('email', $data['data']['email']);
	        	$request->session()->put('avatar', $data['data']['avatar']);
	        	$request->session()->save();
	        	return redirect('m/register');
	        }
    	} catch (\Exception $e) {
    		return $e->getMessage();
    	}
    }

    public function logout(Request $request)
    {
    	$request->session()->flush();
    	return redirect('/');
    }
}

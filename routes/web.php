<?php
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

$agent = new Agent();

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

if ($agent->isMobile()) {
	Route::get('/', 'Mobile\MobileIndexController@index');
	Route::get('login', 'Mobile\AuthController@login');
	Route::post('login', 'Mobile\AuthController@loginSubmit');
	Route::get('register', 'Mobile\AuthController@register');
	Route::post('register', 'Mobile\AuthController@registerSubmit');
	Route::get('logout', 'Mobile\AuthController@logout');

	Route::get('u/profil', 'Mobile\MobileIndexController@profil');


	Route::get('/kategori/{kategori}', 'Mobile\KategoriViewerController@index');
	Route::get('/viewer/{kategori}/{kode_berita}', 'Mobile\BeritaViewerController@index');
	Route::get('/u/{user}', 'Mobile\BeritaViewerController@user');

	Route::post('komentar/{berita_id}', 'Mobile\BeritaViewerController@komentar');

	// Meesage
	Route::prefix('m')->group(function(){
		Route::get('register', 'MessageController@register');
	});
	Route::post('subscribe', 'Mobile\MobileIndexController@subscribe');
	Route::post('search', 'Mobile\MobileIndexController@search');

	Route::get('redaksi', function(){
		return view('mobile.page.redaksi');
	});
	Route::get('p-media-siber', function(){
		return view('mobile.page.pedoman-siber');
	});

	Route::get('disclaimer', function(){
		return view('mobile.page.disclaimer');
	});

	Route::get('kontak', function(){
		return view('mobile.page.kontak');
	});



	Route::get('s', function(Request $request){
		return $request->session()->all();
	});
} else {
	Route::get('/', 'Desktop\DesktopController@index');
    Route::post('subscribe', 'Desktop\DesktopController@subscribe');

    Route::get('/viewer/{kategori}/{kode_berita}', 'Desktop\BeritaViewerController@index');
    Route::post('komentar/{berita_id}', 'Desktop\BeritaViewerController@komentar');
}



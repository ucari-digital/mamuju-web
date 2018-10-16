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
Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

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
	Route::get('search', 'Mobile\MobileIndexController@search');

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

    /**
     * Route untuk index berita
     */

    Route::get('index', 'Mobile\IndexBeritaController@index');
    



	Route::get('s', function(Request $request){
		return $request->session()->all();
	});
} else {
    Route::get('api/news', 'Desktop\DesktopController@getApi');
    Route::get('api/populer', 'Desktop\DesktopController@getPopuler');
	Route::get('/', 'Desktop\DesktopController@index');
    Route::get('login', 'Mobile\AuthController@login');
    Route::post('login', 'Mobile\AuthController@loginSubmit');
    Route::get('register', 'Mobile\AuthController@register');
    Route::post('register', 'Mobile\AuthController@registerSubmit');
    Route::get('logout', 'Mobile\AuthController@logout');

    Route::get('u/profil', 'Desktop\DesktopController@profil');

    Route::get('/kategori/{kategori}', 'Desktop\KategoriViewerController@index');
    Route::get('/viewer/{kategori}/{kode_berita}', 'Desktop\BeritaViewerController@index');
    Route::get('/u/{user}', 'Mobile\BeritaViewerController@user');

    Route::post('komentar/{berita_id}', 'Desktop\BeritaViewerController@komentar');

    // Meesage
    Route::prefix('m')->group(function(){
        Route::get('register', 'MessageController@register');
    });
    Route::post('subscribe', 'Desktop\DesktopController@subscribe');
    Route::get('search', 'Desktop\DesktopController@search');

    Route::get('redaksi', function(){
        return view('desktop.page.redaksi');
    });
    Route::get('p-media-siber', function(){
        return view('desktop.page.pedoman-siber');
    });

    Route::get('disclaimer', function(){
        return view('desktop.page.disclaimer');
    });

    Route::get('kontak', function(){
        return view('desktop.page.kontak');
    });

    Route::get('index', 'Desktop\IndexBeritaController@index');
}



<?php

namespace App\Http\Controllers\Auth;

use App\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use Illuminate\Support\Facades\Hash;
use Socialite;
use Session;
use DB;

class AuthController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback(Request $request, $provider)
    {
        $user = Socialite::driver($provider)->user();

        $authUser = $this->findOrCreateUser($user, $provider);
        if($authUser == true)
        {
            $request->session()->put('id', $authUser->id);
            $request->session()->put('name', $authUser->name);
            $request->session()->put('email', $authUser->email);
            $request->session()->put('avatar', $authUser->avatar);
            $request->session()->save();

            alert()->success('selamat datang '.$authUser->name, 'pantau terus info menarik mamuju today');
            return redirect('/');
        }

        return redirect()->to('login');
    }

    public function findOrCreateUser($user, $provider)
    {
        $authUser = Users::where('provider_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }
        $cek_user = Users::where('email', $user->email);
        if ($cek_user->first()) {
            Users::where('email', $user->email)
                ->update([
                    'provider' => $provider,
                    'provider_id' => $user->id,
                ]);
            return $cek_user->first();
        }
        return Users::create([
            'name' => $user->name,
            'nickname' => str_slug($user->name, '-')."-".$provider,
            'email' => $user->email ?? "visitor@mamujutoday.com",
            'password' => Hash::make("123456"),
            'avatar' => "images/avatar/default-avatar.svg",
            'provider' => $provider,
            'provider_id' => $user->id,
            'role' => 'user',
            'created_at' => $this->get_now(),
        ]);
    }
}

<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('welcome');
});


//para autentificar o user, vai abrir a janela de autentificar, somente na primeira vez
//depois de autentificar, redireciona direto
Route::get('/auth/{provider}/redirect', function (string $provider) {
    return Socialite::driver($provider)->redirect();
});

Route::get('/auth/{provider}/callback', function (string $provider) {
    $providerUser = Socialite::driver($provider)->user();

    $user = User::updateOrCreate([
        'email' => $providerUser->email,
    ], [
        'provider_id' => $providerUser->id,
        'name' => $providerUser->name,
        'provider_avatar' => $providerUser->avatar,
        'provider_name' => $provider
    ]);

    Auth::login($user);

    return redirect('/logged');
});

Route::get('/logged', function () {
    var_dump(auth()->user());
});

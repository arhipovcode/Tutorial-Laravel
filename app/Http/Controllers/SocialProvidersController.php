<?php

namespace App\Http\Controllers;

use App\Services\Contracts\Social;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Routing\Redirector;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SocialProvidersController extends Controller
{
    public function redirect(string $driver): RedirectResponse|\Illuminate\Http\RedirectResponse
    {
        return Socialite::driver($driver)->redirect();
    }

    public function callback(string $driver, Social $social): Redirector|Application|\Illuminate\Http\RedirectResponse
    {
        return redirect($social->loginAndGetRedirectUrl(Socialite::driver($driver)->user()));
    }
}

<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Http\Request;

class AuthRedirectController extends Controller
{
    use RedirectsUsers;

    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }

}

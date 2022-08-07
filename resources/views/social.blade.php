<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Socialite</title>
    </head>
    <body>
        @auth
            Hello {{ Auth::user()->name }} |
            <a href="{{ url('/auth/logout') }}">Logout</a>
        @endauth
        @guest
            Login with
            @if (! empty(config('services.google.redirect')))
                <a href="{{ url('/auth/google/redirect') }}">Google</a>
            @endif
            @if (! empty(config('services.facebook.redirect')))
                <a href="{{ url('/auth/facebook/redirect') }}">Facebook</a>
            @endif
        @endguest
    </body>
</html>

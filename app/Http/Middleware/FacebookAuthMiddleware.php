<?php

namespace App\Http\Middleware;

use Closure;
use Laravel\Socialite\Facades\Socialite;


class FacebookAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $cachedUser = $request->session()->get('fb_user');
        if (!$cachedUser || $cachedUser->expiresIn <= time()) {
            $request->session()->remove('fb_user');
            return redirect('/');
        }
        return $next($request);
    }
}

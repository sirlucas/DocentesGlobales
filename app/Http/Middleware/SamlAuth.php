<?php

namespace App\Http\Middleware;

use Closure;

class SamlAuth
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
      $as = 'true';
      if ($as== 'false') {
        return redirect()->guest('login');

      }
        return $next($request);
    }
}

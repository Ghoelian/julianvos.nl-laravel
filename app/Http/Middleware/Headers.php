<?php

namespace App\Http\Middleware;

use Closure;

class Headers
{
  public function handle($request, Closure $next)
  {
    $response = $next($request);

    return $response;
  }
}
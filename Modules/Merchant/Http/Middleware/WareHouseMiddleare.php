<?php

namespace Modules\Merchant\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class WareHouseMiddleare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use App\Models\footerModel;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class footerMiddleware
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
        $footerList = footerModel::find(1);

        View::share('footerList',$footerList);
        return $next($request);
    }
}

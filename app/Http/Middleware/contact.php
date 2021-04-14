<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\ContactModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class contact
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
        $contactList = ContactModel::find(1);

        View::share('contactList',$contactList);

        return $next($request);
    }
}

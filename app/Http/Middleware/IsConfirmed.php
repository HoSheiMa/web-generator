<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsConfirmed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->exists('confirm')) {
            $returnUrl = str_replace('confirm=true', '', url()->full());
            $noReturnUrl =  str_replace('confirm=true', '', url()->previous());
            return redirect("/confirm?returnUrl=$returnUrl&noReturnUrl=$noReturnUrl");
        }
        return $next($request);
    }
}

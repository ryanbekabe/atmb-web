<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;
use Closure;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];

    // public function handle($request, Closure $next)
    // {
    //     if (
    //         $this->isReading($request) ||
    //         $this->runningUnitTests() ||
    //         $this->inExceptArray($request) ||
    //         $this->tokensMatch($request)
    //     ) {
    //         return $this->addCookieToResponse($request, $next($request));
    //     }
    //
    //     throw new TokenMismatchException;
    // }

    // public function handle($request, Closure $next)
    // {
    //     if ($request->input('_token')) {
    //         dd($request->session()->token()."\n".$request->input('_token'));
    //     }
    //
    //     return parent::handle($request, $next);
    // }
}

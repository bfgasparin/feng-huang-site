<?php

namespace FengHaung\Http\Middleware;

use Closure;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class Locale
{
    protected $app;

    public function __construct(Application $app) {
        $this->app = $app;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // Make sure current locale exists.
        $locale = $request->segment(1);
        if (collect($this->app->config->get('app.locales'))->contains($locale)) {
            session(['locale' => $locale]);
            $this->app->setLocale($locale);
        }
        

        return $next($request);
    }
}

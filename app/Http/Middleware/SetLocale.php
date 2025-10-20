<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;

class SetLocale
{
    /**
     * Handle an incoming request and set the application locale.
     *
     * - Reads the locale from the route parameter `locale`, session, or Accept-Language header.
     * - Falls back to `config('app.locale')` if the found locale is not supported.
     * - Stores the chosen locale in session and calls app()->setLocale().
     * - Sets URL defaults so named routes automatically include the locale parameter.
     * - Sets Carbon locale for date translations.
     *
     * @param  Request  $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        $supported = ['en', 'fr', 'fa'];

        $routeLocale = null;
        if ($request->route()) {
            // route() may return an array or object depending on the router internals; use parameter() helper
            $routeLocale = $request->route('locale');
        }

        $locale = $routeLocale ?? session('locale') ?? null;

        if (! $locale) {
            $accept = $request->server('HTTP_ACCEPT_LANGUAGE') ?? '';
            // extract first language tag and take primary subtag
            if (preg_match('/^([a-zA-Z]{2})(?:-|;|,|$)/', $accept, $m)) {
                $locale = strtolower($m[1]);
            }
        }

        if (! in_array($locale, $supported, true)) {
            $locale = config('app.locale');
        }

        app()->setLocale($locale);
        session(['locale' => $locale]);

        // Set URL default parameter so route('home') etc. automatically include locale
        URL::defaults(['locale' => $locale]);

        // Set Carbon locale for date formatting/translations
        try {
            Carbon::setLocale($locale);
        } catch (\Throwable $e) {
            // ignore if Carbon doesn't support locale - non-fatal
        }

        // Share helpful view variables that depend on the chosen locale
        $rtlLocales = ['fa'];
        $isRtl = in_array($locale, $rtlLocales, true);

        // Icon classes used in templates (flaticon and boxicons)
        $flaticonArrow = $isRtl ? 'flaticon-left-arrow' : 'flaticon-right-arrow';
        $boxiconArrow = $isRtl ? 'bx bx-left-arrow-alt' : 'bx bx-right-arrow-alt';
        $chevronsDir = $isRtl ? 'bx-chevrons-left' : 'bx-chevrons-right';

        View::share('flaticonArrow', $flaticonArrow);
        View::share('boxiconArrow', $boxiconArrow);
        View::share('chevronsDir', $chevronsDir);
        View::share('isRtl', $isRtl);

        return $next($request);
    }
}

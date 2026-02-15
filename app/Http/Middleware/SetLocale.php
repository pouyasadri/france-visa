<?php

namespace App\Http\Middleware;

use App\Services\LocaleDetector;
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
     * Uses LocaleDetector service for intelligent locale detection:
     * - Route parameter (explicit user choice)
     * - Session (previously detected locale)
     * - Browser Accept-Language header (with quality values)
     * - IP geolocation (optional)
     * - Config fallback
     *
     * @param  Request  $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        $localeDetector = app(LocaleDetector::class);

        // Get route locale if available
        $routeLocale = $request->route() ? $request->route('locale') : null;

        // Detect best locale using the service
        $locale = $localeDetector->detectLocale($request, $routeLocale);

        // Set application locale
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
        $rtlLocales = config('localization.rtl_locales', ['fa']);
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

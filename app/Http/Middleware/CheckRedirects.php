<?php

namespace App\Http\Middleware;

use App\Models\Redirect;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class CheckRedirects
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $host = $request->getHost();
        $path = $request->getPathInfo();

        // Check for legacy subdomain structure and redirect before locale detection
        // en.applyvipconseil.com -> applyvipconseil.com/en
        // fr.applyvipconseil.com -> applyvipconseil.com/fr
        if (str_starts_with($host, 'en.') || str_starts_with($host, 'fr.')) {
            $locale = str_starts_with($host, 'en.') ? 'en' : 'fr';
            $newHost = str_replace(['en.', 'fr.'], '', $host);

            // Build the new URL with locale prefix
            // If path is /, redirect to /locale
            // If path already has a locale prefix (like /fa), replace it
            $newPath = $path === '/' ? "/{$locale}" : "/{$locale}".$path;

            $newUrl = $request->getScheme().'://'.$newHost.$newPath;

            // Preserve query string if present
            if ($request->getQueryString()) {
                $newUrl .= '?'.$request->getQueryString();
            }

            return redirect($newUrl, 301);
        }

        // Check database for exact URL matches (for other legacy URLs)
        $fullUrl = $request->fullUrl();

        $redirect = Cache::remember("redirect-{$fullUrl}", 3600, function () use ($fullUrl) {
            return Redirect::where('from_url', $fullUrl)->first();
        });

        if ($redirect) {
            return redirect($redirect->to_url, $redirect->http_code);
        }

        return $next($request);
    }
}

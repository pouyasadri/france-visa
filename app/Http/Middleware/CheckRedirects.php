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
        // Get the full URL (schema + host + path + query)
        $fullUrl = $request->fullUrl();

        // Check if a redirect exists for this URL.
        // We use cache to avoid hitting the database on every request.
        // Cache key specific to the full URL.
        $redirect = Cache::remember("redirect-{$fullUrl}", 3600, function () use ($fullUrl) {
            return Redirect::where('from_url', $fullUrl)->first();
        });

        if ($redirect) {
            return redirect($redirect->to_url, $redirect->http_code);
        }

        // Optional: Check without query string if exact match fails?
        // The seeder stored generated URLs which might not have query strings usually.
        // But for now, we stick to exact match as per strict requirement unless specified.

        return $next($request);
    }
}

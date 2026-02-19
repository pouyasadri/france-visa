<?php

namespace Tests\Feature;

use App\Models\Redirect;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class RedirectsTest extends TestCase
{
    use RefreshDatabase;

    public function test_redirects_middleware_redirects_legacy_urls()
    {
        // 1. Create a redirect record (avoid subdomain branch so DB lookup runs)
        $fromUrl = 'http://applyvipconseil.com/some-old-page';
        $toUrl = 'https://applyvipconseil.com/en/new-page';

        Redirect::create([
            'from_url' => $fromUrl,
            'to_url' => $toUrl,
            'http_code' => 301,
        ]);

        // 2. Simulate a request to that URL
        // We need to set the host and request URI manually to match fullUrl()
        // verify CheckRedirects logic: $request->fullUrl()

        $response = $this->get($fromUrl);

        // 3. Assert redirect
        $response->assertRedirect($toUrl);
        $response->assertStatus(301);
    }

    public function test_redirects_middleware_caches_lookup()
    {
        Cache::shouldReceive('remember')
            ->once()
            ->andReturn(new Redirect([
                'from_url' => 'https://cached.com/old',
                'to_url' => 'https://new.com/new',
                'http_code' => 302,
            ]));

        $response = $this->get('https://cached.com/old');

        $response->assertRedirect('https://new.com/new');
        $response->assertStatus(302);
    }

    public function test_no_redirect_if_not_found()
    {
        $response = $this->get('https://applyvipconseil.com/en/regular-page');

        // Should not redirect (or at least not by our middleware to a new location)
        // If the page doesn't exist it might be 404, but it shouldn't be a 301/302 from middleware
        // unless logic dictates.

        // We expect it to proceed to next middleware/controller.
        // Since we don't have this route defined in test env (unless matching web.php),
        // it will likely be 404.
        $response->assertStatus(404);
    }
}

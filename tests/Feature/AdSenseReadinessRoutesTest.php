<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdSenseReadinessRoutesTest extends TestCase
{
    use RefreshDatabase;

    public function test_legal_pages_are_public_and_linked_from_the_footer(): void
    {
        $this->get('/privacy-policy')
            ->assertOk()
            ->assertSee('Kebijakan Privasi')
            ->assertSee('/terms-of-service', false)
            ->assertSee('/disclaimer', false);

        $this->get('/terms-of-service')->assertOk()->assertSee('Syarat dan Ketentuan');
        $this->get('/disclaimer')->assertOk()->assertSee('Disclaimer Editorial');
    }

    public function test_blog_feed_is_valid_public_rss(): void
    {
        $this->get('/blog/feed.xml')
            ->assertOk()
            ->assertHeader('Content-Type', 'application/rss+xml; charset=UTF-8')
            ->assertSee('<rss version="2.0"', false);
    }

    public function test_blog_sitemap_alias_is_public(): void
    {
        $this->get('/blog/sitemap.xml')
            ->assertOk()
            ->assertHeader('Content-Type', 'application/xml')
            ->assertSee('/blog/about', false)
            ->assertSee('/privacy-policy', false)
            ->assertSee('/terms-of-service', false)
            ->assertSee('/disclaimer', false);
    }

    public function test_withdrawn_post_answers_410_gone_not_404(): void
    {
        $this->get('/blog/anthropic-ipo-rahasia-investasi-ai-global')
            ->assertStatus(410);
    }

    public function test_slug_that_never_existed_still_answers_404(): void
    {
        $this->get('/blog/slug-yang-tidak-pernah-ada')
            ->assertStatus(404);
    }

    public function test_auto_ads_loader_is_served_on_landing_pages_not_only_the_blog(): void
    {
        config([
            'services.adsense.enabled' => true,
            'services.adsense.client_id' => 'ca-pub-5616961797801657',
        ]);

        $loader = 'pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5616961797801657';

        $this->get('/')->assertOk()->assertSee($loader, false);
        $this->get('/blog')->assertOk()->assertSee($loader, false);
    }

    public function test_auto_ads_loader_is_absent_while_adsense_is_disabled(): void
    {
        config(['services.adsense.enabled' => false]);

        $this->get('/')->assertOk()->assertDontSee('adsbygoogle.js', false);
    }

    public function test_blog_about_page_is_public_and_not_captured_as_an_article_slug(): void
    {
        $this->get('/blog/about')
            ->assertOk()
            ->assertSee('Tentang Editorial Mora Bangun')
            ->assertSee('Standar editorial')
            ->assertSee('info@morabangun.com');
    }
}

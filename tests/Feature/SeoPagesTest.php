<?php

namespace Tests\Feature;

use App\Support\SeoPageRegistry;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SeoPagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_every_registered_seo_page_returns_success_with_core_metadata(): void
    {
        $registry = app(SeoPageRegistry::class);

        foreach (array_keys($registry->pages()) as $path) {
            $page = $registry->find($path);

            $response = $this->get('/'.$path.'/');

            $response->assertOk();
            $response->assertSee('<title>'.e($page['title']).'</title>', false);
            $response->assertSee('rel="canonical" href="'.$page['canonical'].'"', false);
            $response->assertSee('hreflang="x-default"', false);
            $response->assertSee('<h1', false);
            $response->assertSee(e($page['h1']), false);
        }
    }

    public function test_itinerary_pages_emit_tourist_trip_schema_and_day_by_day_content(): void
    {
        $this->get('/safaris/10-day-luxury-kenya-safari/')
            ->assertOk()
            ->assertSee('"@type":"TouristTrip"', false)
            ->assertSee('"@type":"ItemList"', false)
            ->assertSee('seo-timeline__item', false)
            ->assertSee('Your journey at a glance', false)
            ->assertSee("What's included", false)
            ->assertDontSee('"@type":"WebPage"', false);
    }

    public function test_experience_pages_emit_service_schema(): void
    {
        $this->get('/conservation-safaris-kenya/')
            ->assertOk()
            ->assertSee('"@type":"Service"', false)
            ->assertSee('"serviceType"', false)
            ->assertSee('"@type":"FAQPage"', false)
            ->assertSee('Private Conservancies', false);
    }

    public function test_locale_clusters_link_global_and_us_pages_via_hreflang(): void
    {
        $this->get('/luxury-kenya-safaris/')
            ->assertOk()
            ->assertSee('hreflang="en" href="https://caracalexpeditions.co.ke/luxury-kenya-safaris/"', false)
            ->assertSee('hreflang="en-us" href="https://caracalexpeditions.co.ke/us/kenya-luxury-safaris/"', false)
            ->assertSee('hreflang="x-default" href="https://caracalexpeditions.co.ke/luxury-kenya-safaris/"', false);

        $this->get('/us/kenya-luxury-safaris/')
            ->assertOk()
            ->assertSee('rel="canonical" href="https://caracalexpeditions.co.ke/us/kenya-luxury-safaris/"', false)
            ->assertSee('hreflang="en" href="https://caracalexpeditions.co.ke/luxury-kenya-safaris/"', false)
            ->assertSee('hreflang="en-us" href="https://caracalexpeditions.co.ke/us/kenya-luxury-safaris/"', false);
    }

    public function test_us_pages_render_the_region_selector_and_article_schema(): void
    {
        $this->get('/us/kenya-luxury-safaris/')
            ->assertOk()
            ->assertSee('class="seo-locale-selector"', false)
            ->assertSee('>International<', false)
            ->assertSee('>USA<', false);

        $this->get('/us/kenya-safari-cost/')
            ->assertOk()
            ->assertSee('"@type":"Article"', false)
            ->assertSee('"datePublished"', false)
            ->assertSee('"@type":"FAQPage"', false);
    }

    public function test_uk_cluster_adds_en_gb_alternate_and_selector_option(): void
    {
        $this->get('/luxury-kenya-safaris/')
            ->assertOk()
            ->assertSee('hreflang="en" href="https://caracalexpeditions.co.ke/luxury-kenya-safaris/"', false)
            ->assertSee('hreflang="en-us" href="https://caracalexpeditions.co.ke/us/kenya-luxury-safaris/"', false)
            ->assertSee('hreflang="en-gb" href="https://caracalexpeditions.co.ke/uk/luxury-kenya-safari-holidays/"', false);

        $this->get('/uk/luxury-kenya-safari-holidays/')
            ->assertOk()
            ->assertSee('rel="canonical" href="https://caracalexpeditions.co.ke/uk/luxury-kenya-safari-holidays/"', false)
            ->assertSee('>UK<', false)
            ->assertSee('>USA<', false);
    }

    public function test_french_cluster_adds_fr_fr_alternate_and_language(): void
    {
        $this->get('/luxury-kenya-safaris/')
            ->assertOk()
            ->assertSee('hreflang="fr-fr" href="https://caracalexpeditions.co.ke/fr/safaris-de-luxe-kenya/"', false);

        $this->get('/fr/safaris-de-luxe-kenya/')
            ->assertOk()
            ->assertSee('<html lang="fr">', false)
            ->assertSee('rel="canonical" href="https://caracalexpeditions.co.ke/fr/safaris-de-luxe-kenya/"', false)
            ->assertSee('>France<', false);
    }

    public function test_russian_cluster_adds_ru_ru_alternate_and_language(): void
    {
        $this->get('/luxury-kenya-safaris/')
            ->assertOk()
            ->assertSee('hreflang="ru-ru" href="https://caracalexpeditions.co.ke/ru/luxury-safari-kenya/"', false);

        $this->get('/ru/luxury-safari-kenya/')
            ->assertOk()
            ->assertSee('<html lang="ru">', false)
            ->assertSee('rel="canonical" href="https://caracalexpeditions.co.ke/ru/luxury-safari-kenya/"', false)
            ->assertSee('Россия', false);
    }

    public function test_trust_pages_exist_without_fabricated_review_schema(): void
    {
        $this->get('/meet-our-safari-guides/')->assertOk()->assertSee('Meet Our Safari Guides', false);
        $this->get('/safari-booking-terms/')->assertOk()->assertSee('Safari Booking Terms', false);
        $this->get('/travel-advisors/')->assertOk()->assertSee('Travel Advisors', false);

        $this->get('/guest-reviews/')
            ->assertOk()
            ->assertSee('Guest Reviews', false)
            ->assertDontSee('AggregateRating', false)
            ->assertDontSee('"@type":"Review"', false);

        $this->get('/traveller-stories/')
            ->assertOk()
            ->assertSee('Traveller Stories', false)
            ->assertDontSee('"@type":"Review"', false);
    }

    public function test_completion_pages_exist_and_use_expected_schema(): void
    {
        $this->get('/bespoke-luxury-safaris-kenya/')->assertOk()->assertSee('"@type":"Service"', false);
        $this->get('/ultra-luxury-safaris-kenya/')->assertOk()->assertSee('"@type":"Service"', false);
        $this->get('/destinations/ol-pejeta/')->assertOk()->assertSee('"@type":"TouristDestination"', false);
        $this->get('/destinations/tsavo/')->assertOk()->assertSee('"@type":"TouristDestination"', false);
        $this->get('/destinations/diani-beach/')->assertOk();
        $this->get('/destinations/watamu/')->assertOk()->assertSee('Watamu Marine National Park', false);
        $this->get('/destinations/nairobi/')->assertOk();
    }

    public function test_destinations_hub_lists_child_destinations(): void
    {
        $this->get('/destinations/')
            ->assertOk()
            ->assertSee('Kenya Safari Destinations', false)
            ->assertSee('seo-hub-card', false)
            ->assertSee('https://caracalexpeditions.co.ke/destinations/masai-mara/', false)
            ->assertSee('https://caracalexpeditions.co.ke/destinations/diani-beach/', false);

        $this->get('/destinations/masai-mara/')
            ->assertOk()
            ->assertSee('href="https://caracalexpeditions.co.ke/destinations/"', false);
    }

    public function test_homepage_keeps_its_hero_and_gains_a_self_canonical(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('class="hero"', false)
            ->assertSee('class="hero__title"', false)
            ->assertSee('class="feature-band"', false)
            ->assertSee('rel="canonical"', false);
    }

    public function test_sitemap_lists_homepage_and_seo_pages(): void
    {
        $registry = app(SeoPageRegistry::class);

        $response = $this->get('/sitemap.xml');

        $response->assertOk();
        $response->assertHeader('Content-Type', 'application/xml');
        $response->assertSee($registry->url('luxury-kenya-safaris'), false);
        $response->assertSee(rtrim($registry->site()['url'], '/').'/', false);
    }

    public function test_robots_allows_crawling_and_points_to_the_sitemap(): void
    {
        $robots = file_get_contents(public_path('robots.txt'));

        $this->assertStringContainsString('Allow: /', $robots);
        $this->assertStringContainsString('Sitemap: https://caracalexpeditions.co.ke/sitemap.xml', $robots);
        $this->assertStringContainsString('Disallow: /dashboard', $robots);
    }
}

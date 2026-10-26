<?php

namespace Tests\Feature;

use App\Models\SeoPageContent;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PageCreationTest extends TestCase
{
    use RefreshDatabase;

    private function payload(): array
    {
        return ['path' => 'guides/new-safari', 'title' => 'New Safari', 'h1' => 'New Safari Guide',
            'description' => 'Plan your next safari.', 'body' => 'Our new safari advice.'];
    }

    public function test_creation_requires_authentication(): void
    {
        $this->get(route('dashboard.pages.create'))->assertRedirect(route('login'));
        $this->post(route('dashboard.pages.store'), $this->payload())->assertRedirect(route('login'));
        $this->assertDatabaseCount('seo_page_contents', 0);
    }

    public function test_page_can_be_created_viewed_and_edited(): void
    {
        $this->withSession(['dashboard_authenticated' => true]);
        $this->get(route('dashboard.pages.index'))->assertSee('Create new page');
        $this->get(route('dashboard.pages.create'))->assertOk();
        $this->post(route('dashboard.pages.store'), $this->payload())
            ->assertRedirect(route('dashboard.pages.edit', ['path' => 'guides/new-safari']));
        $this->get('/guides/new-safari/')->assertOk()->assertSee('Our new safari advice.');
        $this->get(route('dashboard.pages.index'))->assertSee('New Safari Guide');
        $this->get(route('dashboard.pages.edit', ['path' => 'guides/new-safari']))
            ->assertOk()->assertDontSee('Reset to original content');
        $this->put(route('dashboard.pages.update', ['path' => 'guides/new-safari']), [
            ...$this->payload(), 'h1' => 'Updated Safari Guide',
        ])->assertRedirect();
        $this->get('/guides/new-safari/')->assertOk()->assertSee('Updated Safari Guide');
        $this->assertTrue(SeoPageContent::first()->content['custom_page']);
        $this->get('/sitemap.xml')->assertSee('guides/new-safari/');
        $this->post(route('dashboard.pages.reset', ['path' => 'guides/new-safari']))->assertNotFound();
    }

    public function test_invalid_reserved_and_duplicate_paths_are_rejected(): void
    {
        $this->withSession(['dashboard_authenticated' => true]);
        foreach (['dashboard/test', 'login', 'luxury-kenya-safaris', '../bad', 'UPPER CASE'] as $path) {
            $this->post(route('dashboard.pages.store'), [...$this->payload(), 'path' => $path])
                ->assertSessionHasErrors('path');
        }
        $this->assertDatabaseCount('seo_page_contents', 0);
        $this->post(route('dashboard.pages.store'), $this->payload())->assertSessionHasNoErrors();
        $this->post(route('dashboard.pages.store'), $this->payload())->assertSessionHasErrors('path');
        $this->assertDatabaseCount('seo_page_contents', 1);
        $this->get('/nonexistent-page/')->assertNotFound();
    }
}

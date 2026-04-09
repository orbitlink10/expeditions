<?php

namespace Tests\Feature;

use App\Models\HomepageContent;
use App\Support\HomepageContentManager;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Tests\TestCase;

class HomepageContentEditorTest extends TestCase
{
    use RefreshDatabase;

    public function test_authenticated_dashboard_users_can_open_the_homepage_content_page(): void
    {
        $this
            ->withSession([
                'dashboard_authenticated' => true,
                'dashboard_username' => config('dashboard.username'),
            ])
            ->get(route('dashboard.homepage.edit'))
            ->assertOk()
            ->assertSeeText('Shape the public homepage in one focused workspace.')
            ->assertSeeText('Homepage sections')
            ->assertSeeText('Brand')
            ->assertSeeText('Logo');
    }

    public function test_authenticated_dashboard_users_can_update_homepage_content_and_upload_a_logo(): void
    {
        $payload = app(HomepageContentManager::class)->getDashboardEditorData()['homepageContent'];
        $payload['brand']['name'] = 'Savanna';
        $payload['hero']['title'] = 'Hand-crafted safari departures.';
        $payload['tailorBand']['buttonLabel'] = 'Plan with us';

        $response = $this
            ->withSession([
                'dashboard_authenticated' => true,
                'dashboard_username' => config('dashboard.username'),
            ])
            ->post(route('dashboard.homepage.update'), [
                ...$payload,
                'logo' => UploadedFile::fake()->createWithContent(
                    'caracal-logo.png',
                    base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAwMCAO+lm8kAAAAASUVORK5CYII='),
                ),
            ]);

        $response
            ->assertRedirect(route('dashboard.homepage.edit').'#content-editor')
            ->assertSessionHas('status', 'Homepage content saved.');

        $record = HomepageContent::query()->firstWhere('page', 'home');

        $this->assertNotNull($record);
        $this->assertSame('Savanna', $record->content['brand']['name']);
        $this->assertNotNull($record->logo_path);
        $this->assertTrue(File::exists(public_path($record->logo_path)));

        $this->get('/')
            ->assertOk()
            ->assertSeeText('Savanna')
            ->assertSeeText('Hand-crafted safari departures.')
            ->assertSeeText('Plan with us');

        File::delete(public_path($record->logo_path));
    }
}

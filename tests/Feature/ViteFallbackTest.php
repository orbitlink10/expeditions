<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\File;
use Tests\TestCase;

class ViteFallbackTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_application_uses_fallback_assets_when_the_vite_build_directory_is_missing(): void
    {
        $buildPath = public_path('build');
        $backupPath = public_path('build-testing-backup');

        if (File::exists($backupPath)) {
            File::deleteDirectory($backupPath);
        }

        File::moveDirectory($buildPath, $backupPath);

        try {
            $response = $this->get('/');

            $response->assertOk();
            $response->assertSee('fallback/app.css', false);
            $response->assertSee('fallback/app.js', false);
        } finally {
            File::moveDirectory($backupPath, $buildPath);
        }
    }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DashboardAuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_home_page_links_to_the_dashboard_login(): void
    {
        $response = $this->get('/');

        $response
            ->assertOk()
            ->assertSeeText('Dashboard')
            ->assertSee(route('login'), false);
    }

    public function test_guests_are_redirected_to_the_login_page_from_the_dashboard(): void
    {
        $response = $this->get('/dashboard');

        $response
            ->assertRedirect(route('login'));
    }

    public function test_the_login_page_loads_successfully(): void
    {
        $response = $this->get('/login');

        $response
            ->assertOk()
            ->assertSeeText('Sign in')
            ->assertSeeText(config('dashboard.username'));
    }

    public function test_valid_credentials_can_access_the_dashboard(): void
    {
        $this->followingRedirects()->post('/login', [
            'username' => config('dashboard.username'),
            'password' => config('dashboard.password'),
        ])
            ->assertOk()
            ->assertSeeText('Keep every safari in motion.')
            ->assertSee("Today's safari movement", false);
    }

    public function test_invalid_credentials_are_rejected(): void
    {
        $response = $this->from('/login')->post('/login', [
            'username' => 'wrong@demo.com',
            'password' => 'wrong-password',
        ]);

        $response
            ->assertRedirect('/login')
            ->assertSessionHasErrors('username');
    }
}

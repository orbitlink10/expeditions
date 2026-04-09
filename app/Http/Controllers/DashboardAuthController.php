<?php

namespace App\Http\Controllers;

use App\Support\HomepageContentManager;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class DashboardAuthController extends Controller
{
    public function create(Request $request, HomepageContentManager $homepageContentManager): View|RedirectResponse
    {
        if ($request->session()->get('dashboard_authenticated', false)) {
            return redirect()->route('dashboard');
        }

        return view('auth.login', [
            'title' => 'Caracal Expeditions | Dashboard Login',
            'description' => 'Login to access the Caracal Expeditions safari operations dashboard.',
            'demoUsername' => config('dashboard.username'),
            ...$homepageContentManager->getDashboardEditorData(),
        ]);
    }

    /**
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'username' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $configuredUsername = (string) config('dashboard.username');
        $configuredPassword = (string) config('dashboard.password');

        $isValidLogin = hash_equals($configuredUsername, $credentials['username'])
            && hash_equals($configuredPassword, $credentials['password']);

        if (! $isValidLogin) {
            throw ValidationException::withMessages([
                'username' => 'The provided credentials do not match the dashboard login.',
            ]);
        }

        $request->session()->regenerate();
        $request->session()->put([
            'dashboard_authenticated' => true,
            'dashboard_username' => $configuredUsername,
        ]);

        return redirect()->intended(route('dashboard'));
    }

    public function destroy(Request $request): RedirectResponse
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}

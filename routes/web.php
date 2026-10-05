<?php

use App\Http\Controllers\DashboardAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomepageContentController;
use App\Http\Controllers\SeoPageController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/sitemap.xml', SitemapController::class)->name('sitemap');

foreach (array_keys(app(\App\Support\SeoPageRegistry::class)->basePages()) as $seoPath) {
    Route::get('/'.$seoPath.'/', SeoPageController::class)
        ->name('seo.'.str_replace('/', '.', $seoPath));
}
Route::get('/enquire', EnquiryController::class)->name('enquire');
Route::post('/enquire', [EnquiryController::class, 'store'])->name('enquire.store');
Route::get('/login', [DashboardAuthController::class, 'create'])->name('login');
Route::post('/login', [DashboardAuthController::class, 'store'])->name('login.store');
Route::post('/logout', [DashboardAuthController::class, 'destroy'])->name('logout');

Route::middleware('dashboard.auth')->group(function (): void {
    Route::get('/dashboard/enquiries', [\App\Http\Controllers\DashboardManagementController::class, 'enquiries'])->name('dashboard.enquiries.index');
    Route::patch('/dashboard/enquiries/{enquiry}', [\App\Http\Controllers\DashboardManagementController::class, 'updateEnquiry'])->name('dashboard.enquiries.update');
    Route::post('/dashboard/enquiries/{enquiry}/notify', [\App\Http\Controllers\DashboardManagementController::class, 'notify'])->name('dashboard.enquiries.notify');
    Route::get('/dashboard/settings', [\App\Http\Controllers\DashboardManagementController::class, 'settings'])->name('dashboard.settings.edit');
    Route::put('/dashboard/settings', [\App\Http\Controllers\DashboardManagementController::class, 'saveSettings'])->name('dashboard.settings.update');
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::get('/dashboard/pages', [\App\Http\Controllers\DashboardManagementController::class, 'pages'])->name('dashboard.pages.index');
    Route::get('/dashboard/pages/edit', [\App\Http\Controllers\DashboardManagementController::class, 'editPage'])->name('dashboard.pages.edit');
    Route::put('/dashboard/pages/edit', [\App\Http\Controllers\DashboardManagementController::class, 'updatePage'])->name('dashboard.pages.update');
    Route::post('/dashboard/pages/reset', [\App\Http\Controllers\DashboardManagementController::class, 'resetPage'])->name('dashboard.pages.reset');
    Route::get('/dashboard/homepage', [HomepageContentController::class, 'edit'])->name('dashboard.homepage.edit');
    Route::post('/dashboard/homepage', [HomepageContentController::class, 'update'])->name('dashboard.homepage.update');
});

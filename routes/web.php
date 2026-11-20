<?php

use App\Http\Controllers\DashboardAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardManagementController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomepageContentController;
use App\Http\Controllers\SeoPageController;
use App\Http\Controllers\SitemapController;
use App\Support\SeoPageRegistry;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/sitemap.xml', SitemapController::class)->name('sitemap');

foreach (array_keys(app(SeoPageRegistry::class)->basePages()) as $seoPath) {
    Route::get('/'.$seoPath.'/', SeoPageController::class)
        ->name('seo.'.str_replace('/', '.', $seoPath));
}
Route::get('/enquire', EnquiryController::class)->name('enquire');
Route::post('/enquire', [EnquiryController::class, 'store'])->name('enquire.store');
Route::get('/login', [DashboardAuthController::class, 'create'])->name('login');
Route::post('/login', [DashboardAuthController::class, 'store'])->name('login.store');
Route::post('/logout', [DashboardAuthController::class, 'destroy'])->name('logout');

Route::middleware('dashboard.auth')->group(function (): void {
    Route::post('/dashboard/inbox/send', [DashboardManagementController::class, 'sendEmail'])->middleware('throttle:10,1')->name('dashboard.inbox.send');
    Route::get('/dashboard/inbox', [DashboardManagementController::class, 'inbox'])->name('dashboard.inbox.index');
    Route::put('/dashboard/settings/inbox', [DashboardManagementController::class, 'saveInboxSettings'])->name('dashboard.inbox.settings');
    Route::get('/dashboard/enquiries', [DashboardManagementController::class, 'enquiries'])->name('dashboard.enquiries.index');
    Route::patch('/dashboard/enquiries/{enquiry}', [DashboardManagementController::class, 'updateEnquiry'])->name('dashboard.enquiries.update');
    Route::post('/dashboard/enquiries/{enquiry}/notify', [DashboardManagementController::class, 'notify'])->name('dashboard.enquiries.notify');
    Route::get('/dashboard/settings', [DashboardManagementController::class, 'settings'])->name('dashboard.settings.edit');
    Route::put('/dashboard/settings', [DashboardManagementController::class, 'saveSettings'])->name('dashboard.settings.update');
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::get('/dashboard/pages', [DashboardManagementController::class, 'pages'])->name('dashboard.pages.index');
    Route::get('/dashboard/pages/create', [DashboardManagementController::class, 'createPage'])->name('dashboard.pages.create');
    Route::post('/dashboard/pages', [DashboardManagementController::class, 'storePage'])->name('dashboard.pages.store');
    Route::get('/dashboard/pages/edit', [DashboardManagementController::class, 'editPage'])->name('dashboard.pages.edit');
    Route::put('/dashboard/pages/edit', [DashboardManagementController::class, 'updatePage'])->name('dashboard.pages.update');
    Route::post('/dashboard/pages/reset', [DashboardManagementController::class, 'resetPage'])->name('dashboard.pages.reset');
    Route::get('/dashboard/homepage', [HomepageContentController::class, 'edit'])->name('dashboard.homepage.edit');
    Route::post('/dashboard/homepage', [HomepageContentController::class, 'update'])->name('dashboard.homepage.update');
});

Route::get('/{pagePath}', SeoPageController::class)->where('pagePath', '.*')->name('seo.custom');

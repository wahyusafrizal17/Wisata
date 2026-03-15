<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DropOffController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TourPackageController;
use App\Http\Controllers\Admin\BannerController as AdminBannerController;
use App\Http\Controllers\Admin\CarController as AdminCarController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\Admin\TestimonialController as AdminTestimonialController;
use App\Http\Controllers\Admin\TourPackageController as AdminTourPackageController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/pricelist', [CarController::class, 'index'])->name('cars.index');
Route::get('/paket-wisata', [TourPackageController::class, 'index'])->name('tour-packages.index');
Route::get('/paket-wisata/{slug}', [TourPackageController::class, 'show'])->name('tour-packages.show');
Route::get('/drop-off-bandara', [DropOffController::class, 'index'])->name('drop-off.index');
Route::get('/galeri', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/kontak', [ContactController::class, 'index'])->name('contact.index');
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
Route::get('/robots.txt', fn () => response("User-agent: *\nAllow: /\n\nSitemap: " . url('/sitemap.xml'), 200, ['Content-Type' => 'text/plain']));

// Redirect old dashboard to admin
Route::redirect('/dashboard', '/admin', 301);

// Admin routes
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('cars', AdminCarController::class)->except(['show']);
    Route::resource('tour-packages', AdminTourPackageController::class)->except(['show']);
    Route::resource('galleries', AdminGalleryController::class)->except(['show']);
    Route::resource('banners', AdminBannerController::class)->except(['show']);
    Route::resource('testimonials', AdminTestimonialController::class)->except(['show']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

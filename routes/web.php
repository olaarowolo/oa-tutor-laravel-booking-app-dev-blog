<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\BookingPolicyController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\TuitionController;

// Home Pages
Route::view('/', 'home');
Route::view('/welcome', 'welcome');
Route::view('/about', 'about');
Route::view('/coding4kids', 'coding4kids');

// Tuition Levels
Route::view('/eleven-plus', '11+');
Route::view('/gcse', 'key-stage-3'); // Double check if this is intentional
Route::view('/key-stage-1', 'key-stage-1');
Route::view('/key-stage-2', 'key-stage-2');
Route::view('/key-stage-3', 'key-stage-3');

// Policies
Route::view('/policies', 'docs.policies');
Route::view('/session-policy', 'docs.missed-session-policy');
Route::view('/tuition-delivery-policy', 'docs.tuition-delivery-policy');
Route::view('/dressing-policy', 'docs.dress-policy');
Route::view('/terms', 'docs.terms');
Route::view('/privacy-policy', 'docs.privacy-policy');
Route::get('/booking-policy', [BookingPolicyController::class, 'index']);
Route::get('/policies', [PolicyController::class, 'showPolicies']);

// Blog
Route::prefix('blog')->group(function () {
    Route::view('/', 'blog.home');
    Route::view('/national-curriculum', 'blog.national_curriculum');
});

// Misc Pages
use App\Http\Controllers\TutorApplicationController;

Route::get('/join-oa-tutors', [TutorApplicationController::class, 'showForm']);
Route::post('/join-oa-tutors', [TutorApplicationController::class, 'submitForm'])->name('tutor.submit');



// Artisan Commands
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;

Route::get('/migrate-database', function () {
    $output = [];
    Artisan::call('migrate:status', ['--no-interaction' => true], $output);

    $outputString = implode("\n", $output);
    if (strpos($outputString, 'No pending migrations') !== false) {
        return 'Nothing to migrate. Database is up to date.';
    }

    Artisan::call('migrate', ['--force' => true]);
    return 'Database migrated successfully.';
});
// End Artisan Commands



Route::view('/recommended-product-lists', 'pages.recommended-product-lists');
// Route::view('/easterpromo', 'pages.easterpromo');
Route::view('/pricing', 'pages.pricing');
// Route::view('/backtoschool/packages', 'pages.promo.packages');


// Back to School Promo
Route::view('/backtoschool', 'backtoschool');
Route::view('/backtoschool/packages', 'pages.packages');
Route::post('/backtoschool/register', [TuitionController::class, 'register'])->name('tuition.register');

// Newsletter
Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\BookingPolicyController;
use App\Http\Controllers\NewsletterController;


Route::get('/', function () {
    return view('home');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/coding4kids', function () {
    return  view('coding4kids');
});
Route::get('eleven-plus', function () {
    return view('11+');
});
Route::get('key-stage-1', function () {
    return   view(view: 'key-stage-1');
});
Route::get('key-stage-2', function () {
    return   view(view: 'key-stage-2');
});
Route::get('key-stage-3', function () {
    return   view(view: 'key-stage-3');
});
Route::get('policies', function () {
    return   view(view: 'docs/policies');
});
Route::get('session-policy', function () {
    return   view(view: 'docs.missed-session-policy');
});
Route::get('booking-policy', [BookingPolicyController::class, 'index']);

Route::get('tuition-delivery-policy', function () {
    return   view(view: 'docs/tuition-delivery-policy');
});
Route::get('dressing-policy', function () {
    return   view(view: 'docs/dress-policy');
});
Route::get('terms', function () {
    return   view(view: 'docs/terms');
});
Route::get('privacy-policy', function () {
    return   view(view: 'docs/privacy-policy');
});
// BLOG
// routes/web.php
Route::get('blog', function () {
    return view('blog.home');
});
// routes/web.php
Route::get('/blog/national-curriculum', function () {
    return view('blog.national_curriculum');
});
// routes/web.php
Route::get('/join-oa-tutors', function () {
    return view('docs.join-oa-tutors');
});
Route::get('/policies', [PolicyController::class, 'showPolicies']);


// routes/web.php
Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

Route::get('recommended-product-lists', function () {
    return   view(view: 'pages.recommended-product-lists');
});

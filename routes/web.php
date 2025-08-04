<?php

use App\Http\Controllers\CommonController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/users', [ContactController::class, 'user'])->name('user');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/blog', [CommonController::class, 'blog'])->name('blog');
    Route::get('/blog_update', [CommonController::class, 'blog_update'])->name('blog');
    Route::post('/blog/store', [CommonController::class, 'store']);
    Route::delete('/delete-blog/{id}', [CommonController::class, 'destroy'])->name('blog.destroy');
});

require __DIR__.'/auth.php';

Route::get('about', function () {
    return view('about');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('services', function () {
    return view('services');
});
Route::get('social-media-marketing', function () {
    return view('social-media-marketing');
});
Route::get('Digital-Strategy-Consulting', function () {
    return view('dsc');
});
Route::get('Search-Engine-Optimization', function () {
    return view('seo');
});
Route::get('Pay-Per-Click', function () {
    return view('ppc');
});
Route::get('Social-Media-Marketing', function () {
    return view('smm');
});
Route::get('Content-Marketing', function () {
    return view('cm');
});
Route::get('Web-Design-Development', function () {
    return view('wdd');
});
Route::get('Email-SMS-Marketing', function () {
    return view('esm');
});
Route::get('Marketing-Automation-CRM', function () {
    return view('macrm');
});
Route::get('Video-Marketing-Production', function () {
    return view('vmp');
});
Route::get('Influencer-Affiliate-Marketing', function () {
    return view('ifm');
});
Route::get('Analytics-Data-Insights', function () {
    return view('adi');
});
Route::get('Reputation-Management-Crisis-Control', function () {
    return view('rmcc');
});
Route::get('Affiliate-Marketing', function () {
    return view('affmar');
});

// Services Routs
Route::get('web_app_development', function () { return view('services/web_app_development'); });
Route::get('public_relations_media_outreach', function () { return view('services/public_relations_media_outreach'); });
Route::get('online_reputation_management', function () { return view('services/online_reputation_management'); });
Route::get('social_media_management_marketing', function () { return view('services/social_media_management_marketing'); });
Route::get('account_recovery_security_services', function () { return view('services/account_recovery_security_services'); });
Route::get('search_engine_optimization', function () { return view('services/search_engine_optimization'); });
Route::get('digital_advertising_lead_generation', function () { return view('services/digital_advertising_lead_generation'); });
Route::get('content_creation_design', function () { return view('services/content_creation_design'); });
Route::get('cloud_services_technical_accounts', function () { return view('services/cloud_services_technical_accounts'); });
Route::get('influencer_marketing_branding', function () { return view('services/influencer_marketing_branding'); });
Route::get('speaking_award_opportunities', function () { return view('services/speaking_award_opportunities'); });
Route::get('specialized_digital_marketing_monetization_services', function () { return view('services/specialized_digital_marketing_monetization_services'); });

Route::get('servicenew', function () { return view('servicenew'); });

Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/blogs', [ContactController::class, 'blogs'])->name('blogs');
// Test
Route::get('test', function () {return view('test');});

Route::get('/{id}', [ContactController::class, 'viewEncrypted'])->name('blogdetail');




<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\OurServiceController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\HomeController;



//admin login, register
Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

//homepage
Route::get('/', [HomeController::class, 'index'])->name('homepage');


//services
Route::get('/digital_marketing', [OurServiceController::class, 'digital_marketing'])->name('digital_marketing');
Route::get('/seo_service', [OurServiceController::class, 'seo_service'])->name('seo_service');
Route::get('/business_content_creation', [OurServiceController::class, 'business_content'])->name('business_content');

Route::get('/website_design_and_development', [OurServiceController::class, 'website_design_and_development'])->name('website_design_and_development');
Route::get('/software_development', [OurServiceController::class, 'software_development'])->name('software_development');
Route::get('/graphics_design', [OurServiceController::class, 'graphics_design'])->name('graphics_design');


//contact page
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

//team members
// -----------front-end-------------------
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/members', [HomeController::class, 'member_individual'])->name('member_individual');

//------------back-end--------------------
Route::get('/team_members', [TeamController::class, 'team_members'])->name('show-team-member');
Route::get('/add-member', [TeamController::class, 'add_member'])->name('add-team-member');




//blog
//--------------------front-end--------------
Route::get('/blogs', [HomeController::class, 'blog'])->name('blog');
Route::get('/read_blog/{blog_id}', [HomeController::class, 'user_read_blog'])->name('read_blog');

//--------------------back-end---------------
Route::get('/admin_blogs', [BlogController::class, 'index'])->name('show_blogs');
Route::get('/add_blog', [BlogController::class, 'add_blog'])->name('add_blog');
Route::post('/store_blog', [BlogController::class, 'store_blog'])->name('store_blog');
Route::get('/edit_blog/{blog_id}',  [BlogController::class, 'edit_blog'])->name('edit_blog');
Route::post('/update_blog', [BlogController::class, 'update_blog'])->name('update_blog');
Route::get('/delete_blog/{blog_id}', [BlogController::class, 'delete_blog'])->name('delete_blog');



//terms and condition
Route::get('/terms_and_conditions', [HomeController::class, 'term'])->name('terms_and_conditions');

//privacy and policies
Route::get('/privacy_policies', [HomeController::class, 'privacy'])->name('privacy_and_policy');



//user feedback/inquiry
Route::post('/submit_form', [ContactController::class, 'contact_form_submit'])->name('submit_website_user_form');


//testing email send
Route::get('/send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('365techworldhr@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
});


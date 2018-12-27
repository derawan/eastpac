<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Landing Page */
Route::get('/', function () {
    return view('landingpage.index');
})->name('welcome');

Route::get('/faq', function () {
    return view('landingpage.faq');
})->name('faq');

Route::get('/contact-us', function () {
    return view('landingpage.contactus');
})->name('contactus');

Route::get('/about', function () {
    return view('landingpage.about');
})->name('about');


Auth::routes();

// after
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::middleware(['auth', 'verified'])->prefix('setting')->group(function() {
    Route::get('profile','ProfileController@index')->name('profileIndex');
    Route::post('profile/full-name-save-edit', 'ProfileController@update')->name('profileUpdate');
    Route::post('profile/change-password-save', 'ProfileController@updatePassword')->name('profileUpdatePassword');
});

Route::middleware(['auth','role:administrator'])->prefix('administrator')->group(function() {
    Route::get('/manage-user', 'AdministratorController@manageUser')->name('admin.usermanage');
    Route::get('/site-config', 'AdministratorController@configIndex')->name('admin.config.index');
    Route::post('/site-config/save-edit-config', 'AdministratorController@updateConfigValue')->name('admin.config.update');
});


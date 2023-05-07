<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth'])->name('admin.index');

Route::group(
    ['prefix' => 'landing-page', 'middleware' => 'auth'],
    function () {
        Route::get('setting', 'LandingPageController@setting')->name('landing_page.setting');
        Route::post('setting', 'LandingPageController@settingStore')->name('landing_page.store');
        Route::get('preview', 'LandingPageController@preview')->name('landing_page.preview');
    }
);

require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => '\App\Http\Controllers\Client', 'as' => 'client.'], function () {
    Route::get('/', 'PageController@home')->name('home');
    Route::get('about', 'PageController@about')->name('about');
    Route::get('contact', 'PageController@contact')->name('contact');
    Route::get('events', 'PageController@events')->name('events');
    Route::get('event/{event}', 'PageController@event')->name('event');
    Route::get('products', 'PageController@products')->name('products');
    Route::get('products/{slug}', 'PageController@product')->name('product');
    Route::get('category/{slug}', 'PageController@category')->name('category');

    // Locale
    Route::get('locale/{locale}', 'PageController@setLocale')->name('locale');

    // Email
    Route::post('email', 'EmailController@send')->name('email.send');

    // terms
    Route::get('terms-conditions', 'PageController@termsConditios')->name('terms-conditions');
});

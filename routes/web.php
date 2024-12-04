<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
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



if (App::environment('local')) {
    Route::get('/artisan', function () {
        return view('client.artisan-commands');
    });
    Route::post('/run-command', function (\Illuminate\Http\Request $request) {
        $command = $request->input('command');

        try {
            Artisan::call($command);
            $output = Artisan::output();
            return response()->json(['success' => true, 'message' => $output]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    });
}

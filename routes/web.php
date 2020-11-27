<?php

use Illuminate\Support\Facades\Storage as Storage;

Route::get('/','ListingController@get_home_web');
Route::get('/listing/{listing}', 'ListingController@get_listing_web');
Route::get('/saved', 'ListingController@get_home_web')->middleware('auth');
Auth::routes();

<?php

Route::group(['prefix' => '/'], function() {
   	Route::get('/', function () {
	    return view('pages.home');
	});
	Route::get('home', function () {
	    return view('pages.home');
	});
	Route::get('about-us', function () {
	    return view('pages.about-us');
	});
	Route::get('products', function () {
	    return view('pages.products');
	});
	Route::get('product-detail', function () {
	    return view('pages.product-detail');
	});
	Route::get('news', function () {
	    return view('pages.news');
	});
	Route::get('new-detail', function () {
	    return view('pages.new-detail');
	});
	Route::get('contact', function () {
	    return view('pages.contact');
	});
	    
});
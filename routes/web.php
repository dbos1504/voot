<?php

Route::get('locales/{lang}', 'Locale@index')->name('en');

Route::get('/', 'ProjectController@index');

Route::view('/um-okkur', 'layouts.um-okkur');

Route::view('/pjonusta', 'layouts.pjonusta');

Route::get('/um-vorurnar-okkar', 'AboutPagesController@index');
Route::get('/um-vorurnar-okkar/{page}', 'AboutPagesController@show');

Route::get('/allar-vorur', 'CategoriesController@index')->name('vorur');

Route::get('/product/{product}', 'ProductController@show')->name('product');

Route::get('/category/{cat}', 'SubcategoriesController@index')->name('cat');
Route::get('/subcategory/{page}', 'SubcategoriesController@show')->name('sub');

Route::get('/hafa-samband', 'ContactController@index')->name('contact');
Route::post('/hafa-samband', 'ContactController@store');

Route::post('/newsletter', 'NewsletterController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

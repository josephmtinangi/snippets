<?php

Route::get('/', 'SnippetsController@index')->name('home');
Route::get('/snippets/{snippet}', 'SnippetsController@show');
Route::get('/snippets/create', 'SnippetsController@create');
Route::post('/snippets', 'SnippetsController@store');

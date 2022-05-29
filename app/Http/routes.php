<?php
Route::get('/','PagesController@homepage');
Route::get('about','PagesController@about');
Route::get('siswa','SiswaController@index');
Route::get('siswa/create', 'SiswaController@create');
Route::get('siswa/create','SiswaController@create');
Route::post('siswa','SiswaController@store');
Route::get('siswa/{siswa}','SiswaController@show');

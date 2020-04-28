<?php

use Illuminate\Support\Facades\Route;


Route::get( '/', "indexController@index" )->name( 'index' );
Route::resource( 'Animal', 'AnimalController' );
Route::resource( 'AnimalView', 'AnimalViewController' );
Route::resource( 'AnimalCategory', 'AnimalCategoryController' );
Auth::routes();
Route::get( '/home', 'HomeController@index' )->name( 'home' );
Route::get( '/home/allAnimals', 'HomeController@allAnimals' )->name( 'allAnimals' );
Route::post( '/home/ajaxRequestPostEditAnimals', 'HomeController@ajaxRequestPostEditAnimals' );
Route::post( '/home/ajaxRequestPostDeleteAnimals', 'HomeController@ajaxRequestPostDeleteAnimals' );
Route::post( '/home/ajaxRequestPostInsertAnimals', 'HomeController@ajaxRequestPostInsertAnimals' );

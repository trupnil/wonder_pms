<?php

use Illuminate\Support\Facades\Route;

Route::GET('','Admin\AuthController@index')->name('admin-login');
Route::GET('logout','Admin\AuthController@logout')->name('logout');
Route::POST('auth','Admin\AuthController@authentication')->name('admin-auth');
Route::GET('list-property-type','Admin\masterController@listPropertyType')->name('list-property-type');
Route::POST('store-property-type','Admin\masterController@storePropertyType')->name('property-type-store');
Route::GET('list-properties','Admin\masterController@listProperty')->name('list-properties');
Route::POST('store-property','Admin\masterController@storeProperty')->name('property-store');
Route::GET('list-unit-type','Admin\masterController@unitTypes')->name('list-unit-type');
Route::POST('store-unit-type','Admin\masterController@storeUnitType')->name('unit-type-store');
Route::GET('list-unit','Admin\masterController@listUnit')->name('list-unit');
Route::POST('store-unit','Admin\masterController@storeUnit')->name('unit-store');
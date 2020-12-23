<?php

use Illuminate\Support\Facades\Route;

Route::GET('','Admin\AuthController@index')->name('admin-login');
Route::GET('logout','Admin\AuthController@logout')->name('logout');
Route::POST('auth','Admin\AuthController@authentication')->name('admin-auth');
Route::GET('list-property-type','Admin\masterController@listPropertyType')->name('list-property-type');
Route::POST('store-property-type','Admin\masterController@storePropertyType')->name('property-type-store');
Route::POST('update-property-type/{id}','Admin\masterController@updatePropertyType')->name('update-property-type');
Route::POST('update-property/{id}','Admin\masterController@updateProperty')->name('update-property');
Route::POST('get-property-type-view/{id}','Admin\masterController@getProprtyTypeById')->name('get-property-view');
Route::POST('get-unit-type-view/{id}','Admin\masterController@getUnitTypeById')->name('get-property-view');
Route::POST('update-unit-type/{id}','Admin\masterController@updateUnitType')->name('update-unit-type');
Route::GET('list-properties','Admin\masterController@listProperty')->name('list-properties');
Route::POST('store-property','Admin\masterController@storeProperty')->name('property-store');
Route::POST('get-property-view/{id}','Admin\masterController@getProprtyById')->name('get-property-view');
Route::GET('list-unit-type','Admin\masterController@unitTypes')->name('list-unit-type');
Route::POST('store-unit-type','Admin\masterController@storeUnitType')->name('unit-type-store');
Route::GET('list-unit','Admin\masterController@listUnit')->name('list-unit');
Route::POST('get-unit-view/{id}','Admin\masterController@getUnitById')->name('get-unit-view');
Route::POST('store-unit','Admin\masterController@storeUnit')->name('unit-store');
Route::GET('list-tenant','Admin\masterController@listTenant')->name('list-tenant');
Route::POST('get-tenant-view/{id}','Admin\masterController@getTenantById')->name('get-tenant-view');
Route::POST('store-tenant','Admin\masterController@storeTenant')->name('tenant-store');
Route::POST('update-tenant/{id}','Admin\masterController@updateTenant')->name('update-tenant');
Route::POST('update-unit/{id}','Admin\masterController@updateUnit')->name('update-unit');
Route::GET('list-agreement','Admin\masterController@listAgreement')->name('list-agreement');

Route::POST('get-unit-type-id/{id}','Admin\masterController@getUnitById')->name('get-unit-type-id');

Route::POST('get-tenant-ajax/{id}','Admin\masterController@getTenantById')->name('get-tenant-ajax');

Route::POST('store-agreement','Admin\masterController@storeAgreement')->name('agreement-store');

Route::POST('get-agreement-view/{id}','Admin\masterController@getAgreementId')->name('get-agreement-view');
Route::POST('update-agreement/{id}','Admin\masterController@updateAgreement')->name('update-agreement');



//Delete Route

Route::DELETE('unit-type-delete/{id}','Admin\masterController@deleteUnitType')->name('unit-type-delete');

Route::DELETE('property-type-delete/{id}','Admin\masterController@deletePropertyType')->name('property-type-delete');

Route::DELETE('property-delete/{id}','Admin\masterController@deleteProperty')->name('property-delete');

Route::DELETE('unit-delete/{id}','Admin\masterController@deleteUnit')->name('unit-delete');


Route::DELETE('tenant-delete/{id}','Admin\masterController@deleteTenant')->name('tenant-delete');

Route::DELETE('agreement-delete/{id}','Admin\masterController@deleteAgreement')->name('delete-agreement');


//Tax Module
Route::GET('list-texes','Admin\masterController@listTaxes')->name('list-texes');

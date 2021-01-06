<?php

use Illuminate\Support\Facades\Route;

Route::GET('','Admin\AuthController@index')->name('admin-login');
Route::GET('logout','Admin\AuthController@logout')->name('logout');
Route::POST('auth','Admin\AuthController@authentication')->name('admin-auth');

//Unit Type
Route::POST('get-unit-type-view/{id}','Admin\masterController@getUnitTypeById')->name('get-property-view');
Route::POST('update-unit-type/{id}','Admin\masterController@updateUnitType')->name('update-unit-type');
Route::GET('list-unit-type','Admin\masterController@unitTypes')->name('list-unit-type');
Route::POST('store-unit-type','Admin\masterController@storeUnitType')->name('unit-type-store');
Route::POST('get-unit-type-id/{id}','Admin\masterController@getUnitById')->name('get-unit-type-id');
Route::DELETE('unit-type-delete/{id}','Admin\masterController@deleteUnitType')->name('unit-type-delete');

//Property Type
Route::GET('list-property-type','Admin\masterController@listPropertyType')->name('list-property-type');
Route::POST('store-property-type','Admin\masterController@storePropertyType')->name('property-type-store');
Route::POST('update-property-type/{id}','Admin\masterController@updatePropertyType')->name('update-property-type');
Route::POST('update-property/{id}','Admin\masterController@updateProperty')->name('update-property');
Route::POST('get-property-type-view/{id}','Admin\masterController@getProprtyTypeById')->name('get-property-view');
Route::DELETE('property-type-delete/{id}','Admin\masterController@deletePropertyType')->name('property-type-delete');

//Proerties
Route::GET('list-properties','Admin\masterController@listProperty')->name('list-properties');
Route::POST('store-property','Admin\masterController@storeProperty')->name('property-store');
Route::POST('get-property-view/{id}','Admin\masterController@getProprtyById')->name('get-property-view');
Route::DELETE('property-delete/{id}','Admin\masterController@deleteProperty')->name('property-delete');

//Unit
Route::GET('list-unit','Admin\masterController@listUnit')->name('list-unit');
Route::POST('get-unit-view/{id}','Admin\masterController@getUnitById')->name('get-unit-view');
Route::POST('store-unit','Admin\masterController@storeUnit')->name('unit-store');
Route::POST('update-unit/{id}','Admin\masterController@updateUnit')->name('update-unit');
Route::DELETE('unit-delete/{id}','Admin\masterController@deleteUnit')->name('unit-delete');

//Tenant
Route::GET('list-tenant','Admin\masterController@listTenant')->name('list-tenant');
Route::POST('get-tenant-view/{id}','Admin\masterController@getTenantById')->name('get-tenant-view');
Route::POST('store-tenant','Admin\masterController@storeTenant')->name('tenant-store');
Route::POST('update-tenant/{id}','Admin\masterController@updateTenant')->name('update-tenant');
Route::DELETE('tenant-delete/{id}','Admin\masterController@deleteTenant')->name('tenant-delete');

//Agreements
Route::GET('list-agreement','Admin\masterController@listAgreement')->name('list-agreement');
Route::POST('get-tenant-ajax/{id}','Admin\masterController@getTenantById')->name('get-tenant-ajax');
Route::POST('store-agreement','Admin\masterController@storeAgreement')->name('agreement-store');
Route::POST('get-agreement-view/{id}','Admin\masterController@getAgreementId')->name('get-agreement-view');
Route::POST('update-agreement/{id}','Admin\masterController@updateAgreement')->name('update-agreement');
Route::DELETE('agreement-delete/{id}','Admin\masterController@deleteAgreement')->name('delete-agreement');

//Tax Module
Route::GET('list-taxes','Admin\masterController@listTaxes')->name('list-taxes');
Route::POST('store-taxes','Admin\masterController@storeTaxes')->name('store-taxes');
Route::POST('get-tax-ajax/{id}','Admin\masterController@getTaxById')->name('get-tax-ajax');
Route::POST('update-tax/{id}','Admin\masterController@updateTax')->name('update-tax');
Route::DELETE('tax-delete/{id}','Admin\masterController@deleteTax')->name('tax-delete');

//Account Group
Route::GET('list-account-group','Admin\masterController@listAccountGroup')->name('list-account-group');
Route::POST('store-account-group','Admin\masterController@storeAccountGroup')->name('store-account-group');
Route::POST('get-account-group-ajax/{id}','Admin\masterController@getAccountGroupById')->name('get-account-group-ajax');
Route::POST('update-account-group/{id}','Admin\masterController@updateAccountGroup')->name('update-account-group');
Route::DELETE('account-group-delete/{id}','Admin\masterController@deleteAccountGroup')->name('account-group-delete');

//Account
Route::GET('list-account','Admin\masterController@listAccount')->name('list-account');
Route::POST('store-account','Admin\masterController@storeAccount')->name('store-account');
Route::POST('get-account-ajax/{id}','Admin\masterController@getAccountById')->name('get-account-ajax');
Route::POST('update-account/{id}','Admin\masterController@updateAccount')->name('update-account');
Route::DELETE('account-delete/{id}','Admin\masterController@deleteAccount')->name('account-delete');


//Reports Payment
Route::GET('first_report','Admin\ReportsController@index')->name('first.report');
Route::POST('get-payment-data','Admin\ReportsController@getPaymentData')->name('get-payment-data');
Route::POST('payment-store','Admin\ReportsController@storePayment')->name('payment-store');

//Search Report
Route::POST('get-search-report','Admin\ReportsController@getSearchReport')->name('get-search-report');

Route::any('get-first-search-report','Admin\ReportsController@getFirstReportSearch')->name('first_report_search');
Route::any('get-payment-overall-report','Admin\ReportsController@getPaymentOverallReportSearch')->name('get.payment.overall.report');
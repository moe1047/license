<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['admin'],
    'namespace' => 'Admin'
], function() {
    // Backpack\MenuCRUD
    CRUD::resource('menu-item', 'MenuItemCrudController');
    //  CRUD resources and other admin routes
    CRUD::resource('ship', 'ShipCrudController');
    CRUD::resource('location', 'LocationCrudController');
    CRUD::resource('town', 'TownCrudController');
    CRUD::resource('fish', 'FishCrudController');
    CRUD::resource('businessType', 'BusinessTypeCrudController');
    CRUD::resource('shipType', 'ShipTypeCrudController');
    CRUD::resource('dailyOperation', 'DailyOperationCrudController');
    CRUD::resource('license', 'LicenseCrudController');
    CRUD::resource('renewal', 'RenewalCrudController');
    CRUD::resource('vesselLicense', 'VesselLicenseCrudController');
    CRUD::resource('vesselLicenseRenewal', 'VesselLicenseRenewalCrudController');

    CRUD::resource('licensePayment', 'LicensePaymentCrudController');
    CRUD::resource('vesselPayment', 'VesselPaymentCrudController');

    Route::get('report/dailyOperation', 'ReportController@dailyOperation');
    Route::get('report/license', 'ReportController@license');
    Route::get('report/renewal', 'ReportController@renewal');
    Route::get('report/print', 'ReportController@print_license');
    Route::get('report/{id}/print', 'ReportController@show_print_license');

    Route::get('report/printVessel', 'ReportController@print_vessel_license');
    Route::get('report/{id}/printVessel', 'ReportController@show_print_vessel_license');

    Route::get('report/licensePayments', 'ReportController@license_payments');
    Route::get('report/vesselPayments', 'ReportController@vessel_payments');
});

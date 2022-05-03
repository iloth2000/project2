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
Route::get('login','demo_controller@login')->name('login');
Route::post('login','demo_controller@login_process')->name('login_process');
Route::get('logout','demo_controller@logout')->name('logout');
Route::group(['prefix'=>'quan_li','as'=>'quan_li.','middleware'=>['CheckLogin']],function(){
    
    Route::get('index','demo_controller@index')->name('index');
    Route::get('index_type/{type_code}','demo_controller@index_type')->name('index_type');
    Route::get('car_type','demo_controller@car_type')->name('car_type');
    Route::get('car_type_insert','demo_controller@car_type_insert')->name('car_type_insert');
    Route::post('car_type_insert','demo_controller@car_type_insert_process')->name('car_type_insert_process');
    Route::get('car_type_update/{type_code}','demo_controller@car_type_update')->name('car_type_update');
    Route::post('car_type_update','demo_controller@car_type_update_process')->name('car_type_update_process');
    Route::get('car_type_del/{type_code}','demo_controller@car_type_del')->name('car_type_del');

    Route::get('car_brand','car_brand_ctl@car_brand')->name('car_brand');
    Route::get('car_brand_insert','car_brand_ctl@car_brand_insert')->name('car_brand_insert');
    Route::post('car_brand_insert','car_brand_ctl@car_brand_insert_process')->name('car_brand_insert_process');
    Route::get('car_brand_update/{brand_code}','car_brand_ctl@car_brand_update')->name('car_brand_update');
    Route::post('car_brand_update','car_brand_ctl@car_brand_update_process')->name('car_brand_update_process');
    Route::get('car_brand_del/{brand_code}','car_brand_ctl@car_brand_del')->name('car_brand_del');

    Route::get('cab_list','cab_ctl@cab_list')->name('cab_list');
    Route::get('cab_insert','cab_ctl@cab_insert')->name('cab_insert');
    Route::post('cab_insert','cab_ctl@cab_insert_process')->name('cab_insert_process');
    Route::get('cab_update/{cab_code}','cab_ctl@cab_update')->name('cab_update');
    Route::post('cab_update','cab_ctl@cab_update_process')->name('cab_update_process');
    Route::get('cab_del/{cab_code}','cab_ctl@cab_del')->name('cab_del');

    Route::get('cus_list','cus_ctl@cus_list')->name('cus_list');
    Route::get('cus_insert','cus_ctl@cus_insert')->name('cus_insert');
    Route::post('cus_insert','cus_ctl@cus_insert_process')->name('cus_insert_process');
    Route::get('cus_update/{customer_code}','cus_ctl@cus_update')->name('cus_update');
    Route::post('cus_update','cus_ctl@cus_update_process')->name('cus_update_process');
    Route::get('cus_del/{customer_code}','cus_ctl@cus_del')->name('cus_del');

    Route::get('contract_list','contract_ctl@contract_list')->name('contract_list');
    Route::get('contract_insert','contract_ctl@contract_insert')->name('contract_insert');
    Route::post('contract_insert','contract_ctl@contract_insert_process')->name('contract_insert_process');
    Route::get('contract_update/{contract_code}','contract_ctl@contract_update')->name('contract_update');
    Route::post('contract_update','contract_ctl@contract_update_process')->name('contract_update_process');
    Route::get('contract_del/{contract_code}','contract_ctl@contract_del')->name('contract_del');
    Route::get('contract_detail/{contract_code}','contract_ctl@contract_detail')->name('contract_detail');

    Route::get('profile','demo_controller@profile')->name('profile');
    Route::post('profile','demo_controller@profile_password')->name('profile_password');
});
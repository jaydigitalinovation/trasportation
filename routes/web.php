<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AdminloginController;

use App\Http\Controllers\Auth\Admin_controller;

use App\Http\Controllers\Admin\HomeController;

use App\Http\Controllers\Admin\AboutusController;

use App\Http\Controllers\user_controller;

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


Route::get('/',[user_controller::class,'index']);

Route::get('/about',[user_controller::class,'about']);

Route::get('/team',[user_controller::class,'team']);

Route::get('/gallary',[user_controller::class,'gallary']);

Route::get('/service',[user_controller::class,'service']);

Route::get('/career',[user_controller::class,'career']);

Route::get('/enquiry',[user_controller::class,'enquiry']);

Route::get('/contact',[user_controller::class,'contact']);






Route::group(['prefix'=>'admin'],function(){

    Route::get('/admin_login',[AdminloginController::class,'admin_login'])->name('login');

    Route::post('/authenticate',[AdminloginController::class,'authenticate'])->name('login_data');

    Route::get('/home',[Admin_controller::class,'home'])->name('home');




    Route::get('/forget_password',[Admin_controller::class,'forget_password'])->name('forget_password');

    Route::post('/send_mail',[Admin_controller::class,'send_mail']);

    Route::get('/confirm_otp/{id}',[Admin_controller::class,'confirm_otp']);

    Route::post('/verify_otp/{id}',[Admin_controller::class,'verify_otp']);

    Route::get('/reset_password/{id}',[Admin_controller::class,'reset_password']);

    Route::post('/store_password/{id}',[Admin_controller::class,'store_password']);




    Route::get('/add_home_info',[Admin_controller::class,'add_home_info'])->name('add_home');

    Route::post('/store_add_home_info',[Admin_controller::class,'store_add_home_info'])->name('store_add_home');

    Route::get('/delete_home_data/{id}',[Admin_controller::class,'delete_home_data']);

    Route::get('/update_home_data/{id}',[Admin_controller::class,'update_home_data']);

    Route::post('/store_update_home_data/{id}',[Admin_controller::class,'store_update_home_data']);


    
    Route::get('/gallary_image',[Admin_controller::class,'gallary_image']);



    Route::get('/add_gallary_info',[Admin_controller::class,'add_gallary_info'])->name('add_gallary');

    Route::post('/store_add_gallary_info',[Admin_controller::class,'store_add_gallary_info'])->name('store_add_gallary');

    Route::get('/delete_gallary_data/{id}',[Admin_controller::class,'delete_gallary_data']);

    Route::get('/update_gallary_data/{id}',[Admin_controller::class,'update_gallary_data']);

    Route::post('/store_update_gallary_data/{id}',[Admin_controller::class,'store_update_gallary_data']);




    Route::get('/service',[Admin_controller::class,'service']);



    Route::get('/add_service_info',[Admin_controller::class,'add_service_info'])->name('add_service');

    Route::post('/store_add_service_info',[Admin_controller::class,'store_add_service_info'])->name('store_add_service');

    Route::get('/delete_service_data/{id}',[Admin_controller::class,'delete_service_data']);

    Route::get('/update_service_data/{id}',[Admin_controller::class,'update_service_data']);

    Route::post('/store_update_service_data/{id}',[Admin_controller::class,'store_update_service_data']);



    Route::get('/about',[Admin_controller::class,'about']);




    Route::get('/about_mission',[Admin_controller::class,'about_mission']);



    Route::get('/add_about_mission_info',[Admin_controller::class,'add_about_mission_info'])->name('add_about_mission');

    Route::post('/store_add_about_mission_info',[Admin_controller::class,'store_add_about_mission_info'])->name('store_add_about_mission');

    Route::get('/delete_about_mission_data/{id}',[Admin_controller::class,'delete_about_mission_data']);

    Route::get('/update_about_mission_data/{id}',[Admin_controller::class,'update_about_mission_data']);

    Route::post('/store_update_about_mission_data/{id}',[Admin_controller::class,'store_update_about_mission_data']);



    Route::get('/career_position',[Admin_controller::class,'career_position']);



    Route::get('/add_career_position_info',[Admin_controller::class,'add_career_position_info'])->name('add_career_position');

    Route::post('/store_add_career_position_info',[Admin_controller::class,'store_add_career_position_info'])->name('store_add_career_position');

    Route::get('/delete_career_position_data/{id}',[Admin_controller::class,'delete_career_position_data']);

    Route::get('/update_career_position_data/{id}',[Admin_controller::class,'update_career_position_data']);

    Route::post('/store_update_career_position_data/{id}',[Admin_controller::class,'store_update_career_position_data']);




    Route::get('/service_tab',[Admin_controller::class,'service_tab']);



    Route::get('/add_service_tab_info',[Admin_controller::class,'add_service_tab_info'])->name('add_service_tab');

    Route::post('/store_add_service_tab_info',[Admin_controller::class,'store_add_service_tab_info'])->name('store_add_service_tab');

    Route::get('/delete_service_tab_data/{id}',[Admin_controller::class,'delete_service_tab_data']);

    Route::get('/update_service_tab_data/{id}',[Admin_controller::class,'update_service_tab_data']);

    Route::post('/store_update_service_tab_data/{id}',[Admin_controller::class,'store_update_service_tab_data']);








    Route::get('/home_about',[HomeController::class,'home_about']);



    Route::get('/add_home_about_info/{id}',[HomeController::class,'add_home_about_info']);

    Route::post('/store_add_home_about_info/{id}',[HomeController::class,'store_add_home_about_info']);

    Route::get('/delete_home_about/{id}',[HomeController::class,'delete_home_about']);





    Route::get('/add_about_image_info/{id}',[AboutusController::class,'add_about_image_info']);

    Route::post('/store_add_about_image_info/{id}',[AboutusController::class,'store_add_about_image_info']);





    Route::get('/about_choose',[AboutusController::class,'about_choose']);



    Route::get('/add_about_choose_data/{id}',[AboutusController::class,'add_about_choose_data']);

    Route::post('/store_add_about_choose_data/{id}',[AboutusController::class,'store_add_about_choose_data']);




    Route::get('/about_faq',[AboutusController::class,'about_faq']);


    Route::get('/add_about_faq_des_data/{id}',[AboutusController::class,'add_about_faq_des_data']);

    Route::post('/store_add_about_faq_des_data/{id}',[AboutusController::class,'store_add_about_faq_des_data']);


    Route::get('/add_about_faq_data/{id}',[AboutusController::class,'add_about_faq_data']);

    Route::post('/store_add_about_faq_data/{id}',[AboutusController::class,'store_add_about_faq_data']);

    Route::get('/delete_about_faq/{id}',[AboutusController::class,'delete_about_faq']);


});

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|     
*/


	/****Admin Panel*****/
	/*Login Page*/
	Route::get('/admin_panel', function () {
		return view('admin.signin');
	});
	
	/*Login Page -- Admin Login*/
	Route::get('/admin_panel/login', 'AdminController@login');
	Route::get('/admin_panel/dashboard', 'AdminController@load_admin_dashboard');
	Route::get('/admin_panel/logout', 'AdminController@logout');
	
	/**Admin Panel  -  Add User Page**/
	Route::get('/admin_panel/add_user_page', ['middleware'=>'auth', 'uses'=>'AdminController@load_add_user_page']);
	
	/**Admin Panel  -  Create user or hotel **/
	Route::get('admin_panel/add_hotel_or_user', ['middleware'=>'auth', 'uses' => 'AdminController@add_hotel_or_user'] );
	/**Admin Panel  -  User or Hotel List**/
	Route::get('/admin_panel/user_list', ['middleware'=>'auth', 'uses' => 'AdminController@user_list']);
	
	/**Admin Panel  -  Promotional Tip**/
	Route::get('/admin_panel/promo_tip_list', ['middleware'=>'auth', 'uses' => 'AdminController@list_promo_tip']);
	Route::get('/admin_panel/add_promo_tip', ['middleware'=>'auth', 'uses' => 'AdminController@add_promo_tip']);
	Route::post('/admin_panel/create_promo_tip', ['middleware'=>'auth', 'uses' => 'AdminController@create_promo_tip']);
	
	/**Admin Panel  -  Create Restaurant**/
	Route::get('/admin_panel/halal_restaurant_list', ['middleware'=>'auth', 'uses' => 'AdminController@halal_restaurant_list']);
	Route::get('/admin_panel/halal_restaurant_add', ['middleware'=>'auth', 'uses' => 'AdminController@load_add_restaurant_page']);
	Route::post('/admin_panel/create_halal_restaurant', ['middleware'=>'auth', 'uses' => 'AdminController@create_restaurant']);
	
	/*Admin panel - Amenities Review Page*/
	Route::get('/admin_panel/amenities_review', ['middleware'=>'auth', 'uses' => 'AdminController@amenities_review_page']);
	Route::get('/admin_panel/amenities/view_single_amenities/{amenities_id}', ['middleware'=>'auth', 'uses' => 'AdminController@view_amenities_details']);
	Route::get('/admin_panel/amenities/approve_amenities/{amenities_id}', ['middleware'=>'auth', 'uses' => 'AdminController@approve_amenities_by_id']);
	Route::get('/admin_panel/amenities/hold_amenities/{amenities_id}', ['middleware'=>'auth', 'uses' => 'AdminController@hold_amenities_by_id']);
	Route::get('/admin_panel/amenities/delete_amenities/{amenities_id}', ['middleware'=>'auth', 'uses' => 'AdminController@delete_amenities_by_id']);
	
	/*Admin Setting Page -- Update Settings Page */ 
	Route::get('/admin_panel/setting_page', ['middleware'=>'auth', 'uses'=>'AdminController@load_admin_settings_page']);     
	/*Admin Setting Page -- Update Settings */ 
	Route::post('/admin_panel/update_settings', ['middleware'=>'auth', 'uses'=>'AdminController@update_settings']);     
	 
	/****End Of Admin Panel*****/
	
	
	
	
	/****User Panel*****/
	/*Login Page*/
	Route::get('/', function () {
		return view('login-form');
	});

	/*Registration Page*/
	Route::get('/register/user', function () {
		return view('register-form');
	});
	       

	/*Create User*/
	Route::get('/user/create_user','UserController@create_user');
	/*Update User*/
	Route::get('/user/update_user','UserController@update_user');


	/*Login User*/
	Route::get('/user/login_user','UserController@login');

	/*Logout User*/   
	Route::get('/user/logout','UserController@logout');

	/*Dashboard -- Load Dashboard */
	Route::get('/dashboard',['middleware'=>'auth', 'uses'=>'DashboardController@load_dashboard']);
	
	/*Generate and download pdf*/    
	Route::get('/download/pray_time_table_pdf','DashboardController@generate_pdf');
	                                                
	/*Setting Page -- Load Setting Page*/ 
	Route::get('/setting',['middleware'=>'auth', 'uses'=>'SettingController@load_setting_page']);
	
	/*Setting Page -- Update Property Option */ 
	Route::post('/setting/update_property_option',['middleware'=>'auth', 'uses'=>'SettingController@update_property_option']);
	
    /*Amenities Page -- Load Amenities Page */ 
	Route::get('/amenities',['middleware'=>'auth', 'uses'=>'AmenitiesController@load_amenities_page']);                             

	/*Amenities Page - Update Amenities (Review)*/ 
	Route::get('/amenities/update_amenities',['middleware'=>'auth', 'uses'=>'AmenitiesController@update_amenities']);
	
	/*Amenities Page -- Update Amenities (Submit)*/
	Route::post('/amenities/submit_amenities',['middleware'=>'auth', 'uses'=>'AmenitiesController@submit_amenities']);

	/*Amenities Page -- Edit Amenities*/
	Route::get('/amenities/edit/{id}',['middleware'=>'auth', 'uses'=>'AmenitiesController@edit_amenities_page']);

	/*Amenities Page -- Edit Amenities first section*/
	Route::post('/amenities/edit_amenities_first_section',['middleware'=>'auth', 'uses'=>'AmenitiesController@edit_amenities_first_section']);
	Route::post('/amenities/edit_amenities_second_section',['middleware'=>'auth', 'uses'=>'AmenitiesController@edit_amenities_second_section']);
	Route::post('/amenities/edit_amenities_third_section',['middleware'=>'auth', 'uses'=>'AmenitiesController@edit_amenities_third_section']);

	/*Marketing Page -- Load Marketing Page */ 
	Route::get('/marketing',['middleware'=>'auth', 'uses'=>'MarketingController@load_marketing_page']);     
	 
	 /*Marketing Page -- Download Marketing Files */ 
	Route::get('/marketing/download_marketing_file',['middleware'=>'auth', 'uses'=>'MarketingController@download_marketing_file']);     
	 
	/*Promotional Tips Page -- Load Promotional Tips Page */ 
	Route::get('/promotional-tips',['middleware'=>'auth', 'uses'=>'PromotionalTipsController@load_promo_tip_page']);     
	 
	 /*Promotional Tips Page -- Load Promotional Tips Single Page */ 
	Route::get('/promotional-tip/single/{id}', ['middleware'=>'auth', 'uses'=>'PromotionalTipsController@get_single_promo_tip_by_id']);     
	 
	 /*Promotional Tips Page -- Load Promotional Tips Previous Single Page */ 
	Route::get('/promotional-tip/prev/single/{id}', ['middleware'=>'auth', 'uses'=>'PromotionalTipsController@get_prev_single_promo_tip_by_id']);     
	 
	 /*Promotional Tips Page -- Load Promotional Tips Next Single Page */ 
	Route::get('/promotional-tip/next/single/{id}', ['middleware'=>'auth', 'uses'=>'PromotionalTipsController@get_next_single_promo_tip_by_id']);     
	 
	 /*Request Certificate Page -- Load Request Certificate Page */ 
	Route::get('/request-certificate',['middleware'=>'auth', 'uses'=>'RequestCertificateController@load_request_certificate_page']);     
	  
	 /*Request Certificate Page -- Add Request Certificate */ 
	Route::post('/request_certificate/send_certificate_request', ['middleware'=>'auth', 'uses'=>'RequestCertificateController@add_request_certificate']);     

	/*Halal Restaurant Page -- Show Halal Restaurant Page  */ 
	Route::get('/halal-restaurant', ['middleware'=>'auth', 'uses'=>'HalalRestaurantController@load_halal_restaurant']);     

	/****End Of User Panel*****/


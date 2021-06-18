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
Route::get('/welcome', function () {
    return view('welcome');
});

// index page contoller
Route::get('/','index_page_controller@index');
Route::post('/advice_email_url','index_page_controller@advice_email');

// practice page controller
Route::get('/practice_area/','practice_page_controller@index');
Route::get('/practice_area/{id}','practice_page_controller@show');

// about page controller
Route::get('/about', function(){
    return view('about');
})->middleware('login_check');

// case link controller
Route::get('/case','case_page@index')->middleware('login_check');
Route::get('/case_link/{id}','case_page@show');

// attorneys link controller
Route::get('/attorneys','user_dashboard_page@attorneys')->middleware('login_check');

// blog controller

Route::get('/blog', 'blog_page@index')->middleware('login_check');


// contact page controller

Route::get('/contact_page','Contact_page_controller@index')->middleware('login_check');
Route::post('/store','contact_page_controller@store');



// Ajax controller
Route::get('/user_exists','ajax_uses@usercheck');
Route::get('/email_exists','ajax_uses@emailcheck');
Route::get('/payment_alert_url','ajax_uses@payment_alert_fn');
Route::get('/change_password','ajax_uses@change_password');

// common password url
Route::post('/password_change_url','ajax_uses@password_change_url');



// add lawer controller
Route::get('/add_lawer','add_lawer_type@index');
Route::post('/add_lawer_type_table','add_lawer_type@store');

// User Routes

Route::get('/dashboard_page','user_dashboard_page@index')->middleware('login_check');
Route::get('/logout_link','user_dashboard_page@logout_link');
Route::get('/ajax_appoint_user','user_dashboard_page@ajax_fn');
Route::get('/ajax_edit_user_profile','user_dashboard_page@ajax_fn_edit_data');
Route::get('/delete_appointment','user_dashboard_page@ajax_delete_appointment');
Route::post('/feedback_form','user_dashboard_page@feedback_form');
Route::post('/payment_url','user_dashboard_page@payment_fn');
Route::post('/paytm-callback','user_dashboard_page@paymentCallback');


// Lawer routes

Route::get('/dashboard_lawer','lawer_dashboard@index')->middleware('lawyer_login_check');
Route::post('/store','lawer_dashboard@store');
Route::post('/update/{id}','lawer_dashboard@update');
Route::get('/appoint_action','lawer_dashboard@appoint_approve');
Route::get('/ajax_appoint','lawer_dashboard@ajax_fn');
Route::post('/lawyer_payment_url','lawer_dashboard@lawyer_payment');
Route::post('/image_change','lawer_dashboard@image_change');



// email success controller
Route::get('/contact_success',function(){
    return view('email_success.contact_success');
});



// custom login controller
Route::get('/login_page','custom_login_page@index');
Route::post('/login_check','custom_login_page@store');
Route::get('/email_send_url','custom_login_page@update');
Route::get('/reset-password/{token}','custom_login_page@edit');
Route::post('/reset-password/{token}','custom_login_page@passwordreset');



// custom register controller
Route::get('/register_user',function(){  return view('register_user');  });
Route::get('/register_lawer','register_lawer_controller@index');
Route::post('/register_lawer_form','register_lawer_controller@store');







// Book appointment controller
Route::resource('appointment','appointment_page'); 




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


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



Auth::routes();
Route::get('/homet','PagesController@index');
Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/events','PagesController@events');
Route::get('/blog','PagesController@blogs');
Route::get('/gallery','PagesController@gallery');
Route::get('/contact','PagesController@contact');
Route::get('/internships','PagesController@internships');
Route::get('/internship-details/{id}','PagesController@singleinternship');
Route::get('/jobs','PagesController@jobs');
Route::get('/job-details/{id}','PagesController@singlejob');

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/admin/register', 'Auth\LoginController@showregisterForm');
Route::get('/login/alumni', 'Auth\LoginController@showAlumniLoginForm');
Route::get('/register-alumni', 'Auth\LoginController@showalumniregisterForm');
Route::get('/login/student', 'Auth\LoginController@showStudentLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/alumni', 'Auth\RegisterController@showAlumniRegisterForm');
Route::get('/register/student', 'Auth\RegisterController@showStudentRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/student', 'Auth\LoginController@studentLogin');
Route::post('/login/alumni', 'Auth\LoginController@alumniLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/alumni', 'Auth\RegisterController@createAlumni');
Route::post('/register/student', 'Auth\RegisterController@createStudent');
Route::post('/Admin/contribution', 'Auth\RegisterController@viewContribution');

Route::post('logout','Auth\LoginController@logout')->name('logout');
Route::get('/student-dashboard', 'PagesController@studentdash');
Route::get('/alumni-dashboard', 'PagesController@alumnidash');
Route::get('/admin-dashboard', 'PagesController@admindash');

//messages routes
Route::get('/Messages','PagesController@alumniMessages');
//Messenger routes
//Route::get('/Messenger','MessengerController@index');
//Route::get('/Messenger/chat/{id}/user','MessengerController@create');
//Route::get('/Messenger/chat/getChat/{id}', 'MessengerController@getChat');
//Route::post('/Messenger/sendChat', 'MessengerController@sendChat');
//
Route::get('/Messenger/{id}', 'ChatsController@index');
Route::get('/messages/{id}', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');
Route::get('Message', 'ChatsController@Message');

//  Alumni dashboard routes
Route::get('/CreateJob','AlumniController@index');
Route::post('/CreateJob','JobsController@create');
Route::get('/CreateInternship','AlumniController@internships');
Route::post('/CreateInternship','JobsController@internships');
//Alumni edits
Route::get('/Alumni/{id}/edit','AlumniController@profile');
Route::post('/Alumni/{id}/profileupdate','AlumniController@updateprofile');
Route::get('/Alumni/Internships','AlumniController@userInternships');
Route::get('/Alumni/Internships/{id}/view','AlumniController@singleInternship');
Route::get('/Alumni/Jobs','AlumniController@jobs');
Route::get('/Alumni/Jobs/{id}/view','AlumniController@jobs');
Route::get('/Alumni/Jobs/{id}/edit','AlumniController@edit');
Route::post('/Alumni/Jobs/{id}/Job-edit','AlumniController@jobedit');
Route::get('/Alumni/Jobs/{id}/delete','AlumniController@deletejob');
Route::get('/alumni-Donate','AlumniController@donate');

//Administrator event routes


    Route::get('/Events', 'EventController@index');
    Route::post('/Events/create', 'EventController@store');
    Route::get('/Event/{id}/show', 'EventController@show');
    Route::get('/Event/{id}/remove', 'EventController@destroy');
    Route::get('/Event/{id}/edit', 'EventController@edit');
    Route::post('/Event/{id}/update', 'EventController@update');

// Admin Student section routes
Route::get('/Students','StudentsController@index');
Route::get('/Student/{id}/edit','StudentsController@edit');
Route::post('/Student/{id}/update','StudentsController@update');
Route::post('/Student/{id}/delete','StudentsController@destroy');
Route::post('/Student/{id}/block','StudentsController@block');
Route::get('/Student/{id}/unblock','StudentsController@unblock');

Route::get('/Notices','NoticeController@index');
Route::post('/Notices','NoticeController@store');
Route::get('/Notices/all','NoticeController@all');
Route::get('/Notices/{id}/edit','NoticeController@edit');
Route::post('/Notices/{id}/update','NoticeController@update');
Route::get('/Notices/{id}/delete','NoticeController@destroy');
//Admin  Alumni section routing
Route::get('/Alumni','AlumController@index');
Route::get('/Alumni/{id}/edit','AlumController@edit');
Route::post('/Alumni/{id}/update','AlumController@update');
Route::post('/Alumni/{id}/delete','AlumController@destroy');
//Admin staff section
Route::get('/Staff','StaffController@index');
Route::post('/Staff/create','StaffController@create');
Route::get('/Staff/{id}/edit','StaffController@edit');
Route::get('/Staff/{id}/delete','StaffController@destroy');
Route::post('/Staff/{id}/update','StaffController@update');
Route::get('/admin-dashboard/{id}/profile','StaffController@profile');
// Routes for user view events
Route::get('/event-details/{id}','PagesController@viewevent');
//  Routes for notices page
Route::get('/news','PagesController@news');
Route::get('/news-details/{id}','PagesController@newsdetails');
Route::get('/communications','CommunicationController@index');

Route::get('/testimonial','TestimonialController@index');
Route::get('/testimonials','TestimonialController@testimonials');
Route::post('/Create/testimonial','TestimonialController@store');

Route::get('/student-dashboard/{id}/edit','StudentsController@editview');
Route::get('/student-dashboard/student-donate','StudentsController@donate');
Route::post('/student-dashboard/{id}/update','StudentsController@updateprofile');
Route::get('/student-dashboard/alumni','StudentsController@all_alumni');
Route::get('/student-dashboard/alumni/{id}/profile','QustionController@index');
Route::post('/Qustions/{id}/create','QustionController@store');

//routes for communication
Route::get('chat','CommunicationController@chat');
Route::post('send','CommunicationController@send');
Route::post('saveToSession','CommunicationController@saveToSession');
Route::get('deleteSession','CommunicationController@deleteSession');
Route::post('getOldMessage','CommunicationController@getOldMessage');
Route::post('/alumni-Donate/donate-paypal','AlumniController@paypal');
Route::get('/alumni-Donate/success','AlumniController@success');
Route::get('/alumni-Donate/cancel','AlumniController@cancel');
Route::get('alumni-Donate/downloadPDF','AlumniController@downloadPDF');

Route::post('ipn/notify','PayPalController@postNotify');
Route::get('check',function(){
    return session('chat');
});

//Route::fallback(function () {
//    return view('pages.404');
//});
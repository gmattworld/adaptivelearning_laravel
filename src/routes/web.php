<?php

// Public Pages
Route::get('/','HomeController@index')->name('home');
Route::get('/about','HomeController@about')->name('about');
Route::get('/news','HomeController@blogs')->name('blogs');
Route::get('/courses','HomeController@courses')->name('courses');
Route::get('/courses/{id}','HomeController@course')->name('course');
Route::get('/news/{id}','HomeController@blog')->name('blog');
Route::get('/contact','HomeController@contact')->name('contact');

Route::get('/payment','HomeController@payment')->name('payment');
Route::get('/paymentreport','PaymentController@handleGatewayCallback')->name('paymentreport');





Route::post('/SendMessage','HomeController@SaveContact')->name('SendMessage');


// Others
Route::redirect('/register', '/login');
Route::redirect('/account', '/login');
Route::redirect('/admin', '/admin/dashboard');
Route::redirect('/home', '/admin/dashboard');
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');

// Route::prefix('admin')->group(function () {
Route::middleware(['auth'])->prefix('admin')->group(function () {
    // Route::redirect('/', '/dashboard');
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('/profile', 'UsersController@profile');
    Route::get('/dockets', 'CasesController@dockets');
    Route::get('/changepwd', 'UsersController@ChangePwd');
    Route::post('/ChangePassword', 'UsersController@ChangePassword');

    // Update Status
    Route::get('/users/{id}/status', 'UsersController@status');
    Route::get('/users/{id}/resetpassword', 'UsersController@ResetPassword');
    Route::get('/usertypes/{id}/status', 'UserTypeController@status');

    Route::get('/categories/{id}/status', 'CategoryController@status');
    Route::get('/departments/{id}/status', 'DepartmentController@status');

    Route::get('/archives/{id}/status', 'ArchiveController@status');
    Route::get('/cases/{id}/status', 'CasesController@status');
    Route::get('/clients/{id}/status', 'ClientController@status');
    Route::get('/courts/{id}/status', 'CourtController@status');
    Route::get('/courtcases/{id}/status', 'CourtCaseController@status');
    Route::get('/courtrooms/{id}/status', 'CourtRoomController@status');
    Route::get('/lawyers/{id}/status', 'LawyerController@status');
    Route::get('/lawyers/{id}/judgestatus', 'LawyerController@judgestatus');
    Route::get('/judges', 'LawyerController@judges');
    Route::get('/lawyerqualifications/{id}/status', 'LawyerQualificationController@status');
    Route::get('/posts/{id}/status', 'PostController@status');
    Route::get('/qualifications/{id}/status', 'QualificationController@status');
    Route::get('/userroles/{id}/status', 'UserRoleController@status');


    // Resources
    Route::resource('/users', 'UsersController');
    Route::resource('/usertypes', 'UserTypeController');
    Route::resource('/categories', 'CategoryController');
    Route::resource('/departments', 'DepartmentController');
    Route::resource('/userroles', 'UserRoleController');
    Route::resource('/archives', 'ArchiveController');
    Route::resource('/cases', 'CasesController');
    Route::resource('/clients', 'ClientController');
    Route::resource('/courts', 'CourtController');
    Route::resource('/courtcases', 'CourtCaseController');
    Route::resource('/courtrooms', 'CourtRoomController');
    Route::resource('/lawyers', 'LawyerController');
    Route::resource('/lawyerqualifications', 'LawyerQualificationController');
    Route::resource('/posts', 'PostController');
    Route::resource('/efilings', 'EfilingController');
    Route::resource('/qualifications', 'QualificationController');
    Route::resource('/userroles', 'UserRoleController');
});



// Authorization
Auth::routes();



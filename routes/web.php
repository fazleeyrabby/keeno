<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// prefix admin
Route::prefix('admin')->group(function (){
    Route::get('/login', 'Auth\AdminLoginController@showLoginform')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});
// admin panel
Route::group(['middleware' => ['auth:admin']], function() {
    Route::prefix('admin')->group(function() {
        Route::get('/', 'AdminController@index')->name('admin.dashbord');
    });
});
// user panel
Route::group(['middleware' => ['auth:web']], function() {
    Route::prefix('home')->group(function() 
    {
        Route::get('/', 'HomeController@index')->name('home');
    });
});
//clear cache
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('route:clear');
    // $exitCode = Artisan::call('optimize');
    $exitCode = Artisan::call('view:clear');
    return '<h1>Clear Config cleared</h1>';
});


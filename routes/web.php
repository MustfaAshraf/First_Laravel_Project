<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Auth::routes();

        Route::get('/', function () {
            return view('welcome');
        })->name("welcome");

        Route::get('/meetings', function () {
            return view('meetings');
        })->name("meetings");

        Route::get('/meeting_details', function () {
            return view('details');
        })->name("meeting_details");


        Route::post('/messages/new', 'MessageController@new')->name('messages.new');

        
        Route::group(["middleware" => "CheckRole"], function () {
            
            Route::get('/home', 'HomeController@index')->name('home');
            Route::get('/create', function () {
                return view('auth.register');
            })->name('users.create');
            
            
            # Users
            
            Route::get('/users/delete/{id}', 'HomeController@delete')->name('users.delete');
            
            Route::post('/users/store', 'HomeController@store')->name('users.store');
            
            Route::get('/users/update/{id}', 'HomeController@edit')->name('users.update');
            Route::post('/users/save', 'HomeController@save')->name('users.save');
            
            # Categories
            
            Route::get('/categories/delete/{id}', 'CategoryController@delete')->name('categories.delete');
            
            Route::post('/categories/store', 'CategoryController@store')->name('categories.store');
            
            Route::get('/categories/update/{id}', 'CategoryController@update')->name('categories.update');
            Route::post('/categories/save', 'CategoryController@save')->name('categories.save');
            
            # Courses
            
            Route::get('/courses/delete/{id}', 'CourseController@delete')->name('courses.delete');
            
            Route::post('/courses/store', 'CourseController@store')->name('courses.store');
            
            Route::get('/courses/update/{id}', 'CourseController@update')->name('courses.update');
            Route::post('/courses/save', 'CourseController@save')->name('courses.save');
            
            # Meetings
            
            Route::get('/meetings/delete/{id}', 'MeetingController@delete')->name('meetings.delete');
            
            Route::post('/meetings/store', 'MeetingController@store')->name('meetings.store');
            
            Route::get('/meetings/update/{id}', 'MeetingController@update')->name('meetings.update');
            Route::post('/meetings/save', 'MeetingController@save')->name('meetings.save');
            
            # Messages
            
            Route::get('/messages/delete/{id}', 'MessageController@delete')->name('messages.delete');
            
            Route::post('/messages/store', 'MessageController@store')->name('messages.store');
            
            Route::get('/messages/update/{id}', 'MessageController@update')->name('messages.update');
            Route::post('/messages/save', 'MessageController@save')->name('messages.save');
        });
    }
);

Route::get('/meeting_details', function () {
    return view('details');
})->name("meeting_details")->middleware('auth');
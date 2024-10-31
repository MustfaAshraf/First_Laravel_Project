<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

# Users

Route::get("/all-users","API\UserController@showAll");  //show all data
Route::get("/user/{id}","API\UserController@show");     //show one record
Route::post("/delete-user","API\UserController@delete");     //delete 
Route::post("/store-user","API\UserController@store");     //create
Route::post("/update-user","API\UserController@update");     //update

# Categories

Route::get("/all-categories","API\CategoryController@showAll");  //show all data
Route::get("/category/{id}","API\CategoryController@show");     //show one record
Route::post("/delete-category","API\CategoryController@delete");     //delete 
Route::post("/store-category","API\CategoryController@store");     //create
Route::post("/update-category","API\CategoryController@update");     //update

# Courses

Route::get("/all-courses","API\CourseController@showAll");  //show all data
Route::get("/course/{id}","API\CourseController@show");     //show one record
Route::post("/delete-course","API\CourseController@delete");     //delete 
Route::post("/store-course","API\CourseController@store");     //create
Route::post("/update-course","API\CourseController@update");     //update

# Meetings

Route::get("/all-meetings","API\MeetingController@showAll");  //show all data
Route::get("/meeting/{id}","API\MeetingController@show");     //show one record
Route::post("/delete-meeting","API\MeetingController@delete");     //delete 
Route::post("/store-meeting","API\MeetingController@store");     //create
Route::post("/update-meeting","API\MeetingController@update");     //update

# Messages

Route::get("/all-messages","API\MessageController@showAll");  //show all data
Route::get("/message/{id}","API\MessageController@show");     //show one record
Route::post("/delete-message","API\MessageController@delete");     //delete 
Route::post("/store-message","API\MessageController@store");     //create
Route::post("/update-message","API\MessageController@update");     //update
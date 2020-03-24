<?php

use Illuminate\Support\Facades\Route;

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
Route::get("/", "MainController@Main");
Route::get("/home", "MainController@Main");
Route::get("/destinations", "DestinationsController@getDestinations");


Route::get("/login", "AuthenticationController@login")->middleware("hideLoginWhenLoggedIn");
Route::post("/login", "AuthenticationController@goLogin");
Route::get("/logout", "AuthenticationController@logout")->middleware("UserLoggedIn");

Route::get("/register", "RegisterController@register")->middleware("hideLoginWhenLoggedIn");
Route::post("/register", "RegisterController@goRegister");

Route::get("/contact","ContactController@contact");
Route::post("/contact","ContactController@goContact");

Route::get("/author","AuthorController@author");
Route::get("/admin","AdminController@admin")->middleware("isAdmin");


Route::get("/admin/idUser/{idUser?}","AdminController@deleteUserId")->middleware("isAdmin");
Route::get("/admin/idDestination/{idDestination?}","AdminController@deleteDestinationId")->middleware("isAdmin");
Route::get("/admin/idQuestion/{idQuestion?}","AdminController@deleteQuestionId")->middleware("isAdmin");
Route::get("/admin/idExperiance/{idExp?}","AdminController@deleteExpId")->middleware("isAdmin");
Route::get("/admin/idActivity/{idActivity?}","AdminController@deleteActivityId")->middleware("isAdmin");
Route::get("/admin/activity/date/{date?}","AdminController@dateOfActivity")->middleware("isAdmin");


Route::get("/admin/insertDestinations","AdminController@insertDestinations")->middleware("isAdmin");
Route::post("/admin/insertDestinations/doInsert","DestinationsController@doInsert")->middleware("isAdmin");
Route::post("/admin/updateDestination/doUpdate","DestinationsController@doUpdateDestination")->middleware("isAdmin");


Route::get("/admin/updateDestinations","AdminController@updateDestinations")->middleware("isAdmin");
Route::get("/admin/updateUsers","AdminController@updateUsers")->middleware("isAdmin");
Route::get("/admin/updateDestinations/destId/{id}","AdminController@displayDestinationId")->middleware("isAdmin");
Route::get("/admin/updateUsers/userId/{id}","AdminController@displayUserId")->middleware("isAdmin");
Route::post("/admin/updateUser/update","AdminController@updateUser")->middleware("isAdmin");

Route::get("/forgetPassword", "AuthenticationController@forgetPassword")->middleware("hideLoginWhenLoggedIn");
Route::post("/resetPassword","AuthenticationController@resetPassword")->middleware("hideLoginWhenLoggedIn");
Route::post("/doResetPass","AuthenticationController@doResetPassword")->middleware("hideLoginWhenLoggedIn");
Route::get("/destinationsFind","DestinationsController@search");
Route::get("oneDestination","DestinationsController@pageOneDestination");

Route::post("/sendExperience","AdminController@authUserExperience");




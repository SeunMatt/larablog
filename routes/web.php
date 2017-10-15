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

Route::group(["prefix" => "admin", "namespace" => "Admin"], function () {

	Route::get("/posts", "PostController@index")->name("admin.posts.index");
	Route::match(["GET", "POST"], "/posts/add", "PostController@add")->name("admin.posts.add");
	Route::match(["GET", "POST"], "/posts/edit/{id?}", "PostController@edit")->name("admin.posts.edit");
	Route::post("/posts/delete", "PostController@delete")->name("admin.posts.delete");

});


Route::group(["namespace" => "Front"], function () {
	Route::get('/', "IndexController@index")->name("front.index");
	Route::get("/about", "IndexController@about")->name("front.about");
	Route::get("/contact", "IndexController@contact")->name("front.contact");

	Route::get('/article/{id}', "PostController@view")->name("front.view");



});



Auth::routes();
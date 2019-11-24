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

Route::get('/', function () {
    return view('welcome');
});

// create some another route.
/*

Route::get('/about', function () {
    return "about page";
});

Route::get('/contact', function () {
    return "contact page";
});

*/
// create an route which takes variable

/*
Route::get('/contact/{id}', function ($id) {
    return "contact page of ".$id;
});
*/

// create an route which takes multiple variable
/*
Route::get('/contact/{id}/{name}', function ($id,$name) {
    return "contact page of ".$id." name is ::" . $name;
});
*/
// naming of a route
/*
Route::get("admin/home/example",array( "as" => 'admin.home' ,function(){
    $url = route('admin.home');
    return $url ;
} ));
*/

// calling a function of a controller .
Route::get('/post','PostsController@index');

//passing data calling a function of a controller .
Route::get('/post/{id}','PostsController@passing');


// Route::get('home/{id}', function ($id) {
//     return view('home',['id'=>$id]);
// });

// name of route , name of controller@ name of function 
// Route::get('home','Home@index');
// Route::get("home/{$id}",'Home@index');

// Route::redirect('here/','/');


// resource method

Route::resource('posts','PostsController');

Route::get('/home/{id}/{name}/{password}','PostsController@showMyView');
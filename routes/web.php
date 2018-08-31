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



Route::get('/check', function () {
    //return view('welcome');
return "ready for the check up";

});



Route::get('/', function () {
    return view('welcome');


});

/*
Route::get('/post/{id}/{name}', function ($id,$name) {
    return "this is post number". " " .$id." ".$name;


});*/

Route::get('/admin/workspace/here',array('as'=>'admin.home' ,function(){
    $url = route('admin.home');
    return "this url is"." ".$url;

}));


/*Route::get('/post/{id}', 'postcontroller@index');*/

//Route::resource('posts','postcontroller');
//Route::get('sub/{class}','postcontroller@sshow');

Route::get('/Contact','postcontroller@contact');


Route::get('/posts/{id}','postcontroller@show_post');


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

// create a rout to load view

Route::get('/',function(){
 return view('address'); 
});

// print hello world direct return variables 
Route::get('/demo',function(){
//print hello world return a direct variables via routing  
$name="Hello world";
return "This will be print $name, Hi i am just load routing";

});

// return html in routing using php variables 

Route::get('/contact-us',function(){

    $name="Brijesh kumar pandey";
    $mob=9998003879;
    $address="150 feet ring road rajkot 360005";
    return "<p>$name <br>  $mob <br> $address </p>";

});

// return a dd() and dump() for laravel debugging

Route::get('/abc',function(){

    $name=["brijesh","rajesh","kumar"];
    dd($name); // print code and stop excecution 

});

// print data in blade via routing 

Route::get('/template',function(){

    $name="Meet kumar pandey";
    return view('about-us',compact('name'));

});

// print data in blade via routing and return a ID 

Route::get('/template/{id}',function($id){

    return view('about-us',compact('id'));

});


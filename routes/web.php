<?php


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\users;
use App\Http\Controllers\laravelDb;
use App\Http\Controllers\AboutController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function(){
    return view('home ');
});

Route::get('/about', function(){
    return view('about');
});

Route::view("contact", 'contact');


//  Route::get("users", "users@index");

// Route::get("users",[users::class,'index']);

// Route::get("/about{name}", function($name){
//     return view("about", ['name'=>$name]);
// });

// Route::view("Users", "Users");


Route::post("person", [UserController::class,'getData']);
Route::view("login","person");
Route::view("bite","bite");
// Route::get('/bite', function (){
//      return('bite');
// });

Route::get("laravel",[laravelDb::class,'index']);
Route::get("nass",[AboutController::class,'index']);





     

    

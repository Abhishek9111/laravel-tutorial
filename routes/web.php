<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demoController;
use App\Http\Controllers\SingleActionController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// // ? indicates optional
// Route::get('/test/{name}/{id?}',function($name,$id=null){
//     // echo "Test route!";
//     // return view('demo');
//     // echo $name;
//     // echo $id;

//     $data = compact('name','id');
//     // print_r($data);

//     return view('demo')->with($data);
// });

// Route::any('/testPost',function(){
//     echo('Test post route');
// });


// Route::get('/{name?}',function($name = null){
//     $demo= "<h2>Abhishek</h2>";
//     $data=compact('name','demo');
//     return view('home')->with($data);
// });


// Route::get('/',[demoController::class,'index']);
// Route::get('/','App\Http\Controllers\demoController@index');

Route::get('/',SingleActionController::class);


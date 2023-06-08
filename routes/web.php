<?php

use App\Http\Controllers\ViewController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ViewController::class, 'prakash']);
Route::get('/todolist', [ViewController::class,'todolist']);



// Route::get('/nikash', function () {
//     return view('nikash');
    
// });
Route::get('/nikash',[ViewController::class, 'nikash']);

Route::get('/firstView',[ViewController::class,'firstView']);

Route::get('/firstView',[ViewController::class,'todolist']);

Route::get("/about",function(){
    return view("about");
});

Route::get('/news', [ViewController::class, 'news']);
<?php

use App\Http\Controllers\Main_Controller;
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

Route::get('/{path}', function(){
    return view ('main');
})->where( 'path', "([A-z\d\-/_.]+)?" );

// Route::get('/blank', [Main_Controller::class, 'blank']);
// Route::get('/home', [Main_Controller::class, 'index']);
// Route::get('/about', [Main_Controller::class, 'about']);
// Route::get('/contact', [Main_Controller::class, 'contact']);
// Route::get('/list', [Main_Controller::class, 'list']);
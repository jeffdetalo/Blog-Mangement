<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WriterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::post("writer/update/{id}",[WriterController::class,'update']);
// Route::get("writer/addwriter",[WriterController::class, 'addwriter']);
Route::get("getWriter",[WriterController::class, 'index']);
Route::post("addWriter",[WriterController::class, 'create']);
Route::put("updateWriter/{id}",[WriterController::class,'update']);
Route::get("showWriter/{id}",[WriterController::class, 'show']);
Route::delete("deleteWriter/{id}", [WriterController::class, 'delete']);
 

Route::get("getPost",[PostController::class, 'index']);
Route::post("addPost/{id}/{category_id}",[PostController::class, 'create']);
Route::put("updatePost/{post_id}",[PostController::class, 'update']);
Route::get("showPost/{id}",[PostController::class, 'show']);
Route::delete("deletePost/{post_id}",[PostController::class, 'delete']);

Route::get("getComment",[CommentController::class, 'index']);
Route::post("addComment/{id}",[CommentController::class, 'create']);
Route::get("showComment/{id}",[CommentController::class, 'show']);
Route::put("updateComment/{comment_id}",[CommentController::class, 'update']);
Route::delete("deleteComment/{comment_id}",[CommentController::class, 'delete']);
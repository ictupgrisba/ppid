<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/posts', function (){

    $postRepository = new \App\Repositories\PostRepository();
    $collection = $postRepository->listOfSpotlightPublishedNews();
    return $collection->map(function ($item){
        return new \App\Http\Resources\PostResource($item);
    });
    // return response($collection, 200)->header('Content-Type', 'application/json');
});

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('test9', function (Request $request){
    return response()->json(['message' => 'API route accessed successfully9']);
});

Route::get('test8', function (Request $request){
    return response()->json(['message' => 'API route accessed successfully8']);
});

Route::get('test7', function (Request $request){
    return response()->json(['message' => 'API route accessed successfully7']);
});

Route::get('test6', function (Request $request){
    return response()->json(['message' => 'API route accessed successfully6']);
});

Route::get('test', function (Request $request){
    return response()->json(['message' => 'API route accessed successfully']);
});

Route::get('test2', function (Request $request){
    return response()->json(['message' => 'API route accessed successfully2']);
});

Route::get('test3', function (Request $request){
    return response()->json(['message' => 'API route accessed successfully3']);
});

Route::get('test4', function (Request $request){
    return response()->json(['message' => 'API route accessed successfully4']);
});

Route::get('test5', function (Request $request){
    return response()->json(['message' => 'API route accessed successfully5']);
});

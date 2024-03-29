<?php

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

require_once 'api/author.php';
Route::get('/test', function (Request $request) {
    return 'Authenticated';
});

Route::middleware('auth:api')->prefix('v1')->group(function () {
    Route::get('/user', function(Request $request) {
        return $request->user();
    });
});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


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


/*
 * User auth routers
 */

Route::prefix("/auth")->group(function () {

    // register
    Route::get("/register", function () {
        return view("auth.register");
    });

});

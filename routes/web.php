<?php

use Illuminate\Support\Facades\Route;
use App\Events\UserShout;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usershout', function(){
    return view('usershout');
});

Route::post('/usershout', function(){
    
    $name = request()->name;
    event(new UserShout($name)); 

});
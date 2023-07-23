<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demoController;


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

Route::get('/', function () {
    return view('welcome');
});
 Route::resource('demo',demoController::class);
 Route::redirect('demo', 'demo/create');
 Route::view('demo/create','create',['name' => 'safir']);
 Route::get('demo/{id}',function( $id1){
    dd('demo'.$id);
 });
 Route::get('demo/{name?}', function (string $name = null) {
    return $name;
});
Route::get('demo/{name?}', function (string $name = 'safir') {
    return $name;
});
 
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/hello/{name}', function() {
    return view('hello', [
        'name' => request('name'),
    ]);
});

Route::get('/signup', function() {
   return view('signup');
});

Route::post('/signup', function() {
    $user = new App\Models\Users();
    $user->email = request('email');
    $user->password = bcrypt(request('password'));

    $user->save();

    return "Form received, your email is " . request('email') . " and your password is " . request('password');
});

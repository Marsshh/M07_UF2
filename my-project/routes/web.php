<?php

use App\Http\Controllers\SignController;
use Illuminate\Support\Facades\Route;

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

Route::get('/sign/signin/{p1}/{p2}/{p3}/{p4}',[SignController::class, 'signin']); 
Route::get('/sign/signout/{p1}/{p2}/{p3}',[SignController::class, 'signout']); 




Route::get('/error', [SignController::class, 'showError'])->name('name_error');

Route::post('/login', [SignController::class, 'login'])-> middleware('email') ;

// Route::post('/login', function() {
//     $email = 'arnau@iticbcn.cat';
//     return view('mostrar.grans')->with('variable', 'hola');
// })->name ('login');







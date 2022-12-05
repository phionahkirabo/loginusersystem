<?php
 use App\Http\Controllers\userloginAuthController;
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
route::get('/login',[userloginAuthController::class,'login']);
route::get('/registration',[userloginAuthController::class,'registration']);
route::post('/register-user',[userloginAuthController::class,'registerUser']) ->name('register-user');
route::post('/loginuser',[userloginAuthController::class,'loginUser']) ->name('login-user');
route::get('/logout',[userloginAuthController::class,'logout']);

<?php
 use App\Http\Controllers\userloginAuthController;
 use App\Http\Controllers\blogpostController;
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
 route::post('/addblog',[blogpostController::class,'blog'])->name('add_blog');
route::get('/view_blog/{id}',[blogpostController::class,'viewBlogs'])->name('viewblogs');
route::get('/view_my_blog/{id}',[blogpostController::class,'viewmyblog']);
// route::post('/register-user',[userloginAuthController::class,'registerUser']) ->name('register-user');
// route::post('/loginuser',[userloginAuthController::class,'loginUser']) ->name('login-user');
 route::get('/home',[userloginAuthController::class,'users']);
 //route::get('/home',[userloginAuthController::class,'users']);
 route::get('/viewuserblog',[userloginAuthController::class,'viewuserblog']);
 Route::get('/add_blogs', function () {
  return view('auth.add_blog'); })->name('add');
// Route::get('test/{email}',[userloginAuthController::class,'viewblog'] );
// Route::get('/showUsers',[blogpostControllerr::class,'showUsers']);
 Route::post('/edit_blog/{id}',[blogpostController::class,'editmyblog'])->name('editblog');
 Route::post('update-blog/{id}',[blogpostController::class,'updateblog']);
// Route::get('/showUser/{id}',[blogpostController::class,'showUser']);
// Route::delete('/delete/User/{id}',[blogpostController::class,'deleteUser']);



//Route::post('/logout', function () {
//     return view('auth.logout');
// });
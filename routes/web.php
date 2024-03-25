<?php

use App\Http\Controllers\albumController;
use App\Http\Controllers\galleryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

use App\Http\Controllers\userController;
use App\Models\gallery;

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
route::get('/register',function (){ return view('register');});
route::post('/create',[userController::class , 'store']);


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::middleware(['auth'])->group(function () {

route::get('/dashboard', function (){return view('dashboard');});
route::get('/dashboard', [userController::class , 'show']);
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

route::get('/addAlbum', function (){return view('addAlbum');});
route::post('/addAlbum',[albumController::class,'store'])->name('addAlbum');

route::get('/albumUpdate/{id}', function (){return view('updateAlbum');});
route::get('/albumUpdate/{id}',[albumController::class,'edit']);



route::get('/viewAlbum', function (){return view('viewAlbum');});
route::get('/viewAlbum',[albumController::class,'show'])->name('viewAlbum');



route::post('/updateAlbum/{id}',[albumController::class,'update']);
route::get('/deleteAlbum/{id}',[albumController::class,'destroy']);
route::get('/addGallery/{id}', function (){return view('addGallery');});
route::get('/addGallery/{id}',[albumController::class,'addGallery']);

route::get('/albumView/{id}', function (){return view('viewGallery');});
route::get('/albumView/{id}', [galleryController::class,'show'])->name('show');


route::post('/createGalley/{id}',[galleryController::class,'store']);

route::get('/deleteGallery/{id}',[galleryController::class,'destroy']);
route::post('/updataName/{id}',[galleryController::class,'update']);





});

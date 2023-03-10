<?php

use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

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

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('wizard',[AuthController::class, 'default'])->name('default');
Route::get('show',[AuthController::class, 'show'])->name('blog.show');


//Route::get('show/{post}/edit',[AuthController::class, 'edit'])->middleware('blog.show');

//Route::view('show', 'blog.show',['name'=>'Code with', 'amount'=>'Sina', 'status'=>'Hello', 'description'=>'World', 'stock'=>'Ome']);



//Route::get('wizards', function () {
//    return view('livewire.wizard');
//});
//

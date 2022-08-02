<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Basecontroller;
use App\Http\Controllers\Admincotroller;
use App\Http\Controllers\Pagecontroller;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\Contactcontrol;
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

Route::get('/home', [Basecontroller::class,'home']);
Route::get('/services', [Basecontroller::class,'services']);
Route::get('/company', [Basecontroller::class,'company']);
Route::get('/contact_us', [Basecontroller::class,'contact_us']);
Route::post('/contact-add', [Contactcontrol::class,'contact_store'])->name('contact.store');

Route::get('/admin', [Admincotroller::class,'index'])->name('login');
Route::post('/admin', [Admincotroller::class,'makeLogin']);


Route::group(['middleware' =>'auth:admin'],function(){
	Route::get('/dashbord', [Admincotroller::class,'dashbord']);
	Route::get('/page-add', [Pagecontroller::class,'AddPage'])->name('page-add');
	Route::get('/company-page-add', [Pagecontroller::class,'ourcompany'])->name('company.page.add');
	
	Route::post('/page-create', [Pagecontroller::class,'CreatePage'])->name('page-create');

	//post routes
	Route::get('/post-show', [Postcontroller::class,'show'])->name('post-show');
	Route::get('/post-add', [Postcontroller::class,'create'])->name('post-add');
	Route::get('/post-edit/{post_id?}', [Postcontroller::class,'create'])->name('post-edit');
	Route::post('/post-add/{post_id?}', [Postcontroller::class,'store'])->name('post-store');
	Route::post('/post-delete', [Postcontroller::class,'delete'])->name('post-delete');

	Route::get('/contact-show', [Contactcontrol::class,'show'])->name('admin.contact.show');
});
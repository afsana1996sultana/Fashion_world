<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admins\UserController;
use App\Http\Controllers\Admins\NewsletterController;
use App\Http\Controllers\Admins\StatusController;
use App\Http\Controllers\Admins\CategoryController;
use App\Http\Controllers\Admins\SubcategoryController;
use App\Http\Controllers\Admins\ChildcategoryController;
use App\Http\Controllers\Admins\QuicklinkController;
use App\Http\Controllers\Admins\SociallinkController;
use Illuminate\Support\Facades\Auth;








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
//Frontend


Route::get('home', function(){
    return redirect('/');
});

Route::get('/', [App\Http\Controllers\FrontendController::class, 'home'])->name('home');

Route::get('home', [App\Http\Controllers\FrontendController::class, 'home'])->name('home');


////////////////////Newsletter-Post/////////////////////////
Route::post('newsletter_store',[NewsletterController::class,'store' ])->name('newsletter_store');


Route::get('admin', function(){
    return redirect('login');
});

Auth::routes();



Route::group(['middleware' =>  'auth'], function() {
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');



////////////////////Newsletter/////////////////////////
Route::resource('newsletter', App\Http\Controllers\Admins\NewsletterController::class);
Route::get('show-newsletter/{id}',[NewsletterController::class,'show' ]);
Route::delete('delete-newsletter',[NewsletterController::class,'destroy' ]);


///////////////////////Status/////////////////////////////////
Route::resource('status', App\Http\Controllers\Admins\StatusController::class);
Route::get('edit-status/{id}', [StatusController::class, 'edit']);
Route::put('status-update', [StatusController::class, 'update']);
Route::delete('delete-status', [StatusController::class, 'destroy']);



// ////////////////////Category/////////////////////////////////
Route::resource('category', App\Http\Controllers\Admins\CategoryController::class);
Route::get('edit-category/{id}', [CategoryController::class, 'edit']);
Route::put('category-update', [CategoryController::class, 'update']);
Route::delete('delete-category', [CategoryController::class, 'destroy']);



// ////////////////////Sub-Category/////////////////////////////////
Route::resource('sub-category', App\Http\Controllers\Admins\SubcategoryController::class);
Route::get('edit-sub-category/{id}', [SubcategoryController::class, 'edit']);
Route::put('sub-category-update', [SubcategoryController::class, 'update']);
Route::delete('delete-sub-category', [SubcategoryController::class, 'destroy']);



// ////////////////////Child-Category/////////////////////////////////
Route::resource('child-category', App\Http\Controllers\Admins\ChildcategoryController::class);
Route::get('edit-child-category/{id}', [ChildcategoryController::class, 'edit']);
Route::put('child-category-update', [ChildcategoryController::class, 'update']);
Route::delete('delete-child-category', [ChildcategoryController::class, 'destroy']);



////////////////////Footer/////////////////////////////////
Route::resource('footer', App\Http\Controllers\Admins\FooterController::class);


////////////////////Topbar/////////////////////////////////
Route::resource('topbar', App\Http\Controllers\Admins\TopbarController::class);


//////////////////////Sociallinks/////////////////////////////////
Route::resource('social-link', App\Http\Controllers\Admins\SociallinkController::class);
Route::get('edit-social-link/{id}', [SociallinkController::class, 'edit']);
Route::put('social-link-update', [SociallinkController::class, 'update']);
Route::delete('delete-social-link', [SociallinkController::class, 'destroy']);


// ////////////////////QuickLinks/////////////////////////////////
Route::resource('quick-link', App\Http\Controllers\Admins\QuicklinkController::class);
Route::get('edit-quick-link/{id}', [QuicklinkController::class, 'edit']);
Route::put('quick-link-update', [QuicklinkController::class, 'update']);
Route::delete('delete-quick-link', [QuicklinkController::class, 'destroy']);


////////////////////User/////////////////////////
Route::resource('users', UserController::class);
Route::get('edit-users/{id}',[UserController::class,'edit' ]);
Route::put('users-update',[UserController::class,'update' ]);
Route::get('show-users/{id}',[UserController::class,'show' ]);
Route::delete('delete-users',[UserController::class,'destroy' ]);


});
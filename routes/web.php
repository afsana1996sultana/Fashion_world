<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admins\UserController;
use App\Http\Controllers\Admins\NewsletterController;
use App\Http\Controllers\Admins\StatusController;
use App\Http\Controllers\Admins\BrandController;
use App\Http\Controllers\Admins\UnitController;
use App\Http\Controllers\Admins\ProductController;
use App\Http\Controllers\Admins\CategoryController;
use App\Http\Controllers\Admins\SubcategoryController;
use App\Http\Controllers\Admins\ChildcategoryController;
use App\Http\Controllers\Admins\QuicklinkController;
use App\Http\Controllers\Admins\SociallinkController;
use App\Http\Controllers\Admins\PartnerController;
use App\Http\Controllers\Admins\TeamController;
use App\Http\Controllers\Frontend\AboutusController;
use App\Http\Controllers\Frontend\OurteamController;
use App\Http\Controllers\Frontend\MissionvissionController;
use App\Http\Controllers\Frontend\CorevalueController;
use App\Http\Controllers\Frontend\CompanyflowchartController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\ChooseusController;
use App\Http\Controllers\Frontend\OurclientController;
use App\Http\Controllers\Frontend\ContactusController;
use App\Http\Controllers\Frontend\ProductchildcategoryController;
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


////////////////////About-Us/////////////////////////
Route::get('/about-us',[AboutusController::class,'index' ]);


////////////////////Our-Team/////////////////////////
Route::get('/our-team',[OurteamController::class,'index' ]);


////////////////////Mission-Vission/////////////////////////
Route::get('/mission-vission',[MissionvissionController::class,'index' ]);


////////////////////Core-Values/////////////////////////
Route::get('/core-values',[CorevalueController::class,'index' ]);


////////////////////Company-flowchart/////////////////////////
Route::get('/company-flowchart',[CompanyflowchartController::class,'index' ]);


////////////////////Service/////////////////////////
Route::get('/services',[ServiceController::class,'index' ]);


////////////////////Why-Choose-Us/////////////////////////
Route::get('/why-choose-us',[ChooseusController::class,'index' ]);


////////////////////Our-Client/////////////////////////
Route::get('/our-clients',[OurclientController::class,'index' ]);


////////////////////Contact-us/////////////////////////
Route::get('/contact',[ContactusController::class,'index' ]);


////////////////////Product-Child-Category/////////////////////////
Route::get('product_child_category/{slug}', [ProductchildcategoryController::class, 'product_child_category']);


Route::get('for-sub-cat', [ProductController::class, 'showSubCat'])->name('for-sub-cat');
Route::get('for-child-cat', [ProductController::class, 'showChildCat'])->name('for-child-cat');

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


// ////////////////////Brands/////////////////////////////////
Route::resource('brands', App\Http\Controllers\Admins\BrandController::class);
Route::get('edit-brands/{id}', [BrandController::class, 'edit']);
Route::put('brands-update', [BrandController::class, 'update']);
Route::delete('delete-brands', [BrandController::class, 'destroy']);


// ////////////////////Unit/////////////////////////////////
Route::resource('units', App\Http\Controllers\Admins\UnitController::class);
Route::get('edit-units/{id}', [UnitController::class, 'edit']);
Route::put('units-update', [UnitController::class, 'update']);
Route::delete('delete-units', [UnitController::class, 'destroy']);


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


///////////////////////Product/////////////////////////////////
Route::resource('products', App\Http\Controllers\Admins\ProductController::class);
Route::delete('delete-products', [ProductController::class, 'destroy']);


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


// ////////////////////Our-Partners/////////////////////////////////
Route::resource('partners', App\Http\Controllers\Admins\PartnerController::class);
Route::get('edit-partners/{id}', [PartnerController::class, 'edit']);
Route::put('partners-update', [PartnerController::class, 'update']);
Route::delete('delete-partners', [PartnerController::class, 'destroy']);


// ////////////////////Our-Team/////////////////////////////////
Route::resource('team', App\Http\Controllers\Admins\TeamController::class);
Route::get('edit-team/{id}', [TeamController::class, 'edit']);
Route::put('team-update', [TeamController::class, 'update']);
Route::delete('delete-team', [TeamController::class, 'destroy']);


////////////////////User/////////////////////////
Route::resource('users', UserController::class);
Route::get('edit-users/{id}',[UserController::class,'edit' ]);
Route::put('users-update',[UserController::class,'update' ]);
Route::get('show-users/{id}',[UserController::class,'show' ]);
Route::delete('delete-users',[UserController::class,'destroy' ]);


});
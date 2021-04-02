<?php
use App\Http\Controllers\NewsController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Auth;
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



Route::group([
    "as" => "admin.",
    "middleware"=>"admin",
    "prefix" => "/admin"
], function (){


        Route::get('/', [App\Http\Controllers\HomeController::class, 'store'])->name('index');
        Route::delete('/index/{id}', [App\Http\Controllers\HomeController::class, 'destroy']);
    Route::get('/edit/password/', [App\Http\Controllers\AdminController::class, 'passwordEdit'])->name('password.edit');
    Route::post('/edit/password/', [App\Http\Controllers\AdminController::class, 'passwordUpdate'])->name('password.update');

    //news

    Route::prefix('news')->group(function (){
        Route::get('/', [NewsController::class, 'index' ])->name('news');
        Route::get('/{id}', [NewsController::class, 'show' ])->name('newShow');
        Route::delete('/{id}', [NewsController::class, 'destroy' ])->name('newInsert');

        Route::post('/', [NewsController::class,'store' ])->name('newInsert');
        Route::put('/', [NewsController::class, 'update' ])->name('newUpdate');


    });



    //brand
    Route::prefix('brand')->group(function (){
        Route::get('/', [BrandController::class, 'index' ])->name('brands');
        Route::get('/{id}', [BrandController::class, 'show' ])->name('brandShow');
        Route::delete('/{id}', [BrandController::class, 'destroy' ])->name('brandInsert');

        Route::post('/', [BrandController::class, 'store' ])->name('brandInsert');
        Route::put('/', [BrandController::class, 'update' ])->name('brandUpdate');


    });

    //category
    Route::prefix('category')->group(function (){
        Route::get('/', [CategoryController::class, 'index'])->name('categories');
        Route::get('/{id}', [CategoryController::class, 'show' ])->name('categoryShow');
        Route::delete('/{id}', [CategoryController::class, 'destroy' ])->name('categoryInsert');

        Route::post('/', [CategoryController::class, 'store'])->name('categoryInsert');
        Route::put('/',[ CategoryController::class, 'update'])->name('categoryUpdate');


    });

    //item
    Route::prefix('item')->group(function (){
        Route::get('/', [ItemController::class, 'index'])->name('items');
        Route::get('/{id}', [ItemController::class, 'show' ])->name('itemShow');
        Route::delete('/{id}', [ItemController::class, 'destroy' ])->name('itemInsert');

        Route::post('/', [ItemController::class, 'store'])->name('itemInsert');
        Route::put('/{id}',[ ItemController::class, 'update'])->name('itemUpdate');

    });
   });
Route::get('locale/{locale}', [\App\Http\Controllers\MainController::class,'changeLocale'])->name('locale');

Route::middleware(['set_locale'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/itemDetails/{id}', [\App\Http\Controllers\ItemDetailsController::class, 'show'])->name('itemDetails');
    Route::get('/news', [App\Http\Controllers\HomeController::class, 'show'])->name('news');
    Route::get('/newsDetails/{id}', [\App\Http\Controllers\NewsDetailsController::class, 'show'])->name('newsDetails');
    Route::post('item/cart/add', [ItemController::class, 'addToCart']);
    Route::get('item/category/{id}', [CategoryController::class, 'getItemsByCategory']);
    Route::post('item/search', [ItemController::class, 'search']);

    Route::get('/updated-activity', [\App\Http\Controllers\TelegramController::class, 'updatedActivity']);
    Route::get('/telegram', [\App\Http\Controllers\TelegramController::class, 'sendMessage'])->name('teleg');
    Route::post('/send-message', [\App\Http\Controllers\TelegramController::class, 'storeMessage']);
    Route::post('/store-photo', [\App\Http\Controllers\TelegramController::class, 'storePhoto']);


    Auth::routes();


    Route::get('/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
    Route::post('/edit', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
    Route::get('/edit/password/', [App\Http\Controllers\UserController::class, 'passwordEdit'])->name('password.edit');
    Route::post('/edit/password/', [App\Http\Controllers\UserController::class, 'passwordUpdate'])->name('password.update');


});
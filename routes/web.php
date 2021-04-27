<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
//    return view('welcome');
    return redirect()->route('products.get.view');
});



//Route::resource('products', ProductController::class);

Route::group(['middleware' => ['web']], function (){
    Route::get('view/crud',[CrudController::class,'view'])->name('products.get.view');
    Route::get('new/crud',[CrudController::class,'new'])->name('products.get.new');
    Route::post('saveProduct/crud',[CrudController::class,'saveProduct'])->name('products.post.insert');
    Route::get('show/crud/{product}',[CrudController::class,'showProduct'])->name('products.get.show');
    Route::get('edit/crud/{product}',[CrudController::class,'editProduct'])->name('products.get.edit');
    Route::post('updateProduct/crud',[CrudController::class,'updateProduct'])->name('products.post.update');
    Route::post('deleteProduct/crud/{product}',[CrudController::class,'deleteProduct'])->name('products.post.delete');
});

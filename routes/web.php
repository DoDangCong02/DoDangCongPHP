<?php

use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    $html = "<h1> WELCOME TO HANOI </h1>";
    return $html;
});
Route::get(
    '/greeting', function(){
        return view('greeting', ['name' => 'James']);
    }
);
Route::get(
    '/product', 'app\Http\Controllers\ProductController@index'
);
Route::get(
    '/login', 'app\Http\Controllers\ProductController@login'
);
Route::get(
    '/getProducts', 'App\Http\Controllers\ProductController@getProducts'   
);
Route::get(
    'getProductsbyBand',
    'app\Http\Controllers\ProductController@getProductsbyBand'
)
    ->name('admin.product.getProductsByBand');
Route::get(
    'updateProduct/(pid)',
    'app\Http\Controllers\ProductController@editProduct'
);
Route::post(
    'updateProduct/(pid)',
    'app\Http\Controllers\ProductController@updateProduct'
);
Route::group(['prefix' => 'admin'], function(){
    Route::group(['prefix' => 'product'], function(){
    });
    Route::group(['prefix' => 'customer'], function(){
    });
});
Route::get(
    'deleteProduct/(pid)',
    'app\Http\Controllers\ProductController@deleteProduct'
);
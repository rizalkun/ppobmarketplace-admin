<?php

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
    return redirect('login');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::prefix('admin')->group(function(){

    Route::get('/dashboard', function () { return view('index'); });

    Route::prefix('product')->group(function(){
        Route::get('category', function() { return view('products.category'); });
        Route::get('category/add', function() { return view('products.categoryAdd'); });
        Route::get('category/edit', function() { return view('products.categoryEdit'); });

        Route::get('level-markup', function() { return view('products.levelMarkup'); });
        Route::get('level-markup/add', function() { return view('products.levelMarkupAdd'); });
        Route::get('level-markup/edit', function() { return view('products.levelMarkupEdit'); });

        Route::get('operator', function() { return view('products.operator'); });
        Route::get('operator/add', function() { return view('products.operatorAdd'); });
        Route::get('operator/edit', function() { return view('products.operatorEdit'); });

        Route::get('list', function() { return view('products.product'); });
        Route::get('list/add', function() { return view('products.productAdd'); });
        Route::get('list/edit', function() { return view('products.productEdit'); });

        Route::get('promo', function() { return view('products.promo'); });
        Route::get('promo/add', function() { return view('products.promoAdd'); });
        Route::get('promo/edit', function() { return view('products.promoEdit'); });
    });

    Route::prefix('transaction')->group(function(){
        Route::get('deposit', function() { return view('transactions.deposit'); });
        Route::get('ppob', function() { return view('transactions.ppob'); });
        Route::get('history', function() { return view('transactions.transaction'); });
    });

    Route::get('/mitra/list', function () { return view('mitra.index'); });

    Route::prefix('report')->group(function(){
        Route::get('balance-in', function() { return view('report.balanceIn'); });
        Route::get('balance-out', function() { return view('report.balanceOut'); });
        Route::get('laba', function() { return view('report.laba'); });
        Route::get('commission', function() { return view('report.commission'); });
    });

    Route::prefix('user')->group(function(){
        Route::get('list', function() { return view('user.index'); });
        Route::get('kyc', function() { return view('user.kyc'); });
    });

    Route::prefix('user-management')->group(function(){
        Route::get('user', function() { return view('report.index'); });
        Route::get('role', function() { return view('report.role'); });
        Route::get('permission', function() { return view('report.permission'); });
    });

    Route::prefix('setting')->group(function(){
        Route::get('profile', function() { return view('setting.profile'); });
        Route::get('password', function() { return view('setting.password'); });
    });
});

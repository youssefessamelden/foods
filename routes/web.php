<?php

use App\Http\Controllers\bookcontroller;
use App\Http\Controllers\FoodsController;
use App\Http\Controllers\googlecontroller;
use App\Http\Controllers\ViewuserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('abut');
})->name('about');

Route::get('/book', function () {
    return view('book');
})->name('book');

Auth::routes();

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if (auth()->user()->role == 'admin') {
            return view('adminpanel.admin');
        } else {
            return view('home');
        }
    })->name('dashboard');
});

route::get('menu', [FoodsController::class, 'showmenu'])->name('menu');
route::get('menu/breakfast', [FoodsController::class, 'breakfast'])->name('breakfast');
route::get('menu/maindishes', [FoodsController::class, 'maindishes'])->name('main');
route::get('menu/drinks', [FoodsController::class, 'drinks'])->name('drinks');
route::get('menu/dessert', [FoodsController::class, 'dessert'])->name('dessert');



route::middleware(['adminmid'])->group(function () {
    route::get('admin', function () {
        return view('adminpanel.admin');
    });
    route::get('add', [FoodsController::class, 'addfoodsview'])->name('addfoodsview');
    route::post('submitfoods', [FoodsController::class, 'addfoods'])->name('addfoods');
    route::get('foods', [FoodsController::class, 'showfoods'])->name('showfoods');
    route::get('update/{id}', [FoodsController::class, 'update'])->name('update');
    route::post('updatefoods/{id}', [FoodsController::class, 'updatefoods'])->name('updatefoods');
    route::get('delet/{id}', [FoodsController::class, 'delete'])->name('delete');
    route::get('deletall', [FoodsController::class, 'deleteall'])->name('deleteall');

    route::get('viewbooking', [bookcontroller::class, 'viewbooking'])->name('viewbooking');
    route::get('accept/{id}', [bookcontroller::class,'acceptbooking']);
    route::get('reject/{id}', [bookcontroller::class, 'rejectbooking']);

    route::get('viewusers', [ViewuserController::class, 'viewusers'])->name('viewusers');
    route::get('viewusers/{id}', [ViewuserController::class, 'admin'])->name('admin');

});

route::get('mybooking', [bookcontroller::class, 'mybooking'])->name('mybooking');


route::get('mark/{id}', [bookcontroller::class, 'mark'])->name('mark');
route::get('delete/{id}', [bookcontroller::class, 'deletebooking'])->name( 'deletebooking');
route::get('deleteall', [bookcontroller::class, 'deleteallbooking'])->name('deleteallbooking');

route::post('booking', [bookcontroller::class, 'booking'])->name('booking');

Route::get('auth/google', [googlecontroller::class, 'formg'])->name('formg');
Route::get('auth/google/callback', [googlecontroller::class, 'loging'])->name('loging');
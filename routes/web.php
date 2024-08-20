<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Home without login

Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('/products', function () {
    return view('frontend.products');
})->name('products');

Route::get('/product_details', function () {
    return view('frontend.product_details');
})->name('product_details');

Route::get('/cart', function () {
    return view('frontend.cart');
})->name('cart');


Route::get('/cheackout', function () {
    return view('frontend.cheackout');
})->name('cheackout');

// Course route
Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

// Contact route
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

//quick link
Route::get('/faqs', function () {
    return view('frontend.quick_link.faqs');
})->name('faqs');

Route::get('/terms', function () {
    return view('frontend.quick_link.terms');
})->name('terms');




//admin

Route::get('admin/dashboard',[AdminController::class,'index'])
            ->middleware(['auth','admin'])->name('admin.dashboard');










Route::get('/dashboard', function () {
    return view('frontend.after_login.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/showprofile', [ProfileController::class, 'showProfile'])->name('showprofile');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/updateprofile', [ProfileController::class, 'updateProfile'])->name('profile.update');

    Route::get('/courses', function () {
        return view('frontend.after_login.courses');
    })->name('courses');
    
    Route::get('/references', function () {
        return view('frontend.after_login.references');
    })->name('references');
    
    
    Route::get('/product', function () {
        return view('frontend.after_login.product');
    })->name('product');
    
    
    Route::get('/affiliate', function () {
        return view('frontend.after_login.affiliate');
    })->name('affiliate');
    
    
    Route::get('/enroll', function () {
        return view('frontend.after_login.enroll');
    })->name('enroll');
    
    Route::get('/change_password', function () {
        return view('frontend.after_login.change_password');
    })->name('change_password');
    
    Route::get('/withdrawal', function () {
        return view('frontend.after_login.withdrawal');
    })->name('withdrawal');

});













require __DIR__.'/auth.php';

require __DIR__.'/adminauth.php';
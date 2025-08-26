<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;

// Simple routes
Route::get('/contact', function () {
    return view('contact'); // resources/views/contact.blade.php
});

Route::get('/posts', function () {
    return view('posts.home');
});

Route::resource('posts',PostController::class);




Route::prefix('/posts')->group(function () {


    Route::get('/portfolio', function () {
        return view('posts.portfolio'); // resources/views/portfolio.blade.php
    });

    Route::get('/{firstname}/{lastname}', function ($firstname, $lastname) {
        return $firstname . " " . $lastname;
    });

    Route::get('/company', function () {
        return view('posts.company'); // resources/views/company.blade.php
    });

    Route::get('/organization', function () {
        return view('posts.organization'); // resources/views/organization.blade.php
    });

});




// Named route
Route::get('/test', function () {
    return "This is a test!";
})->name("testpage");

// POST route (form submission)
Route::post('/formsubmitted', function (Request $request) {

    $request->validate([
        'fullname' => 'required|min:3|max:30',
        'email'    => 'required|min:3|max:30|email',
        'age'      => 'required'
    ]);

    $fullname = $request->input("fullname");
    $email    = $request->input("email");
    $age      = $request->input("age");

    return "Your Fullname is $fullname, age $age and your email is $email!";
    
})->name("formsubmitted");

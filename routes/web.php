<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/contact', function(){
    return view('contact');
});
Route::get('/', function () {
    return view('home');
});




Route::prefix('portfolio')->group(function() {


    Route::get('/', function() {
        return view ('portfolio');
    });

    Route::get('/{firstname}/{lastname}',function($firstname,$lastname){
    return $firstname . " "  . $lastname;
    });

    Route::get('/company', function() {
        return view('company');
    });
    Route::get('/organization', function() {
        return view('organization');
    });

    
});




// Named routes
Route::get('/test',function(){
    return "This is a test!";
})->name("testpage");



// POST ROUTE 
Route::post("/formsubmitted",function(Request $request){

    $request->validate([
        'fullname' => 'required|min:3|max:30',
        'email' => 'required|min:3|max:30|email'
    ]);
    
    $fullname = $request->input("fullname");
    $email = $request->input("email");

    return "Your Fullname is $fullname, and your email is $email!";
    
})->name("formsubmitted");





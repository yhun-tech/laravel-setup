<?php

use Illuminate\Support\Facades\Route;



Route::get('/contact', function(){
    return view('contact');
});

Route::get('/', function () {
    return view('home');
});

// parameters using routes
// Route::get('/portfolio/{firstname}/{lastname}',function($firstname,$lastname){
//     return $firstname . " "  . $lastname;
// });


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



// Organization




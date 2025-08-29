<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index'])->name('posts.home');
Route::get('/contact', fn() => view('contact'));


Route::prefix('/posts')->group(function () {


    Route::get('/portfolio', fn() => view('posts.portfolio'));
    Route::get('/company', fn() => view('posts.company'));
    Route::get('/organization', fn() => view('posts.organization'));
    
});


Route::get('/test', fn() => "This is a test!")->name("testpage");

Route::post('/posts', function (Request $request) {
    $request->validate([
        'title' => 'required|min:3|max:255',
        'body'    => 'required|min:3|max:30|email'
    ]);

    return redirect()->back()->with('success','Form Created Successfully!');

})->name("formsubmitted");


Route::resource('posts', PostController::class)->except(['index']); 
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
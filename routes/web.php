<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;

// home page or initial page
Route::get('/', function () {
    return view('home');
});

Route::resource('posts', PostController::class);

// home page or initial page
Route::get('/contact', function () {
    return view('contact');
});

// Parameters using routes
// Route::get('/portfolio/{firstname}', function ($firstname, $lastname) {
//     return $firstname . " " . $lastname;
// });

// named routes
Route::get('/test', function () {
    return "This will bre returned after clicking the link in home page";
})->name("testpage");

// grouped portfolio related routes
Route::get('/portfolio', function () {
    return view('portfolio');
}); 

Route::prefix("portfolio")->group(function () {
    Route::get('/company', function () { 
    return view('company');
});

Route::get('/organizations', function () {
    return view('organizations');
});
});

//post route example
Route::post("/formsubmitted", function (Request $request) {

    $request->validate([
        'fullname' => 'required|min:3|max:30',
        'email' => 'required|min:3|max:30|email',
    ]);

    $fullname = $request->input("fullname");
    $email = $request->input("email");

    return "Your full name is {$request->input('fullname')}, and your email is $email!";
})->name("formsubmitted");


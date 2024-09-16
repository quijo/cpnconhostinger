<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Models\Slider;

//defualt
Route::get('/', function () {
    $sliders = Slider::all();
    return view('index
    ')->with('sliders', $sliders);
});

Route::get('/sliders', function(){
    $sliders = Slider::all();
    return view('sliders')->with('sliders', $sliders);
});

// Route::get('sliders', [SliderController::class, 'index']);

//Home
Route::prefix('home')->group(function(){
    $sliders = Slider::all();
    Route::get('/',[HomeController::class,'index'])->name('home.index'); //show home page
    Route::get('create',[HomeController::class,'create'])->name('create.index'); //show edit form blank page
    Route::get('{id}',[HomeController::class,'show'])->name('home.show'); //show specific page
    Route::get('{id}/edit',[HomeController::class,'show'])->name('home.edit'); //show edit form prefilled page

    Route::post('/',[HomeController::class,'store'])->name('home.store'); //logic for storing data validition creation of data
    Route::patch('/{id}',[HomeController::class,'update'])->name('home.upadate');//replace one or more columns
    Route::delete('/{id}',[HomeController::class,'update'])->name('home.upadate');//romove table columns
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
//End Breeze

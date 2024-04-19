<?php

use App\Http\Controllers\KeahlianController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SayaController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('homeUser');
// routes/web.php
// Route::post('/homeuser', 'FrontendController@store')->name('frontend.store');
Route::post('/homeuser',[App\Http\Controllers\FrontendController::class,'store'])->name('frontend.store');

Auth::routes();

######################
### Route Images ###
######################
Route::get('images/{folder}/{filename}', function ($folder, $filename) {
    $path = storage_path('app/images/' . $folder . '/' . $filename);

    if (!file_exists($path)) {
        abort(500);
    }

    $file = file_get_contents($path);
    $type = mime_content_type($path);

    return response($file)->header('Content-Type', $type);
})->name('show-image');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(
    function(){
        Route::get('/dashboard',function(){
            return view('home');
        });

        //route keahlian
        Route::get('keahlian/index', [KeahlianController::class,'index'])->name('keahlian.index');
        Route::get('keahlian/create',[KeahlianController::class, 'create'])->name('keahlian.create');
        Route::get('keahlian/{id}/show',[KeahlianController::class,'show'])->name('keahlian.show');
        Route::get('keahlian/{id}/edit',[KeahlianController::class, 'edit'])->name('keahlian.edit');
        Route::patch('keahlian/{id}/update',[KeahlianController::class,'update'])->name('keahlian.update');
        Route::post('keahlian/store',[KeahlianController::class,'store'])->name('keahlian.store');
        Route::delete('keahlian/destroy/{id}',[KeahlianController::class,'destroy'])->name('keahlian.destroy');

        //route kontak
        Route::get('kontak/index', [KontakController::class,'index'])->name('kontak.index');
        Route::get('kontak/create',[KontakController::class, 'create'])->name('kontak.create');
        Route::get('kontak/{id}/show',[KontakController::class,'show'])->name('kontak.show');
        Route::get('kontak/{id}/edit',[KontakController::class, 'edit'])->name('kontak.edit');
        Route::patch('kontak/{id}/update',[KontakController::class,'update'])->name('kontak.update');
        Route::post('kontak/store',[KontakController::class,'store'])->name('kontak.store');
        Route::delete('kontak/destroy/{id}',[KontakController::class,'destroy'])->name('kontak.destroy');

        //route pengalaman
        Route::get('pengalaman/index', [PengalamanController::class,'index'])->name('pengalaman.index');
        Route::get('pengalaman/create',[PengalamanController::class, 'create'])->name('pengalaman.create');
        Route::get('pengalaman/{id}/show',[PengalamanController::class,'show'])->name('pengalaman.show');
        Route::get('pengalaman/{id}/edit',[PengalamanController::class, 'edit'])->name('pengalaman.edit');
        Route::patch('pengalaman/{id}/update',[PengalamanController::class,'update'])->name('pengalaman.update');
        Route::post('pengalaman/store',[PengalamanController::class,'store'])->name('pengalaman.store');
        Route::delete('pengalaman/destroy/{id}',[PengalamanController::class,'destroy'])->name('pengalaman.destroy');

        //route review
        Route::get('review/index', [ReviewController::class,'index'])->name('review.index');
        Route::get('review/create',[ReviewController::class, 'create'])->name('review.create');
        Route::get('review/{id}/show',[ReviewController::class,'show'])->name('review.show');
        Route::get('review/{id}/edit',[ReviewController::class, 'edit'])->name('review.edit');
        Route::patch('review/{id}/update',[ReviewController::class,'update'])->name('review.update');
        Route::post('review/store',[ReviewController::class,'store'])->name('review.store');
        Route::delete('review/destroy/{id}',[ReviewController::class,'destroy'])->name('review.destroy');

        //route saya
        Route::get('saya/index', [SayaController::class,'index'])->name('saya.index');
        Route::get('saya/create',[SayaController::class, 'create'])->name('saya.create');
        Route::get('saya/{id}/show',[SayaController::class,'show'])->name('saya.show');
        Route::get('saya/{id}/edit',[SayaController::class, 'edit'])->name('saya.edit');
        Route::patch('saya/{id}/update',[SayaController::class,'update'])->name('saya.update');
        Route::post('saya/store',[SayaController::class,'store'])->name('saya.store');
        Route::delete('saya/destroy/{id}',[SayaController::class,'destroy'])->name('saya.destroy');
    }
);
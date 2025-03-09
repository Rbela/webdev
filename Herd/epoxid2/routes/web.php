<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/galerie', function () {
    return view('galerie');
})->name('galerie');

Route::get('/kontakt', function () {
    return view('kontakt');
})->name('kontakt');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/admin/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::delete('/admin/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');


Route::get('/onas', function () {
    return view('onas');
})->name('onas');

Route::get('/sluzby', function () {
    return view('sluzby');
})->name('sluzby');


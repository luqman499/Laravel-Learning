<?php

use Illuminate\Support\Facades\Route;


// Route::get('/hell', function () {
//     return view('about');
// });

// Route::view('/about', 'about');


// Route::get('/', function () {
// $person = [
//     'name' => 'Ali',
//     'email' => 'luqman@gmail.com'
// ];
// dd($person);
//     return view('welcome');
// });

//Route Parameters

// Route::get('/product/{id}', function (string $id) {
//     return "Product ID = $id";
// });


// Route::get('/{lang}/product/{id}', function (string $lang, string $id) {
//     return "Lang($lang) PRODUCT ID($id)";
// });

//Optional Parameters

// Route::get('/product/{category?}', function (string $category = null) {
//     return "Category For Product= {$category}";
// });

//Route Validation

// Route::get('/product/{id}', function (string $id) {
//     return "Work! {$id}";
// })->whereNumber('id');
// whereAlpha
//whereIn(id, ['12', '12', '15']);

//Name Route

// Route::get('/', function () {
//     $aboutPageUrl = route('about');
//     dd($aboutPageUrl);

//     return view('welcome');
// });

// Route::view('/about-us', 'about')->name('about');

//Group Route

Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return "admin/users";
    });
});

Route::fallback(function () {
    return "This Page is Not Found !!!!";
});

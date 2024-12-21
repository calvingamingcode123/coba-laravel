<?php


use App\Models\post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "name" => "kirara Fantasia",
        "title" => "home",
        "description" => "welcome to Kirafan blog",
        "img" => "gambar1.jpg"
    ]);
});

Route::get('/battle', function () {
    return view('battle', [
        "name" => "kirara Fantasia",
        "title" => "battle",
        "description" => "welcome to Kirafan blog",
        "img" => "gambar1.jpg"
    ]);
});

Route::get('/about', [PostController::class, 'index']);

    // return view('about', [
    //     "name" => "kirara Fantasia",
    //     "title" => "about",
    //     "about" => $blog_about,
    //     "img" => "gambar1.jpg"
    // ]);


Route::get('about/{slug}', [postController::class, 'show']);


Route::get('/items', function () {
    return view('items', [
        "name" => "kirara Fantasia",
        "title" => "items",
        "description" => "welcome to Kirafan blog",
        "img" => "gambar1.jpg"
    ]);
});


Route::get('/library', function () {
    return view('library', [
        "name" => "kirara Fantasia",
        "title" => "library",
        "description" => "welcome to Kirafan blog",
        "img" => "gambar1.jpg"
    ]);
});


Route::get('/other', function () {
    return view('other', [
        "name" => "kirara Fantasia",
        "title" => "other",
        "description" => "welcome to Kirafan blog",
        "img" => "gambar1.jpg"
    ]);
});//-/+

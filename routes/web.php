<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\PostController;

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
//Route::redirect('/','post');
//Route::resource('/post', \App\Http\Controllers\PostController::class);
// Route::get('/', function () {
//     return view('welcome',["name"=>"tttz","age"=>"22"]);
// });
// Route::get("/about-me", function(){
//     return view("about");
// })->name("about");
// // Route::get("/contact", function(){
// //     return view("contact");
// // });
// Route::view('/contact', 'contact')->name("contact");
// Route::get('calc/{firstInt}/{secondInt}', function ($firstInt,$secondInt) {
//     return view("add",compact("firstInt","secondInt"));
    
// });

// Route::get("/add/{x}/{y}", function ($x,$y) {
//     return $x+$y;
// });

// Route::get('/run', [FirstController::class,'run']);
// Route::post('/exchange',[FirstController::class,'exchange'])->name('exchange');

Route::get('/',[PostController::class,'index'])->name('post.index');
Route::get('/create',[PostController::class,'create'])->name('post.create');
Route::post('/keep',[PostController::class,'store'])->name('post.store');
Route::get('/show/{id}',[PostController::class,'show'])->name('post.show');
Route::delete('/delete/{id}',[PostController::class,'delete'])->name('post.delete');
route::get('/edit/{id}',[PostController::class,'edit'])->name('post.edit');
Route::put('/update/{id}',[PostController::class,'update'])->name('post.update');
//Route::redirect('/', 'posts');
//Route::resource('/posts', PostController::class);
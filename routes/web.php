<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagecontroller;
Use App\Http\Controllers\ProductController;
Use App\Http\Controllers\ContactController;



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
// /***Praktikum 1 */
// Route::get('/', function () {
//     echo "Selamat datang";
// });

// Route::get('/about', function () {
//     echo("NIM: 1941720021, NAMA:Shelyca Surrayensih");
// });

// Route::get('/articles/{id}', function ($id) {
//      return "Halaman Artikel dengan id $id";
// });

// // /***Praktikum 2 */

// Route::get('/',[pagecontroller::class,'index']);

// Route::get('/about',[pagecontroller::class,'about']);

// Route::get('/articles/{id}',[pagecontroller::class,'articles']);

// //Pratikum 3

Route::get('/', [ProductController::class, 'index']);
Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'product']);
    Route::get('/edugame', [ProductController::class, 'edugame']);
    Route::get('/kidgame', [ProductController::class, 'kidgame']);
    Route::get('/storybook', [ProductController::class, 'storybook']);
    Route::get('/kidsongs', [ProductController::class, 'kidsongs']);
});
Route::get('/news/{id?}', [ProductController::class, 'News']);
Route::prefix('program')->group(function () {
    Route::get('/', [ProductController::class, 'program']);
    Route::get('/karir', [ProductController::class, 'karir']);
    Route::get('/magang', [ProductController::class, 'magang']);
    Route::get('/industri', [ProductController::class, 'industri']);

});
Route::get('/AboutUs', [ProductController::class, 'AboutUs']);

Route::resource('Contact', ContactController::class)->only([
    'index'
]);

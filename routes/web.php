<?php

use App\Http\Controllers\BaruContoller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CafeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustumerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ViewoptionController;

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
Route::get('/', function () {
    return view('welcome');
})->name('login');


// Route::get('menu', function () {
//     return view('menu');
// });
// Route::get('viewoption', function () {
//     return view('viewoption');
// });
// Route::get('cafe', function () {
//     return view('cafe');
// });
// Route::get('allproduct', function () {
//     return view('allproduct');
// });
// Route::get('pembeli', function () {
//     return view('formpembeli');
// });
// Route::get('custumer', function () {
//     return view('custumer');
// });
// Route::get('cart', function () {
//     return view('cart');
// });
// Route::get('pesanan', function () {
//     return view('pesanan');
// });

 //Login
 Route::post('auth', [UserController::class, 'auth']);
 Route::get('logout', [UserController::class, 'logout']);
 Route::get('daftar', [UserController::class, 'daftar']);
 Route::post('daftar/create', [UserController::class, 'create']);

    //show
Route::get('custumer', [CustumerController::class, 'show']);
Route::get('pembeli', [PembeliController::class, 'show']);
Route::get('register', [RegisterController::class, 'show']);
Route::get('cafe', [CafeController::class, 'show']);

Route::get('viewoption', [ViewoptionController::class, 'show']);
Route::get('cart', [CartController::class, 'show']);
Route::get('pesanan', [CafeController::class, 'pesanan']);
Route::get('riwayat', [CafeController::class, 'riwayat']);

    //Kategori
Route::get('allproduct', [CafeController::class, 'all']);
Route::get('makanan', [CafeController::class, 'makanan']);
Route::get('minuman', [CafeController::class, 'minuman']);

    //cafe
Route::get('cafe/edit/{id}', [CafeController::class, 'editview']);

    //pembeli
// Route::get('pembeli/add', [CartController::class, 'add']);
// Route::post('/pembeli/create', [CartController::class, 'pembeliCreate']);
// Route::get('pembeli/hapus/{id}', [CartController::class, 'hapus']);
// Route::get('pembeli/edit/{id}', [CartController::class, 'edit']);
// Route::post('/cart/create/{id}/{kode}/{total}', [CartController::class, 'createPembeli']);


    //Menu
Route::get('menu/add', [MenuController::class, 'add']);
Route::post('menu/create', [MenuController::class, 'create']);
Route::get('menu/hapus/{id}', [MenuController::class, 'hapus']);
Route::get('menu/edit/{id}', [MenuController::class, 'edit']);
Route::post('menu/update/{id}', [MenuController::class, 'update']);

    //Custumer
Route::get('custumer/add', [CustumerController::class, 'add']);
Route::post('custumer/create', [CustumerController::class, 'create']);
Route::get('custumer/hapus/{id}', [CustumerController::class, 'hapus']);
Route::get('custumer/edit/{id}', [CustumerController::class, 'edit']);

    //Cart
Route::post('/cart/create/{kode}', [CartController::class, 'create']);
Route::get('/cart/hapus/{id}', [CartController::class, 'delete']);
Route::get('cart/edit/{id}', [CartController::class, 'edit']);
Route::post('/chekout/create/{id}/{kode}/{total}', [CartController::class, 'chekout']);
Route::post('/pesan/create/{kode}', [CartController::class, 'pesan']);




Route::middleware('auth')->group(function (){
    Route::get('admin', function () {
        return view('layout');
    });

});
Route::get('menu', [MenuController::class, 'show']);

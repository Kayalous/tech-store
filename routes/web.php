<?php

use App\Http\Controllers\CartController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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


Route::middleware('auth')->prefix('cart')->group(function () {

    Route::post('add-product', [CartController::class, 'addItem'])->name('cart.add');

    Route::delete('remove-product', [CartController::class, 'removeItem'])->name('cart.remove');

    Route::delete('remove-all-products', [CartController::class, 'emptyCart'])->name('cart.remove-all');

});


Route::inertia('/', 'Landing')->name('home');
Route::inertia('/about', 'About')->name('about');
Route::inertia('/locator', 'Locator')->name('locator');

Route::get('/product/{product_id}', function ($product_id) {

    $product = Product::findOrFail($product_id);

    return Inertia::render('Product', [
        'item' => $product,
    ]);


})->name('Product');

Route::get('/shop', function (Request $request) {

    $minPrice = Product::all()->sortBy("price")->first()->price;

    $maxPrice = Product::all()->sortByDesc("price")->first()->price;


    $products = Product::orderBy('price', $request->sortBy ? $request->sortBy : 'asc')->where('price', '>=', $request->minPrice ? $request->minPrice : 0)->where('price', '<=', $request->maxPrice ? $request->maxPrice : $maxPrice)->paginate(15);

    return Inertia::render('Shop', [
        'items' => $products,
        'maxPrice' => $maxPrice,
        'minPrice' => $minPrice,
    ]);

})->name('shop');

Route::post('/shop/fiter', function (Request $request) {


    $products = Product::orderBy('price', $request->sortBy ? $request->sortBy : 'asc')->where('price', '>=', $request->minPrice)->where('price', '<', $request->maxPrice)->paginate(15);


    return response()->json([
        'items' => $products,
    ]);

})->name('shop.filter');

Route::middleware('auth')->get('/cart', function () {

    $products = \Illuminate\Support\Facades\Auth::user()->cart->products;

    return Inertia::render('Cart', ['items' => $products, 'total' => $products->sum('price')]);

})->name('cart');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

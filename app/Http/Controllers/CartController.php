<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function addItem(Request $request)
    {
        Auth::user()->cart->products()->attach($request->product_id);

        return back(303);

    }

    public function removeItem(Request $request)
    {
        Auth::user()->cart->products()->detach($request->product_id);

        return back(303);
    }

    public function emptyCart()
    {

        Auth::user()->cart->products()->sync([]);

        return back(303);
    }


}

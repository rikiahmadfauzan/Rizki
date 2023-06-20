<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Cart;

class ViewoptionController extends Controller
{
    function show(){
        $data['carts'] = Cart::all()->count();
        $data['menu'] = Menu::all();
        return view('viewoption', $data);
    }


}

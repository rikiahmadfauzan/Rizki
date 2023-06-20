<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use App\Models\Pesanan;


class CafeController extends Controller
{
    function show(){
        $data['carts'] = Cart::all()->count();
        $data['cart'] = Cart::first();
        $data['menu'] = Menu::all();

        return view('cafe', $data);
    }
    function all() {
        $data['carts'] = Cart::all()->count();
        $data['menu'] = Menu::all();
        return view('allproduct', $data);
    }
    function makanan(){
        $data['carts'] = Cart::all()->count();
        $data['menu'] = Menu::where('kategori', 'makanan')->get();
        return view('makanan', $data);


    }
    function minuman(){
        $data['carts'] = Cart::all()->count();
        $data['menu'] = Menu::where('kategori', 'minuman')->get();
        return view('minuman', $data);


    }
    function editview($id){
        $data['carts'] = Cart::all()->count();
        $data['menu'] = Menu::find($id);
        return view('viewoption',$data);
     }
     function pesanan(){
        $data['carts'] = Cart::all()->count();
        $data['cart'] = DB::table('cart')->join('menu', 'menu.idMenu', '=', 'cart.idMenu')->get();

        return view('pesanan' ,$data);
     }

     function riwayat(){
        $data['carts'] = Cart::all()->count();
        $data['pesanan'] = Pesanan::first();
        $data['cart'] = DB::table('cart')->join('menu', 'menu.idMenu', '=', 'cart.idMenu')->get();

        return view('riwayat' ,$data);
     }



}

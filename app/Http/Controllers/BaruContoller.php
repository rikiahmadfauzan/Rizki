<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\Cart;
use App\Models\Menu;
use App\Models\Pesanan;
use Carbon\Carbon;
class BaruContoller extends Controller
{
    function show(){

        $data['pesanan'] = Pesanan::all();
        $data['menu'] = Menu::first();
        $data['cart'] = DB::table('cart')->join('menu', 'menu.idMenu', '=', 'cart.idMenu')->get();

        return view('cart', $data);
     }



    function create(Request $req, $id){
        $menu = Menu::where('idMenu', $id)->first();
        //halaman cart
        Cart::updateOrCreate(
            ['idMenu' => $id],
            ['idMenu' => $id, 'jumlah' => $req->jumlah, 'totalHarga' => $menu->harga*$req->jumlah]
        );
        return redirect('cart');

    }
}

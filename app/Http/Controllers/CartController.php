<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\Cart;
use App\Models\Menu;
use App\Models\Pesanan;
use Carbon\Carbon;

class CartController extends Controller
{

    function show(){

        $data['pesanan'] = Pesanan::all();
        $data['menu'] = Menu::first();
        $data['cart'] = DB::table('cart')->join('menu', 'menu.idMenu', '=', 'cart.idMenu')->get();

        return view('cart', $data);
     }



     function create(Request $req, $id){
        $menu = Menu::where('idMenu', $id)->first();
        // $status = 0;
        //halaman cart
        Cart::updateOrCreate(
            ['idMenu' => $id],
            ['id' => $id,'status' => 0, 'jumlah' => $req->jumlah, 'totalHarga' => $menu->harga*$req->jumlah]
        );
        return redirect('cart');

    }


     function chekout(Request $req, $id, $kode, $total){
        $cart = Cart::all();
        $tanggal = Carbon::now();


         //halaman pembeli
       foreach ($cart as $key => $value){
        Pesanan::create([
            'kode' => $id,
            'idMenu' => $value->idMenu,
            'firstName' => $req->firstName,
            'lastName' => $req->lastName,
            'username' => $req->username,
            'email' => $req->email,
            'address' => $req->address,
            'payment' => $req->payment,
            'tanggal' => $tanggal,
            'total' => $total

        ]);

       }
       return redirect::to('https://wa.me/6285295792274?text=nama');

     }
     function delete($id){
        $cart = Cart::where('id', $id)->first();
        $cart->delete();

         return redirect('cart');
      }
}

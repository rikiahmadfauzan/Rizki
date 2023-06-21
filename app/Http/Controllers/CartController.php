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
        $pesanan = Cart::where('status',0)->first();
        // if (empty($pesanan)){
            $menu = Menu::where('idMenu', $id)->first();
            Cart::updateOrCreate(
                ['idMenu' => $id],
                ['idMenu' => $id,'status' => 0, 'jumlah' => $req->jumlah, 'totalHarga' => $menu->harga*$req->jumlah]
            );
            return redirect('cart');
        // }


    }

// function pesan(){

// }
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
            'noCard' => $req->noCard,
            'tanggal' => $tanggal,
            'total' => $total

        ]);
        $pesanan = Cart::where('status',0)->first();
        $pesanan->status = 1;
        $pesanan->update();

        return redirect('https://wa.me/62852955792274?text=kode :'.$id. 'nama :'.$req->firstName. 'alamat :'.$req->address. 'total :' .$total);

       }


     }
     function delete($id){
        $cart = Cart::where('id', $id)->first();
        $cart->delete();

         return redirect('cart');
      }
}

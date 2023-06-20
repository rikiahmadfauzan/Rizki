<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Menu;




class MenuController extends Controller
{
    function formMenu(){
        return view('formmenu');
    }
    function show(){
        $data['menu'] = Menu::all();
        return view('menu',$data);
    }
    function add(){
        $data = [
            'action' => url('menu/create'),
            'menu' => (object)[
                'id' => '',
                'idMenu' => '',
                'namaMenu' => '',
                'harga' => '',
                'kategori' => '',
                'fotoMenu' => '',

            ],
        ];
        return view('menu',$data);
    }
    function create(Request $req){
        Menu::create([
            'id' => $req->id,
            'idMenu' => $req->idMenu,
            'namaMenu' => $req->namaMenu,
            'harga' => $req->harga,
            'kategori' => $req->kategori,
            'fotoMenu' => $req->file('fotoMenu')->store('fotoMenu')

        ]);
        return redirect('menu');
     }
     function hapus($id){
        $menu = Menu::where('id', $id)->first();
        $menu->delete();
        Storage::delete($menu->fotoMenu);
         return redirect('menu');
      }
      function edit($id){
        $data['menu'] = Menu::find($id);
        $data['action']= url('menu/update').'/'.$data['menu']->id;
        return view('formMenu',$data);
     }
     function update(Request $req){
        if($req->file('fotoMenu')){
                $menu = Menu::where('id',$req->id)->first();
                Storage::delete($menu->fotoMenu);

            $file = $req->file('fotoMenu')->store('fotoMenu');
        }else{
            $file = DB::raw('fotoMenu');
        }
        Menu::where('id', $req->id)->update([
            'id' => $req->id,
            'idMenu' => $req->idMenu,
            'namaMenu' => $req->namaMenu,
            'harga' => $req->harga,
            'kategori' => $req->kategori,
            'fotoMenu' => $file

        ]);
        return redirect('menu');
     }

}


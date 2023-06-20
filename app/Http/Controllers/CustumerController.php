<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Custumer;

class CustumerController extends Controller
{

    function custumer(){
        return view('custumer');
    }
    function show(){
        $data['custumer'] = Custumer::All();
        return view('custumer',$data);
    }
    function add(){
        $data = [
            'action' => url('custumer/create'),
            'custumer' => (object)[
                'id' => '',
                'namaMenu' => '',
                'harga' => '',
                'namaLengkap' => '',
                'alamat' => '',
                'noTelpon' => '',

            ],
        ];
        return view('custumer',$data);
    }
    
    function create(Request $req){
        Custumer::create([
            'id' => $req->id,
            'namaMenu' => $req->namaMenu,
            'harga' => $req->harga,
            'namaLengkap' => $req->namaLengkap,
            'alamat' => $req->alamat,
            'noTelpon' => $req->noTelpon

        ]);
        return redirect('cafe');
     }
     function hapus($id){
        $custumer = Custumer::where('id', $id)->first();
        $custumer->delete();

         return redirect('custumer');
      }
      function edit($id){
        $data['custumer'] = Custumer::find($id);
        $data['action']= url('custumer/update').'/'.$data['custumer']->id;
        return view('cutumer',$data);
     }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sm;

class sc extends Controller
{

    function insert(Request $req){
        $status=$req->get('status');
        $sql=new sm();
        $sql->status=$status;
        $sql->save();
        return redirect('/in');
    }
    function show(){
        $sql=sm::all();
        return view('show',['data'=>$sql]);
    }


    function upshow($id){
        $sql=sm::find($id);
        return view('update',['row'=>$sql]);
    }
   
    function update(Request $req){
        $sql=sm::find($req->id);
        $sql->status=$req->status;
        $sql->save();
        return redirect('/s');
    }
     function invoice($id){
        $sql=sm::find($id);
        return view('invoice',['row'=>$sql]);
    }

}

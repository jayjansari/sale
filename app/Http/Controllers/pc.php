<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pm;

class pc extends Controller
{
    function insert(Request $req){
        $name=$req->get('name');
        $price=$req->get('price');

        $sql=new pm();
        $sql->name=$name;
        $sql->price=$price;
        $sql->save();
        return redirect('/pi');
    }
}

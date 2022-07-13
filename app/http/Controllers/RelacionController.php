<?php


namespace App\Http\Controllers;

use App\Models\Alquiler;
use App\Models\Director;
use App\Models\Formato;
use App\Models\Pelicula;




use Illuminate\Http\Request;

class RelacionController extends Controller
{
    public function red (){
  

        $productos = Pelicula::all();
        return view('report',compact('productos'));
    }
    public function alquila()
    {
        $economico = Alquiler::all();
        return view('economico',compact('economico'));
    }
}


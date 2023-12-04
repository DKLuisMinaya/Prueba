<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    
    public function index()
    {
        $producto = Producto::where('estado', 1)->get();
        return view('producto', compact('producto'));   
    }

    
    public function create()
    {
        //
    }

}

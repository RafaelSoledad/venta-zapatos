<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\calzado;

class InventarioController extends Controller
{
    //
    public function index()
    {
        $calzados = calzado::paginate();
        return view('welcome', compact('calzados'));
    }
}

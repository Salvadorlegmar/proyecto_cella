<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Caso;

class CasoController extends Controller
{
    public function index()
    {
        $casos = Caso::orderby('ID_CASO')->paginate();
        return view("caso", compact("casos"));
    }
}

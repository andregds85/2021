<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MapasController extends Controller
{
    public function index()
    {
      return view('mapas.index');
    }

}
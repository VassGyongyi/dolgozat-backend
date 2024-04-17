<?php

namespace App\Http\Controllers;

use App\Models\Kategoria;
use Illuminate\Http\Request;

class KategoriaController extends Controller
{
    public function index(){ 
        $kategorias = response()->json(Kategoria::all()); 
        return $kategorias; 
    } 
    public function show($id){ 
        $kategorias = response()->json(Kategoria::find($id)); 
        return $kategorias; 
    } 
    public function store(Request $request){ 
        $kategorias = new Kategoria(); 
        $kategorias->id = $request->id; 
        $kategorias->kategorianev = $request->kategorianev; 
        $kategorias->save();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Teszt;
use Illuminate\Http\Request;

class TesztController extends Controller
{
    public function index(){ 
        $teszts = response()->json(Teszt::all()); 
        return $teszts; 
    } 
    public function show($id){ 
        $teszts = response()->json(Teszt::find($id)); 
        return $teszts; 
    } 
    public function store(Request $request){ 
        $teszts = new Teszt(); 
        $teszts->id = $request->id; 
        $teszts->kerdes =$request->kerdes; 
        $teszts->v1 =$request->v1;
        $teszts->v2 =$request->v2;
        $teszts->v3 =$request->v3;
        $teszts->v4 =$request->v4;
        $teszts->helyes =$request->helyes;
        $teszts->kategoriaId =$request->kategoriaId;
        $teszts->save();
    }
}

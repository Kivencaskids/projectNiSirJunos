<?php

namespace App\Http\Controllers;

use App\Models\delivers;
use Illuminate\Http\Request;

class deliverControll extends Controller
{
    public function woods()
    {
        return delivers::all();
    }

    public function store(Request $request){
        $stmt = new delivers();

        $stmt->wood_Name = $request->wn;
        $stmt->wood_quality = $request->wq;
        $stmt->wood_price = $request->wp;
        $stmt->location = $request->lc;

        $stmt->save();

        return delivers::all(); 
    }

    public function update(Request $request){
        $stmt = delivers::find($request->id);

        $stmt->wood_Name = $request->wn;
        $stmt->wood_quality = $request->wq;
        $stmt->wood_price = $request->wp;
        $stmt->location = $request->lc;

        $stmt->save();

        return delivers::all(); 
    }

    public function deleteWood(Request $request){
        $stmt = delivers::find($request->id);

        $stmt->delete();

        return delivers::all(); 
    }
}

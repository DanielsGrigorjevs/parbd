<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kurss;

class KursiController extends Controller
{
    //
    public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required|max:255',
            'text' => 'required',
            'bannerURL' => 'required|max:255',
            'studentCount' => 'integer|required'
        ]);

        $data = Kurss::create($validated);
        return response()->json($data);

    }

    public function index(){
        $data = Kurss::all();
        return response()->json($data);
        
    }
}

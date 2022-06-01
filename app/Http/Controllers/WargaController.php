<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index(){
        $warga = Warga::all();
        return view('tables',compact(['warga']));
    }

    public function create(){
        return view('warga.create');
    }
    
    public function store(Request $request){
        Warga::create($request->except(['_token','submit']));
        //dd($request->except(['_token','submit']));
        return redirect('tables');
    }
}

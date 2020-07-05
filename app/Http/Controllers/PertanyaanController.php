<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\pertanyaan;

class PertanyaanController extends Controller
{
    //
    public function index(){
        $pertanyaan = \App\Pertanyaan::all();
        return view('tampil.index',['pertanyaan' => $pertanyaan]);
    }
    public function create(){
        $pertanyaan = \App\Pertanyaan::all();
        return view('tampil.create',['pertanyaan' => $pertanyaan]);
    }
    public function store(Request $request){
            \App\Pertanyaan::create($request->all());
            return redirect('/');
        }
    public function show($id){
        \App\Pertanyaan::all($id);
        return view('tampil.show', ['pertanyaan' => $pertanyaan]);
    }
}

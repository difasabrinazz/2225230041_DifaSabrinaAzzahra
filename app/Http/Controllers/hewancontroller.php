<?php

namespace App\Http\Controllers;
use App\Models\hewan;
use Illuminate\Http\Request;

class hewancontroller extends Controller
{
    public function index()
    {
        $hewan = hewan ::all();
        return view('index',compact(['hewan']));
    }
    public function create(Request $request) 
    {
            return view('create');
    }
    public function edit($id)
    {
        $hewan = hewan::find($id);
        return view('edit',compact(['hewan']));
    }
    public function store(Request $request){
        hewan::create($request->except(['_token','submit']));
        return redirect('/home');
    }
    public function update($id, Request $request)
    {
        $hewan = hewan::find($id);
        $hewan->update($request->except(['_token','submit']));
        return redirect('/hewan');
    }
    public function destroy($id)
    {
        $hewan = hewan::find($id);
        $hewan->delete();
        return redirect('/home'); 
    }
}


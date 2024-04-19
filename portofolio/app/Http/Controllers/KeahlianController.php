<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keahlian;

class KeahlianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keahlian = Keahlian::all();    
        return view('pages.keahlian.index', [
            'keahlian' => $keahlian,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.keahlian.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Keahlian::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('keahlian.index')->with('Success', 'Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $keahlian = Keahlian::find($id);
        return view('pages.keahlian.show',[
            'keahlian' => $keahlian
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $keahlian = Keahlian::find($id);
        return view('pages.keahlian.edit',[
            'keahlian' => $keahlian 
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Keahlian::where('id',$id)->update([
            'nama' => $request->nama
        ]);
        return redirect()->route('keahlian.index')->with('Success','Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $keahlian = Keahlian::find($id);
        $keahlian->delete();
        return redirect()->route('keahlian.index')->with('Success', 'Berhasil Disimpan');
    }
}

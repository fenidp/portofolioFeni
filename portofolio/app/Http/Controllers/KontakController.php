<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kontak = Kontak::orderBy('id','DESC')->get();
        return view('pages.kontak.index',[
            'kontak' => $kontak,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.kontak.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Kontak::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);
        return redirect()->route('kontak.index')->with('Success', 'Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kontak = Kontak::find($id);
        return view('pages.kontak.show',[
            'kontak' => $kontak
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kontak = Kontak::find($id);
        return view('pages.kontak.edit',[
            'kontak' => $kontak 
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Kontak::where('id',$id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);
        return redirect()->route('kontak.index')->with('Success','Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kontak = Kontak::find($id);
        $kontak->delete();
        return redirect()->route('kontak.index')->with('Success', 'Berhasil Disimpan');
    }
}

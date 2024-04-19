<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengalaman;

class PengalamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengalaman = Pengalaman::orderBy('id','DESC')->get();
        return view('pages.pengalaman.index',[
            'pengalaman' => $pengalaman,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.pengalaman.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pengalaman::create([
            'posisi' => $request->posisi,
            'namaKegiatan' => $request->namaKegiatan,
            'tahun' => $request->tahun,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('pengalaman.index')->with('Success', 'Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pengalaman = Pengalaman::find($id);
        return view('pages.pengalaman.show',[
            'pengalaman' => $pengalaman
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengalaman = Pengalaman::find($id);
        return view('pages.pengalaman.edit',[
            'pengalaman' => $pengalaman 
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Pengalaman::where('id',$id)->update([
            'posisi' => $request->posisi,
            'namaKegiatan' => $request->namaKegiatan,
            'tahun' => $request->tahun,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('pengalaman.index')->with('Success','Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengalaman = Pengalaman::find($id);
        $pengalaman->delete();
        return redirect()->route('pengalaman.index')->with('Success', 'Berhasil Disimpan');
    }
}

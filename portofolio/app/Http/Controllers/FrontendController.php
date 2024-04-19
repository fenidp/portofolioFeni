<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keahlian;
use App\Models\Saya;
use App\Models\Pengalaman;
use App\Models\Review;
use App\Models\Kontak;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $data = Saya::first();
        $keahlian = Keahlian::all();
        $wd = Keahlian::first();
        $wdv = Keahlian::skip(1)->first();
        $wdv2 = Keahlian::skip(2)->first();
        $wdv3 = Keahlian::skip(3)->first();
        $saya = Saya::all();
        $pengalaman = Pengalaman::all();
        $review = Review::all();  

        return view('homeUser',[
            'data' => $data,
            'keahlian' => $keahlian,
            'saya' => $saya,
            'wd' => $wd,
            'wdv' => $wdv,
            'wdv2' => $wdv2,
            'wdv3' => $wdv3,
            'pengalaman' => $pengalaman,
            'review' => $review
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string',
        ]);

        Kontak::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);
        return redirect('/')->with('success', 'Berhasil Dikirim');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

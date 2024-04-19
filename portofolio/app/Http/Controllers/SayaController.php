<?php

namespace App\Http\Controllers;

use App\Models\Saya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SayaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $saya = Saya::orderBy('id','DESC')->get();
        return view('pages.saya.index',[
            'saya' => $saya,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.saya.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'nama'    => 'required',
            'tanggal'    => 'required',
            'email'    => 'required',
            'resume'    => 'required',
            'alamat'    => 'required',
            'no_hp'    => 'required',
            'riwayatPendidikan'    => 'required',
        ]);

        $foto = $request->file('foto');
        $foto->storeAs('images/', $foto->hashName());
        
        Saya::create([
            'foto'     => $foto->hashName(),
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'email' => $request->email,
            'resume' => $request->resume,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'riwayatPendidikan' => $request->riwayatPendidikan,
        ]);
        return redirect()->route('saya.index')->with('Success', 'Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $saya = Saya::find($id);
        return view('pages.saya.show',[
            'saya' => $saya
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $saya = Saya::find($id);
        return view('pages.saya.edit',[
            'saya' => $saya 
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
            'nama'    => 'required',
            'tanggal'    => 'required',
            'email'    => 'required',
            'resume'    => 'required',
            'alamat'    => 'required',
            'no_hp'    => 'required',
            'riwayatPendidikan'    => 'required',
        ]);
        
        $foto = $request->file('foto');
        $cekData = Saya::find($id);
        
        if($foto){
            //hapus foto lama
            Storage::exists('images/'.$cekData->foto);
            Storage::delete('images/'.$cekData->foto);
            
            //upload foto
            $foto->storeAs('images/',$foto->hashName());

            $data = [ 
                'foto'=>$foto->hashName(),
                'nama' => $request->nama,
                'tanggal' => $request->tanggal,
                'email' => $request->email,
                'resume' => $request->resume,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'riwayatPendidikan' => $request->riwayatPendidikan,
            ];
            
        }else{
            $data = [
                'nama' => $request->nama,
                'tanggal' => $request->tanggal,
                'email' => $request->email,
                'resume' => $request->resume,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'riwayatPendidikan' => $request->riwayatPendidikan,
            ];
        }
        $cekData->update($data);

        return redirect()->route('saya.index')->with('Success','Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $saya = Saya::find($id);
        $saya->delete();
        return redirect()->route('saya.index')->with('Success', 'Berhasil Disimpan');
    }
}

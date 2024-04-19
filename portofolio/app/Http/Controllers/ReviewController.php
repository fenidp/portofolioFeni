<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $review = Review::orderBy('id','DESC')->get();
        return view('pages.review.index',[
            'review' => $review,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.review.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'nama'    => 'required',
            'pekerjaan'    => 'required',
            'komentar'    => 'required',
        ]);

        $foto = $request->file('foto');
        $foto->storeAs('images', $foto->hashName());
        
        Review::create([
            'foto'     => $foto->hashName(),
            'nama' => $request->nama,
            'pekerjaan' => $request->pekerjaan,
            'komentar' => $request->komentar,
        ]);
        return redirect()->route('review.index')->with('Success', 'Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $review = Review::find($id);
        return view('pages.review.show',[
            'review' => $review
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $review = Review::find($id);
        return view('pages.review.edit',[
            'review' => $review 
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
            'pekerjaan'    => 'required',
            'komentar'    => 'required'
        ]);
        
        $foto = $request->file('foto');
        $cekData = Review::find($id);
        
        if($foto){
            //hapus foto lama
            Storage::exists('images'.$cekData->foto);
            Storage::delete('images'.$cekData->foto);
            
            //upload foto
            $foto->storeAs('images',$foto->hashName());

            $data = [ 
                'foto'=>$foto->hashName(),
                'nama' => $request->nama,
                'pekerjaan' => $request->pekerjaan,
                'komentar' => $request->komentar,
            ];
            
        }else{
            $data = [
                'nama' => $request->nama,
                'pekerjaan' => $request->pekerjaan,
                'komentar' => $request->komentar,
            ];
        }
        $cekData->update($data);

        return redirect()->route('review.index')->with('Success','Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cekData = Review::find($id);
        Storage::exists('image/'.$cekData->foto);
        Storage::delete('image/'.$cekData->foto);
        $cekData->delete();
        
        return redirect()->route('review.index')->with('Success', 'Berhasil Disimpan');
    }

    
}

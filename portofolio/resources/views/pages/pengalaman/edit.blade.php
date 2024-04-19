@extends('layouts.main')
@section('konten')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('pengalaman.update', $pengalaman->id) }}" method="POST">

                            @csrf
                            @method('PATCH')
                            
                            <div class="form-group">
                                <label class="font-weight-bold">Posisi</label>
                                <input type="text" class="form-control @error('posisi') is-invalid @enderror"
                                    name="posisi" value="{{$pengalaman->posisi}}" placeholder="Masukkan posisi pengalaman">

                                <!-- error message untuk posisi -->
                                @error('posisi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Nama Kegiatan</label>
                                <input type="text" class="form-control @error('pengalaman') is-invalid @enderror"
                                    name="namaKegiatan" value="{{$pengalaman->namaKegiatan}}">

                                <!-- error message untuk anggaran -->
                                @error('namaKegiatan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Tahun</label>
                                <input type="text" class="form-control @error('pengalaman') is-invalid @enderror"
                                    name="tahun" value="{{$pengalaman->tahun}}">

                                <!-- error message untuk anggaran -->
                                @error('tahun')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Deskripsi</label>
                                <input type="text" class="form-control @error('pengalaman') is-invalid @enderror"
                                    name="deskripsi" value="{{$pengalaman->deskripsi}}">

                                <!-- error message untuk anggaran -->
                                @error('deskripsi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

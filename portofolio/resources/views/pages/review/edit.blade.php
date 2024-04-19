@extends('layouts.main')
@section('konten')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form method="POST" action="{{ route('review.update', $review->id) }}" enctype="multipart/form-data">

                            @csrf
                            @method('PATCH')
                            
                            <div class="form-group">
                                <label class="font-weight-bold">nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    name="nama" value="{{$review->nama}}" placeholder="Masukkan nama ">

                                <!-- error message untuk nama -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Pekerjaan</label>
                                <input type="text" class="form-control @error('review') is-invalid @enderror"
                                    name="pekerjaan" value="{{$review->pekerjaan}}">

                                <!-- error message untuk anggaran -->
                                @error('pekerjaan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Komentar</label>
                                <input type="text" class="form-control @error('review') is-invalid @enderror"
                                    name="komentar" value="{{$review->komentar}}">

                                <!-- error message untuk anggaran -->
                                @error('komentar')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Foto</label>
                                <input type="file" class="form-control-file @error('foto') is-invalid @enderror"
                                    name="foto" accept="image/*">
                            
                                <!-- Error message untuk foto -->
                                @error('foto')
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

@extends('layouts.main')
@section('konten')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form method="POST" action="{{ route('saya.update', $saya->id) }}" enctype="multipart/form-data">

                            @csrf
                            @method('PATCH')
                            
                            <div class="form-group">
                                <label class="font-weight-bold">nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    name="nama" value="{{$saya->nama}}" placeholder="Masukkan nama ">

                                <!-- error message untuk nama -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Tanggal</label>
                                <input type="date" class="form-control @error('saya') is-invalid @enderror"
                                    name="tanggal" value="{{$saya->tanggal}}">

                                <!-- error message untuk anggaran -->
                                @error('tanggal')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Email</label>
                                <input type="text" class="form-control @error('saya') is-invalid @enderror"
                                    name="email" value="{{$saya->email}}">

                                <!-- error message untuk anggaran -->
                                @error('email')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Resume</label>
                                <input type="text" class="form-control @error('resume') is-invalid @enderror"
                                    name="resume" value="{{$saya->resume}}" placeholder="Masukkan resume ">

                                <!-- error message untuk resume -->
                                @error('resume')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                    name="alamat" value="{{$saya->alamat}}" placeholder="Masukkan alamat ">

                                <!-- error message untuk alamat -->
                                @error('alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">No Hp</label>
                                <input type="text" class="form-control @error('no_hp') is-invalid @enderror"
                                    name="no_hp" value="{{$saya->no_hp}}" placeholder="Masukkan no_hp ">

                                <!-- error message untuk no_hp -->
                                @error('no_hp')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Riwayat Pendidikan</label>
                                <input type="text" class="form-control @error('riwayatPendidikan') is-invalid @enderror"
                                    name="riwayatPendidikan" value="{{$saya->riwayatPendidikan}}" placeholder="Masukkan riwayatPendidikan ">

                                <!-- error message untuk riwayatPendidikan -->
                                @error('riwayatPendidikan')
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

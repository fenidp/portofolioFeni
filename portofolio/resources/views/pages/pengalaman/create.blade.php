@extends('layouts.main')
@section('konten')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('pengalaman.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold">Posisi</label>
                                <input type="text" class="form-control @error('posisi') is-invalid @enderror"
                                    name="posisi" value="{{ old('posisi') }}" placeholder="Masukkan posisi">

                                <!-- error message untuk posisi -->
                                @error('posisi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Nama Kegiatan</label>
                                <input type="text" class="form-control @error('namaKegiatan') is-invalid @enderror"
                                    name="namaKegiatan" value="{{ old('namaKegiatan') }}" placeholder="Masukkan Nama Kegiatan Anda">

                                <!-- error message untuk namaKegiatan -->
                                @error('id')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Tahun</label>
                                <input type="text" class="form-control @error('tahun') is-invalid @enderror"
                                    name="tahun" value="{{ old('tahun') }}" placeholder="Masukkan tahun ">

                                <!-- error message untuk tahun -->
                                @error('id')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Deksripsi</label>
                                <input type="text" class="form-control @error('deskripsi') is-invalid @enderror"
                                    name="deskripsi" value="{{ old('deskripsi') }}" placeholder="Masukkan deskripsi ">

                                <!-- error message untuk deskripsi -->
                                @error('id')
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

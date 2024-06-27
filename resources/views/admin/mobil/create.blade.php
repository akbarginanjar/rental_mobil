@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Mobil </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.create', $user->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="foto" class="col-md-4 col-form-label text-md-right">Foto Mobil</label>

                            <div class="col-md-6">
                                <input id="foto" type="file"
                                    class="form-control @error('foto') is-invalid @enderror" name="foto"
                                    required autocomplete="foto">

                                @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="plat" class="col-md-4 col-form-label text-md-right">Plat Mobil</label>

                            <div class="col-md-6">
                                <input id="plat" type="text"
                                    cgitglass="form-control @error('plat') is-invalid @enderror" plat="plat"
                                    required autocomplete="plat" autofocus>

                                @error('plat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nomor_mobil" class="col-md-4 col-form-label text-md-right">Nomor Mobil </label>

                            <div class="col-md-6">
                                <input id="nomor_mobil" type="nomor_mobil"
                                    class="form-control @error('nomor_mobil') is-invalid @enderror" name="nomor_mobil"
                                    required autocomplete="nomor_mobil">

                                @error('nomor_mobil')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="merk" class="col-md-4 col-form-label text-md-right">Merk Mobil</label>

                            <div class="col-md-6">
                                <input id="merk" type="tetxt"
                                    class="form-control @error('merk') is-invalid @enderror" name="merk"
                                    required autocomplete="merk">

                                @error('merk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jenis" class="col-md-4 col-form-label text-md-right">Jenis Mobil</label>

                            <div class="col-md-6">
                                <input id="jenis" type="tetxt"
                                    class="form-control @error('jenis') is-invalid @enderror" name="jenis"
                                    required autocomplete="jenis">

                                @error('jenis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="deskripsi" class="col-md-4 col-form-label text-md-right">Deskripsi Mobil</label>

                            <div class="col-md-6">
                                <input id="deskripsi" type="tetxt"
                                    class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi"
                                    required autocomplete="deskripsi">

                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="harga_sewa" class="col-md-4 col-form-label text-md-right">Harga Sewa Mobil</label>

                            <div class="col-md-6">
                                <input id="harga_sewa" type="tetxt"
                                    class="form-control @error('harga_sewa') is-invalid @enderror" name="harga_sewa"
                                    required autocomplete="harga_sewa">

                                @error('harga_sewa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">Status Mobil</label>

                            <div class="col-md-6">
                                <input id="status" type="tetxt"
                                    class="form-control @error('status') is-invalid @enderror" name="status"
                                    required autocomplete="status">

                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                                
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

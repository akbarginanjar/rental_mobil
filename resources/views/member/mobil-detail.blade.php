@extends('layouts.member')

@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight"
        style="background-image: url('{{ asset('assets/member/images/bg_3.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Beranda <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Mobil <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Detail Mobil</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="card border-0 ftco-animate"
                style="box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.048); border-radius: 15px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="{{ $mobil->gambar() }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-sm">
                            <h3 class="mt-3"><b>{{ $mobil->merk }}</b></h3>
                            <h4 class=""><b class="text-primary"> Rp.
                                    {{ number_format($mobil->harga_sewa, 0, ',', '.') }} </b><span
                                    style="font-size: 13px;">/Perhari</span></h4>
                            <div class="rounded float-left"
                                style="padding: 2px 5px; font-size: 12px; color:white; background: rgb(63, 195, 42);">
                                Tersedia</div><br>
                            <hr>
                            <table>
                                <tr>
                                    <td style="width: 150px;">Jenis</td>
                                    <td style="width: 20px;">:</td>
                                    <td>{{ $mobil->jenis }}</td>
                                </tr>
                                <tr>
                                    <td>Nomor Mobil</td>
                                    <td>:</td>
                                    <td>{{ $mobil->nomor_mobil }}</td>
                                </tr>
                                <tr>
                                    <td>Nomor Plat</td>
                                    <td>:</td>
                                    <td>{{ $mobil->plat }}</td>
                                </tr>
                            </table><br>
                            <b style="font-size: 12px;">Deskripsi</b><br>
                            {{ $mobil->deskripsi }}
                            <hr>
                            <form action="/member/mobil/{{ $mobil->id }}/sewa" method="post">
                                @csrf
                                <button type="submit" class="btn btn-primary float-right"
                                    style="border-radius: 30px; width: 200px;">Sewa
                                    Sekarang</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

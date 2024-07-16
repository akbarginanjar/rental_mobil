@extends('layouts.member')

@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight"
        style="background-image: url('{{ asset('assets/member/images/bg_3.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Beranda <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Tentang Kami <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Tentang Kami</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-about">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                    style="background-image: url({{ asset('assets/member/images/about.jpg') }});">
                </div>
                <div class="col-md-6 wrap-about ftco-animate">
                    <div class="heading-section heading-section-white pl-md-5">
                        <span class="subheading">Tentang Kami</span>
                        <h2 class="mb-4">Selamat Datang Di RENT MOOBIL</h2>

                        <p>Perusahaan kami di dirikan sejak tahun 2020 yang berpusat di Jl Soekarno Hatta leuwipanjang
                            bandung</p>
                        <p>Kami siap menyediakan berbagai jenis dan tipe mobil yang bisa anda pilih untuk menemani
                            pengalaman menyetir di Kota Bandung</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-intro" style="background-image: url({{ asset('assets/member/images/bg_3.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 heading-section heading-section-white ftco-animate">
                    <h2 class="mb-3">Siapkah anda berkeliling Kota bandung? Mulailah pilih mobil yang ingin anda kendarai
                        di RENT MOOBIL.</h2>
                    <a href="/mobil" class="btn btn-primary btn-lg">Mulai Rental Sekarang</a>
                </div>
            </div>
        </div>
    </section>
@endsection

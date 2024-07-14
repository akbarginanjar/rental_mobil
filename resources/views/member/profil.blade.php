@extends('layouts.member')

@section('content')


<section class="hero-wrap hero-wrap-2 js-fullheight"
        style="background-image: url('{{ asset('images/mobil bmw.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Beranda <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Profile <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Dasboard Profile</h1>
                </div>
            </div>
        </div>
    </section>

    
    <section class="ftco-section bg-light">
        
        <div class="container-fluid">
<div class="row">
        <div class="col-lg-4">
            <h4 class="card-title">Detail Data Pribadi</h4>
            <div class="card">
                <div class="card-body">
                   
                    
                  
                        <div class="ms-3">
                            <h5 class="mb-0 fw-bold">Nama</h5>
                        </div>
                        <br>
                        
                        <div class="ms-3">
                            <h5 class="mb-0 fw-bold">Email</h5>
                        </div>
                        <br>

                        <div class="ms-3">
                            <h5 class="mb-0 fw-bold">No Telpon</h5>
                        </div>
                        <br>
                        <div class="ms-3">
                            <h5 class="mb-0 fw-bold">Alamat</h5>
                        </div>
                        <br>
        </div>
        </div>
        </div>
        
        <div class="col-sm">
            <div class="col-lg-4">
                <h4 class="card-title">Detail Mobil</h4>
                <div class="card">
                    <div class="container-fluid">
                    <div class="ms-3">
                        
                        <h5 class="mb-0 fw-bold">Jumlah Mobil Yang Sedang Disewa</h5>
                    </div>
                    <div class="ms-3">
                        
                        <h5 class="mb-0 fw-bold">2</h5>
                    <div class="card-body">
                    </div>
                </div>
            </div>
                    
        </div>
</div>
        </div>
</div>
<br>
<br>
<br>



<div class="container-fluid">
    <h4 class="card-title">Mobil Yang Sedang di Sewa</h4>
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex align-items-center">
                        <div>
                            <div class="card ftco-animate mt-3"
                            style="box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.099); border-radius: 15px; border-right: 5px solid rgb(230, 25, 25);">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-50">
                                        <img src="http://localhost:8000/images/mobil/6310mobil%20bmw.jpg" style="width: 200px;" alt="">
                                    </div>
                                    <div class="col-sm">
                                        <div style="font-size: 13px;">Merk Mobil</div>
                                        <span class="cat">BMW</span>
                                        <p class="price ml-auto">Rp. 800.000 <span>/day</span></p>
                                        <h5><b></b></h5>
                                        <div style="font-size: 13px;">Jenis</div>
                                        <span class="cat">Sedan</span>
                                        
                                        <b class=""></b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                            
                        </div>
                        <div class="ms-auto d-flex no-block align-items-center">
                        </div>
                    </div>

                    <div class="d-md-flex align-items-center">
                        <div>
                            <div class="card ftco-animate mt-3"
                            style="box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.099); border-radius: 15px; border-right: 5px solid rgb(230, 25, 25);">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-50">
                                        <img src="http://localhost:8000/images/mobil/2747mobil%20mazda.jpg" style="width: 200px;" alt="">
                                    </div>
                                    <div class="col-sm">
                                        <div style="font-size: 13px;">Merk Mobil</div>
                                        <span class="cat">Mazda</span>
                                        <p class="price ml-auto">Rp. 350.000 <span>/day</span></p>
                                        <h5><b></b></h5>
                                        <div style="font-size: 13px;">Jenis</div>
                                        <span class="cat">Sedan</span>
                                        
                                        <b class=""></b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                            
                        </div>
                        <div class="ms-auto d-flex no-block align-items-center">
                        </div>
                    </div>

                    <div class="amp-pxl mt-4" style="height: 250px;">
                        <div class="chartist-tooltip"></div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    {{-- <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
              
                    <div class="col-md-4">
                        <div class="car-wrap rounded ftco-animate">
                            <div class="img rounded d-flex align-items-end"
                                style="background-image: url({{ $item->gambar() }});">
                            </div>
                            <div class="text">
                                <h2 class="mb-0"><a href="/mobil/{{ $item->slug }}">{{ $item->merk }}</a></h2>
                                <div class="d-flex mb-1">
                                    <span class="cat">{{ $item->jenis }}</span>
                                    <p class="price ml-auto">Rp.
                                        {{ number_format($item->harga_sewa, 0, ',', '.') }}<span>/Perhari</span></p>
                                </div>
                                @if ($item->status == 'Tersedia')
                                    <div class="rounded float-left"
                                        style="padding: 2px 5px; font-size: 12px; color:white; background: rgb(63, 195, 42);">
                                        Tersedia</div><br>
                                @else
                                    <div class="rounded bg-warning float-left"
                                        style="padding: 2px 5px; font-size: 12px; color:white;">
                                        Sedang disewa</div><br>
                                @endif
                                @if ($item->status == 'Tersedia')
                                    <a href="/mobil/{{ $item->slug }}"
                                        class="btn btn-secondary btn-block mt-3">Booking</a>
                                @else
                                    <a href="/mobil/{{ $item->slug }}"
                                        class="btn btn-secondary btn-block mt-3 disabled">Booking</a>
                                @endif
                            </div>
                        </div>
                    </div>
              
            </div>
        </div>
    </section> --}}
@endsection

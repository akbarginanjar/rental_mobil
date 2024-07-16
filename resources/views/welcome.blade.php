@extends('layouts.member')

@section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('{{ asset('images/bg-welcome.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
                <div class="col-lg-9 ftco-animate">
                    <div class="text w-100 text-center mb-md-5 pb-md-5">
                        <h1 class="mb-4">Cara Mudah Untuk Menyewa Mobil</h1>
                        <p style="font-size: 18px;">Sebuah sungai kecil bernama Duden mengalir di dekat tempat mereka dan
                            memasok
                            regelialia yang diperlukan. Ini adalah negara surga, di mana bagian yang dipanggang </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12	featured-top">
                    <div class="row no-gutters">
                        <div class="col-md d-flex align-items-center">
                            {{-- <form action="#" class="request-form ftco-animate bg-primary">
                                <h2>Rencanakan perjalanan anda</h2>
                                <div class="form-group">
                                    <label for="" class="label">Pick-up location</label>
                                    <input type="text" class="form-control" placeholder="City, Airport, Station, etc">
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Drop-off location</label>
                                    <input type="text" class="form-control" placeholder="City, Airport, Station, etc">
                                </div>
                                <div class="d-flex">
                                    <div class="form-group mr-2">
                                        <label for="" class="label">Pick-up date</label>
                                        <input type="text" class="form-control" id="book_pick_date" placeholder="Date">
                                    </div>
                                    <div class="form-group ml-2">
                                        <label for="" class="label">Drop-off date</label>
                                        <input type="text" class="form-control" id="book_off_date" placeholder="Date">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Pick-up time</label>
                                    <input type="text" class="form-control" id="time_pick" placeholder="Time">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Rent A Car Now" class="btn btn-secondary py-3 px-4">
                                </div>
                            </form> --}}
                        </div>
                        <div class="col-md-12 d-flex align-items-center">
                            <div class="services-wrap rounded-right w-100">
                                <h3 class="heading-section mb-4">Cara yang Lebih Baik untuk Menyewa Mobil Sempurna Anda</h3>
                                <div class="row d-flex mb-4">
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="flaticon-route"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Pilih Lokasi Penjemputan Anda</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="flaticon-handshake"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Pilih Penawaran Terbaik</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="flaticon-rent"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Pesan Mobil Rental Anda</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="/mobil" class="btn btn-primary py-3 px-4">Pesan Mobil</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    {{-- <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">What we offer</span>
                    <h2 class="mb-2">Feeatured Vehicles</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-car owl-carousel">
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url({{ asset('assets/member/images/car-1.jpg') }});">
                                </div>
                                <div class="text">
                                    <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                                    <div class="d-flex mb-3">
                                        <span class="cat">Cheverolet</span>
                                        <p class="price ml-auto">$500 <span>/day</span></p>
                                    </div>
                                    <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book
                                            now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url({{ asset('assets/member/images/car-2.jpg') }});">
                                </div>
                                <div class="text">
                                    <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                                    <div class="d-flex mb-3">
                                        <span class="cat">Cheverolet</span>
                                        <p class="price ml-auto">$500 <span>/day</span></p>
                                    </div>
                                    <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book
                                            now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url({{ asset('assets/member/images/car-3.jpg') }});">
                                </div>
                                <div class="text">
                                    <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                                    <div class="d-flex mb-3">
                                        <span class="cat">Cheverolet</span>
                                        <p class="price ml-auto">$500 <span>/day</span></p>
                                    </div>
                                    <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book
                                            now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url({{ asset('assets/member/images/car-4.jpg') }});">
                                </div>
                                <div class="text">
                                    <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                                    <div class="d-flex mb-3">
                                        <span class="cat">Cheverolet</span>
                                        <p class="price ml-auto">$500 <span>/day</span></p>
                                    </div>
                                    <p class="d-flex mb-0 d-block"><a href="#"
                                            class="btn btn-primary py-2 mr-1">Book now</a> <a href="#"
                                            class="btn btn-secondary py-2 ml-1">Details</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="ftco-section ftco-about">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                    style="background-image: url({{ asset('assets/member/images/about.jpg') }});">
                </div>
                <div class="col-md-6 wrap-about ftco-animate">
                    <div class="heading-section heading-section-white pl-md-5">
                        <span class="subheading">Tentang Kami</span>
                        <h2 class="mb-4">Selamat Datang di RENT MOOBIL</h2>

                        <p>Selamat datang di RENT MOBIL Kami! penyedia solusi transportasi terdepan yang siap memenuhi
                            segala kebutuhan perjalanan Anda dengan armada mobil terbaru, layanan prima, dan harga yang
                            kompetitif. Kami berkomitmen untuk memberikan pengalaman berkendara yang nyaman, aman, dan
                            menyenangkan bagi setiap pelanggan kami, baik untuk perjalanan bisnis, liburan keluarga, maupun
                            acara khusus. Dengan proses pemesanan yang mudah dan dukungan pelanggan 24/7, kami berharap
                            dapat menjadi mitra terpercaya Anda dalam setiap perjalanan. Terima kasih telah memilih kami,
                            dan semoga Anda menikmati perjalanan Anda bersama kami!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Layanan</span>
                    <h2 class="mb-3">Layanan Terbaru Kami</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-wedding-car"></span></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Acara Pernikahan</h3>
                            <p>Nikmati layanan rental mobil premium kami untuk acara pernikahan Anda, lengkap dengan
                                dekorasi elegan dan sopir profesional, memastikan hari istimewa Anda berjalan sempurna.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-transportation"></span></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Perpindahan Kota</h3>
                            <p>Nikmati kemudahan layanan antar-jemput antar kota dengan armada kami, menjadikan perjalanan
                                Anda lebih efisien dan nyaman.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-car"></span></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Antar Jemput Bandara</h3>
                            <p>Nikmati kemudahan layanan antar jemput bandara dari Rental Mobil Kami.
                                Kami siap menjemput Anda tepat waktu dan mengantar Anda ke tujuan dengan nyaman dan aman.
                                Pilihlah kami untuk pengalaman perjalanan yang bebas stres dan menyenangkan!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-transportation"></span></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Tur Seluruh Kota</h3>
                            <p>Nikmati fitur unggulan kami, yaitu layanan antar tur seluruh kota! Dengan kendaraan yang
                                nyaman dan sopir berpengalaman, Anda bisa menjelajahi setiap sudut kota dengan tenang dan
                                aman. Sempurnakan perjalanan Anda bersama Rental Mobil Kami! </p>
                        </div>
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
                    <h2 class="mb-3">Apakah Anda Ingin Menghasilkan Uang Bersama Kami? Jadi Jangan Terlambat.</h2>
                    <a href="/mobil" class="btn btn-primary btn-lg">Mulai Rental Sekarang</a>
                </div>
            </div>
        </div>
    </section>


    {{-- <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Testimoni</span>
                    <h2 class="mb-3">Pelanggan Senang</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap rounded text-center py-4 pb-5">
                                <div class="user-img mb-2"
                                    style="background-image: url({{ asset('assets/member/images/person_1.jpg') }})">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Saya suka dengan layanan rental mobil karna mobil bersih dan datang
                                        tepat waktu. </p>
                                    <p class="name">Fika</p>
                                    <span class="position">Bandung</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap rounded text-center py-4 pb-5">
                                <div class="user-img mb-2"
                                    style="background-image: url({{ asset('assets/member/images/person_2.jpg') }})">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Kami menyewa mobil kecil selama 3 hari. Semuanya berjalan dengan
                                        sangat baik. Mobil diantarkan ke hotel. Serah terima sangat tepat waktu, semuanya
                                        dijelaskan dengan baik.
                                        Nomor telepon dipertukarkan sehingga kami dapat segera dihubungi jika ada masalah.
                                        Jadi kami sangat puas. </p>
                                    <p class="name">Kevin</p>
                                    <span class="position">Bandung</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap rounded text-center py-4 pb-5">
                                <div class="user-img mb-2"
                                    style="background-image: url({{ asset('assets/member/images/person_3.jpg') }})">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Rental mobil yang profesional dan sangat membantu.
                                        Layanan antar dan jemput mobil di bandara yang fantastis.Mobil yang terawat dengan
                                        baik. Sangat direkomendasikan!</p>
                                    <p class="name">Adelia</p>
                                    <span class="position">Garut</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap rounded text-center py-4 pb-5">
                                <div class="user-img mb-2"
                                    style="background-image: url({{ asset('assets/member/images/person_1.jpg') }})">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Kami menerima mobil sewaan yang kami inginkan di hotel di Mauritius
                                        tepat waktu, bahkan 45 menit lebih awal dari yang dijadwalkan.</p>
                                    <p class="name">Rizki</p>
                                    <span class="position">Katapang</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap rounded text-center py-4 pb-5">
                                <div class="user-img mb-2"
                                    style="background-image: url({{ asset('assets/member/images/person_1.jpg') }})">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Staf yang ramah, mediasi yang baik, harga yang wajar. Ketika saya
                                        lupa membawa kacamata mahal saya di laci
                                        dasbor saat menjelajahi pulau pertama di Seychelles, mereka mengatur agar saya
                                        mengambilnya di bandara sebelum keberangkatan!</p>
                                    <p class="name">Nabila</p>
                                    <span class="position">Garut</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <section class="ftco-counter ftco-section img bg-light" id="section-counter">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="72">0</strong>
                            <span>Jumlah<br>Penlanggan</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="12">0</strong>
                            <span>Total <br>Mobil</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="97">0</strong>
                            <span>Rating <br>Kami</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text d-flex align-items-center">
                            <strong class="number" data-number="1">0</strong>
                            <span>Total <br>Cabang</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

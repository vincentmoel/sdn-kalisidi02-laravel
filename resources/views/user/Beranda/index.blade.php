<style>

    .berita .card {
        background-color: #EFEFEF;
    }

    .berita a {
        text-decoration: none;
        color: black;
    }

    .berita a:hover {
        color: #328DE1;
    }

    .card-img-top {
        width: 100%;
        height: 196px;
        object-fit: cover;
    }

    .pict-berita img {
        width: 100%;
        height: 119px;
        object-fit: cover;
    }

    .card-text {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2; /* number of lines to show */
                line-clamp: 2; 
        -webkit-box-orient: vertical;
    }
</style>


@extends('layout.user.main',['title' => "SD Negri Kalisidi 02"])


@section('container')

    {{-- slider --}}
    <div style="margin-top: 84px"></div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="/images/slider/slide-1.png" class="d-block w-100 img-fluid" alt="...">    
                </div>
                <div class="carousel-item">
                <img src="/images/slider/slide-2.png" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <a href="/guru-staff" class="btn btn-lg text-light py-3 border border-light" style="width: 80%; background-image: linear-gradient(to right, #6166b3, #3b80c7, #0098d1, #00add2, #32c1cd); border-radius: 10px"><b>Daftar Guru dan Staff</b></a>
                        </div>
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                <img src="/images/slider/slide-3.png" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <a href="/guru-staff" class="btn btn-lg text-light py-3 border border-light" style="width: 80%; background-image: linear-gradient(to right, #6166b3, #3b80c7, #0098d1, #00add2, #32c1cd); border-radius: 10px"><b>Daftar Siswa</b></a>
                        </div>
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                <img src="/images/slider/slide-4.png" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <a href="/guru-staff" class="btn btn-lg text-light py-3 border border-light" style="width: 80%; background-image: linear-gradient(to right, #6166b3, #3b80c7, #0098d1, #00add2, #32c1cd); border-radius: 10px"><b>Galeri Selengkapnya</b></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
    {{-- visi --}}
    <div class="container">
        <div class="row justify-content-center my-4 py-3">
            <div class="col-12 text-center">
                <h1 class="text-dark">VISI</h1>
            </div>
            <div class="col-lg-5 col-12 text-center">
                <p style="font-size: 20px">“Terwujudnya peserta didik yang beriman, bertaqwa, dan berbudaya, berprestasi, berbudi pekerti luhur, serta cinta terhadap lingkungan”</p>
            </div>
        </div>
    </div>


    {{-- profil singkat --}}
    <div class="container-fluid" style="background-image: linear-gradient(to right, #89b5af, #76b4af, #60b2b0, #43b0b3, #00aeb7);">
        <div class="container w-75 mx-auto py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12 text-center">
                    <img src="/images/mmt.png" style="width: 90%" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 col-12 text-center">
                    <h2 class="pb-2 text-center py-4">PROFIL SINGKAT</h2>
                    <p style="font-size: 18px" class="w-75 mx-auto pb-2 text-center">SD Negeri Kalisidi 02 adalah sekolah dasar yang terletak di Manikmoyo, Kalisidi, Kecamatan Ungaran Barat, Semarang yang berdiri sejak 1987.</p>
                    <a href="/tentang" class="btn btn-dark text-center" style="color: #96C7C1; border-radius: 10px">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>


    {{-- Berita Terbaru --}}
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-5 col-12 ">
                <div class="row py-4">
                    <div class="col-12 text-center">
                        <h3>BERITA TERBARU</h3>
                    </div>
                </div>
                <div class="row row-cols-1 g-3">
                    @foreach ($recentNews as $news)
                        
                        <div class="col berita">
                            <a href="/berita/{{ $news->slug }}" class="card h-100 " >
                                <div class="row">
                                    <div class="col-lg-4 pict-berita">
                                        <img src="{{ asset('images/uploads/' . $news->image) }}" class="img-fluid rounded-start " alt="">
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $news->title }}</h5>
                                            <p class="card-text" style="font-size: 16px">{!! $news->excerpt !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    
                    <div class="col">
                        <div href="" class="card h-100 border-0" >
                            <div class="row">
                                <div class="col-12">
                                    <div class="card-body text-center">
                                        <a href="/berita" class="btn btn-lg btn-primary py-3" style="background-image: linear-gradient(to right, #173656, #1a4571, #1d558d, #2165a9, #2776c7); width: 50%">Berita Lainnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- galeri --}}
            <div class="col-lg-5 offset-lg-2 col-12 ">
                <div class="row py-4">
                    <div class="col-12 text-center">
                        <h3>GALERI</h3>
                    </div>
                    <div class="row row-cols-lg-2 row-cols-1 g-2">
                        @foreach ($recentGaleries as $galery)
                            <div class="col berita">
                                <div class="card">
                                    <img src="{{ asset('images/uploads/' . $galery->image) }}" class="card-img-top" id="myImg" alt="ini foto 1">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">{{ $galery->title }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                        <div class="col text-center">
                            
                                    <a href="/galeri" class="btn btn-lg btn-primary py-3" style="background-image: linear-gradient(to right, #173656, #1a4571, #1d558d, #2165a9, #2776c7); width: 90%; margin-top: 100px">Galeri Lainnya</a>

                            </div>
                        </div>

                        {{-- beranda galeri modal
                        <div class="modal fade" id="berandaGaleriiModal" tabindex="1" aria-labelledby="berandaGaleriModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="berandaGaleriModalLabel">judul foto</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="/images/gurustaff-ex.png" class="img-fluid mx-auto" alt="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>

    

    
    

@endsection
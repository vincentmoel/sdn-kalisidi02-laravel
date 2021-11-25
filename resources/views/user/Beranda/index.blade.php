<style>

    .berita .card {
        background-color: #E4E4E4;
    }

    .berita a {
        text-decoration: none;
        color: black;
    }

    .berita a:hover {
        color: #328DE1;
    }

    #myImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    #myImg:hover {opacity: 0.7;}

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
    }

    /* Caption of Modal Image */
    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }

    /* Add Animation */
    .modal-content, #caption {  
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
        from {-webkit-transform:scale(0)} 
        to {-webkit-transform:scale(1)}
    }

    @keyframes zoom {
        from {transform:scale(0)} 
        to {transform:scale(1)}
    }

    /* The Close Button */
    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (min-width: 700px){
        .modal-content {
            width   : 100%;
        }
    }
</style>


@extends('layout.user.main',['title' => "Beranda"])


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
                            <a href="/guru-staff" class="btn btn-lg text-light py-3 border border-light" style="width: 80%; background-color: #79B4B7"><b>Daftar<br>Guru dan Staff</b></a>
                        </div>
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                <img src="/images/slider/slide-3.png" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <a href="/guru-staff" class="btn btn-lg text-light py-3 border border-light" style="width: 80%; background-color: #79B4B7"><b>Daftar Siswa</b></a>
                        </div>
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                <img src="/images/slider/slide-4.png" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <a href="/guru-staff" class="btn btn-lg text-light py-3 border border-light" style="width: 80%; background-color: #79B4B7"><b>Lihat Galeri Selengkapnya</b></a>
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
    <div class="container-fluid" style="background-color: #89B5AF">
        <div class="container w-75 mx-auto py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12 text-center">
                    <img src="/images/slider/1.png" style="width: 90%" class="img-fluid" alt="">
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
                                    <div class="col-lg-4">
                                        <img src="{{ asset('images/uploads/' . $news->image) }}" class="img-fluid rounded-start" alt="">
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
                                        <a href="/berita" class="btn btn-lg btn-primary" style="background-image: linear-gradient(to right, #173656, #1a4571, #1d558d, #2165a9, #2776c7); width: 60%">Berita Lainnya</a>
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
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        
        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
          modal.style.display = "none";
        }
    </script>
    

@endsection

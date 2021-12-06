<style>
    .pict-berita img {
        width: 100%;
        height: 139px;
        object-fit: cover;
    }

    .berita a,
    .berita-populer a {
        color: black;
        text-decoration: none;
        border-color: white;
    }

    a:hover {
        color: #1277cb;
        border-color: #1277cb;
    }

    .berita-populer img {
        width: 100%;
        height: 90px;
        object-fit: cover;
    }

</style>

@extends('layout.user.main',['title'=>'Berita'])


@section('container')
    <div style="margin-top: 84px"></div>
    <div class="container-fluid py-5"
        style="background-image: linear-gradient(to right top, #0081c0, #0098cb, #00adc5, #00bfb0, #00ce91)">
        <div class="row">
            <div class="col-12 text-center text-light">
                <h1>Berita Sekolah</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5" style="background-color: #EFEFEF">
        <div class="container w-75 mx-auto bg-light">
            <div class="row pt-4 mx-3">
                <div class="col-3 py-2 text-center" style="background-color: #1277cb">
                    <h3 class="text-light">Berita Terbaru</h3>
                </div>

                <hr style="border: solid #1277cb">
            </div>

            <div class="row mx-3 pb-4">
                <div class="col-lg-9 col-12">
                    <div class="row row-cols-1 g-3">
                        @foreach ($allNews as $news)
                            <div class="col berita">
                                <a href="" class="card  h-100">
                                    <div class="row">
                                        <div class="col-lg-3 pict-berita">
                                            <img src="/images/gurustaff-ex.png" class="img-fluid rounded-start" alt="">
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="card-body">
                                                <h4 class="card-title">{{ $news->title }}</h4>
                                                <p style="font-size: 12px" class="mb-0">{{ date_format($news->created_at, 'j F Y') }}</p>
                                                <p style="font-size: 16px" class="mb-0">{!! $news->excerpt !!} </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-lg-3 col-12 bg-light">
                    <div class="row">
                        <div class="col-12 text-center text-light py-2" style="background-color: #1277cb">
                            <h5>Berita </h5>
                        </div>
                    </div>
                    <div class="row row-cols-1 py-2">
                        @foreach ($allNews as $news)
                            
                            <div class="col berita-populer py-2">
                                <a href="" class="card">
                                    <img src="/images/gurustaff-ex.png" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <p class="card-title mb-0"><b>{{ $news->title }}<b></p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

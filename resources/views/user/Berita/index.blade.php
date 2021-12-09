<style>
    .pict-berita img {
        width: 100%;
        height: 150px;
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

    .berita-text p {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3; /* number of lines to show */
                line-clamp: 3; 
        -webkit-box-orient: vertical;
    }

    

</style>

@extends('layout.user.main',['title'=>'Berita'])


@section('container')
    <div style="margin-top: 84px"></div>
    <div class="container-fluid py-5"
    style="background-image: url(/images/header-berita.png)">
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
                <div class="col-lg-12 col-12 mb-3">
                    <div class="row row-cols-1 g-3">
                        @foreach ($allNews as $news)
                            <div class="col berita mb-2">
                                <a href="/berita/{{ $news->slug }}" class="card  h-100">
                                    <div class="row">
                                        <div class="col-lg-3 pict-berita">
                                            <img src="{{ asset('images/uploads/' . $news->image) }}"
                                                class="img-fluid rounded-start" alt="">
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="card-body">
                                                <h4 class="card-title">{{ $news->title }}</h4>
                                                <p style="font-size: 12px" class="mb-0">
                                                    {{ date_format($news->created_at, 'j F Y') }}</p>
                                                <div class="berita-text">
                                                    <p style="font-size: 16px" class="mb-0">{!! $news->excerpt !!}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>


                {{ $allNews->links() }}
            </div>
        </div>
    </div>

@endsection

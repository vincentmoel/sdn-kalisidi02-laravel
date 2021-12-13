@extends('layout.user.main',['title'=>"$news->title"])

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
        <div class="container w-75 mx-auto bg-white">
            <div class="row pt-4 justify-content-center">
                <div class="col-11">
                    <h1>{{ $news->title }}</h1>
                </div>
                <div class="col-11">
                    <p class="text-muted" style="font-size: 14px">{{ date_format($news->created_at, 'j F Y') }}</p>
                </div>
                <hr style="border: solid #1277cb">
            </div>

            <div class="row pb-4 justify-content-center">
                <div class="col-11 text-center pt-2 pb-4">
                    <img src="{{ asset('images/uploads/' . $news->image) }}" class="img-fluid" alt="">
                </div>
                <div class="col-11">
                    <p style="font-size: 16px">{!! $news->body !!}</p>
                </div>
            </div>
        </div>
    </div>


@endsection
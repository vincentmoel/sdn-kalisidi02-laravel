<style>
    .galeri a {
        text-decoration: none;
    }

    .galeri-img img {
        width: 160px;
        height: 160px;
        object-fit: cover;
    }

</style>

@extends('layout.user.main',['title'=>'Galeri'])


@section('container')
    <div style="margin-top: 84px"></div>
    <div class="container-fluid text-light py-5" style="background-image: linear-gradient(to right top, #0081c0, #0098cb, #00adc5, #00bfb0, #00ce91);">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Galeri SD N 02 Kalisidi</h1>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row w-75 mx-auto justify-content-center">
            @foreach ($galeries as $galery)
                
                <div class="col-lg-3 col-12 galeri my-3" >
                    <button type="button" class="figure border btn galeri-img" onclick="showDetails(this)" data-bs-toggle="modal" data-bs-target="#galeriModal" data-title={{ $galery->title }} data-image={{ asset('images/uploads/' . $galery->image) }} style="border-radius: 5px">
                        <img src="{{ asset('images/uploads/' . $galery->image) }}" class="img-fluid" alt="" >
                        <figcaption class="figure-caption text-center py-3" style="font-size: 16px">{{ $galery->title }}</figcaption>
                    </button>
                </div>
            
            @endforeach


            {{-- modal galeri --}}
            <div class="modal fade" id="galeriModal" tabindex="1" aria-labelledby="galeriModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="show-title">asd</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="/images/gurustaff-ex.png" id="show-image" class="img-fluid" alt="">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="d-flex justify-content-center">
        
        {{ $galeries->links() }}
    </div>

    <script>
        function showDetails(photo)
        {
            var title = photo.getAttribute("data-title");
            var image = photo.getAttribute("data-image");
            document.getElementById("show-title").innerHTML = title;
            document.getElementById("show-image").src = image;
        }
;
    </script>
@endsection
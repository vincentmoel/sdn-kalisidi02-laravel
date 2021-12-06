<style>
    .pict-guru-staff img {
        width: 100%;
        height: 153px;
        object-fit: cover;
    }

    .pict-kepsek img {
        width: 100%;
        height: 196px;
        object-fit: cover;
    }

</style>

@extends('layout.user.main',['title'=>'Guru dan Staff'])


@section('container')
    <div style="margin-top: 84px"></div>
    <div class="container-fluid text-light py-5"
        style="background-image: linear-gradient(to right top, #0081c0, #0098cb, #00adc5, #00bfb0, #00ce91);">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Guru dan Staff</h1>
            </div>
        </div>
    </div>
    <div style="margin-top: 40px"></div>
    <div class="container"
        style="background-image: linear-gradient(to right bottom, #f8eed8, #e8ead4, #d8e6d3, #c9e2d4, #bddcd6); border-radius: 10px;">
        <div class="row justify-content-center py-4">

            <div class="col-lg-10 col-11">
                <div class="row justify-content-center my-4">
                    @foreach ($principals as $principal)
                        <div class="col-lg-3 col-6">
                            <div class="card border-dark pict-kepsek">
                                <img src="{{ asset('images/uploads/' . $principal->image) }}" class="card-img-top" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $principal->name }}</h5>
                                    <p class="mb-0">{{ $principal->position->name }}</p>
                                    <p class="mb-0">{{ $principal->nip }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="row justify-content-center row-cols-lg-5 row-cols-2 g-4 my-4">
                    @foreach ($teachers as $teacher)
                        
                    <div class="col">
                        <div class="card border-dark pict-guru-staff">
                            <img src="{{ asset('images/uploads/' . $teacher->image) }}" class="img-card-top" alt="">
                            <div class="card-body text-center   ">
                                <h5 class="card-title">{{ $teacher->name }}</h5>
                                <p class="mb-0">{{ $teacher->position->name }}</p>
                                <p class="mb-0">{{ $teacher->nip }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach




                </div>
            </div>
        </div>
    </div>
    <div style="margin-bottom: 65px"></div>
@endsection

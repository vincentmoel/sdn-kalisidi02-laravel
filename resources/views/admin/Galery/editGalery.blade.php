@extends('layout.admin.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Teacher</h1>
    </div>

    <form action="/admin/galeries/{{ $galery->id }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        

        <div class="form-floating">
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="title"
                value="{{ old('title',$galery->title) }}">
            <label for="title">Title</label>
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <div class="mb-3">
            <label class="form-label">Foto</label>
            <img class="img-preview img-fluid mb-3 col-sm-2">
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                name="image" onchange="previewImage()">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>




        <button class="w-100 btn btn-lg btn-primary" type="submit">Update</button>
    </form>


    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();

            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>



@endsection

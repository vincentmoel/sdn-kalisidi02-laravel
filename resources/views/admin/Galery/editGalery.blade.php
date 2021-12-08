@extends('layout.admin.main')

@section('container')
    <div class="container-fluid my-4 w-75 mx-auto">
        <div class="row">
            <div class="col-12">
                <h1 class="h2">Edit Media</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="/admin/galeries/{{ $galery->id }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    
            
                    <div class="form-floating py-2">
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="title"
                            value="{{ old('title',$galery->title) }}">
                        <label for="title">Judul</label>
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
            
            
                    <div class="mb-3 py-2">
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
            </div>
        </div>
    </div>

    


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

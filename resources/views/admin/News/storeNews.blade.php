@extends('layout.admin.main',['title'=>'SD Negri Kalisidi 02 | Berita'])

@section('container')
    <div class="container-fluid my-4 w-75 mx-auto">
        <div class="row">
            <div class="col-12">
                <h1 class="h2">Tambah Berita</h1>
            </div>
        </div>
        <div class="row">
            <form action="/admin/news" method="post" enctype="multipart/form-data">
                @csrf
                
        
                <div class="form-floating py-2">
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="title"
                        value="{{ old('title') }}">
                    <label for="title">Judul</label>
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                
                <div class="py-2 mb-3">
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
        
        
                <div class="py-2 mb-3">
                    <label class="form-label">Isi</label>
                    <input class="form-control @error('body') is-invalid @enderror" type="hidden" id="body" name="body" value="{{ old('body') }}">
                    @error('body')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
        
                    <trix-editor input="body"></trix-editor>
        
                </div>
        
        
                <button class="w-100 btn btn-lg btn-primary" type="submit">Tambahkan</button>
            </form>
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

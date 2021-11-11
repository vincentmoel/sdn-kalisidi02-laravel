@extends('layout.admin.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Teacher</h1>
    </div>

    <form action="/admin/teachers-staff/{{ $teacher->nip }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="form-floating">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                placeholder="Name" value="{{ old('name',$teacher->name) }}">
            <label for="name">Nama Lengkap</label>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-floating">
            <input type="text" name="nip" class="form-control @error('nip') is-invalid @enderror" id="nip" placeholder="nip"
                value="{{ old('nip',$teacher->nip) }}">
            <label for="nip">NIP</label>
            @error('nip')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="L" @if(old('gender',$teacher->gender) == "L" ) checked @endif>
                <label class="form-check-label" for="flexRadioDefault1">
                    Laki - Laki
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="P" @if(old('gender',$teacher->gender) == "P") checked @endif>
                <label class="form-check-label" for="flexRadioDefault2">
                    Perempuan
                </label>
            </div>



            @error('gender')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <div class="mb-3">
            <label class="form-label">Jabatan</label>

            <select class="form-select" name="position_id">
                @foreach ($positions as $position)
                    @if (old('position_id',$teacher->position_id) == $position->id)
                        <option value="{{ $position->id }}" selected>{{ $position->name }}</option>

                    @else
                        <option value="{{ $position->id }}">{{ $position->name }}</option>
                    @endif
                @endforeach
            </select>



            @error('position_id')
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




        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
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

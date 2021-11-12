@extends('layout.admin.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add student</h1>
    </div>

    <form action="/admin/students/{{ $student->id }}" method="post">
        @method('put')
        @csrf
        <div class="form-floating">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                placeholder="Name" value="{{ old('name',$student->name) }}">
            <label for="name">Nama Lengkap</label>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-floating">
            <input type="text" name="nisn" class="form-control @error('nisn') is-invalid @enderror" id="nisn" placeholder="nisn"
                value="{{ old('nisn',$student->nisn) }}">
            <label for="nisn">nisn</label>
            @error('nisn')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="L" @if(old('gender',$student->gender) == "L" ) checked @endif>
                <label class="form-check-label" for="flexRadioDefault1">
                    Laki - Laki
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="P" @if(old('gender',$student->gender) == "P") checked @endif>
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


        

        <div class="form-floating">
            <input type="text" name="birthplace" class="form-control @error('birthplace') is-invalid @enderror" id="birthplace"
                value="{{ old('birthplace',$student->birthplace) }}">
            <label for="birthplace">Tempat Lahir</label>
            @error('birthplace')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-floating">
            <input type="date" name="birthdate" class="form-control @error('birthdate') is-invalid @enderror" id="birthdate"
                value="{{ old('birthdate',$student->birthdate) }}">
            <label for="birthdate">Tanggal Lahir</label>
            @error('birthdate')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>



        <div class="mb-3">
            <label class="form-label">Agama</label>

            <select class="form-select" name="religion_id">
                @foreach ($religions as $religion)
                    @if (old('religion_id',$student->religion_id) == $religion->id)
                        <option value="{{ $religion->id }}" selected>{{ $religion->name }}</option>

                    @else
                        <option value="{{ $religion->id }}">{{ $religion->name }}</option>
                    @endif
                @endforeach
            </select>



            @error('position_id')
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

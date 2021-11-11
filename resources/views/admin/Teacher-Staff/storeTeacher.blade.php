@extends('layout.admin.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Teacher</h1>
    </div>

    <form action="/admin/users" method="post">
        @csrf
        <div class="form-floating">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                placeholder="Name" value="{{ old('name') }}">
            <label for="name">Nama Lengkap</label>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-floating">
            <input type="text" name="nip" class="form-control @error('nip') is-invalid @enderror" id="nip"
                placeholder="nip" value="{{ old('nip') }}">
            <label for="nip">NIP</label>
            @error('nip')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>

            <select class="form-select" name="id_gender">
                
            </select>



            @error('gender')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        

        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    </form>




@endsection

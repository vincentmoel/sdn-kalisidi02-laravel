@extends('layout.admin.main')

@section('container')
    <div class="container-fluid my-4">
        <div class="row">
            <div class="col-12">
                <h1 class="h2">Add Admin</h1>
            </div>
        </div>
        <div class="row">
            <form action="/admin/users" method="post">
                @csrf
                <div class="form-floating py-2">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                        placeholder="Name" value="{{ old('name') }}">
                    <label for="name">Nama Lengkap</label>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
        
                <div class="form-floating py-2">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username"
                        placeholder="Username" value="{{ old('username') }}">
                    <label for="username">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
        
                
        
                <div class="form-floating py-2">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                        id="password" placeholder="Password">
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
        
                <div class="mb-3 py-2">
                    <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
        
                    <input class="form-control @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation">
        
             
                </div>
        
                <button class="w-100 btn btn-lg btn-primary" type="submit">Tambahkan</button>
            </form>
        </div>
    </div>

@endsection

@extends('layout.user.main',['title'=>'Login'])



@section('container')

@if (session()->has('errorLogin'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('errorLogin') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<div style="margin-top: 100px"></div>
<main class="form-signin mt-5 w-25 mx-auto">
    <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
    <form action="/login" method="post">
      @csrf
      <div class="form-floating py-2">
        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" autofocus required>
        <label for="username">Username</label>

        @error('username')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      

      <div class="form-floating py-2">
        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
        <label for="password">Password</label>


      </div>
  
      <button class="w-100 my-2 btn btn-lg btn-primary" type="submit">Login</button>
    </form>
</main>


  

@endsection
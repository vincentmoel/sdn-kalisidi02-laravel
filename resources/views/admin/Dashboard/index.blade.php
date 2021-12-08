@extends('layout.admin.main',['title'=>'Dashboard'])


@section('container')
    <div class="container-fluid my-5">
        <div class="row row-cols-lg-2 row-cols-1 g-4 justify-content-center">
        <div class="col">
            <div class="card h-100">
                <div class="card-body text-center">
                    <h4 class="card-title">Total Guru</h4>
                    <h1 class="card-text py-2">{{ $totalTeachersStaff }}</h1>
                    <a href="/admin/teachers-staff" class="btn btn-lg px-4 btn-primary">Detail</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100" >
                <div class="card-body text-center">
                    <h4 class="card-title">Total Murid</h4>
                    <h1 class="card-text py-2">{{ $totalStudents }}</h1>
                    <a href="/admin/newss" class="btn btn-lg px-4 btn-primary">Detail</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100" >
                <div class="card-body text-center">
                    <h4 class="card-title">Total Berita</h4>
                    <h1 class="card-text py-2">{{ $totalNews }}</h1>
                    <a href="/admin/news" class="btn btn-lg px-4 btn-primary">Detail</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100" >
                <div class="card-body text-center">
                    <h4 class="card-title">Total Foto Galeri</h4>
                    <h1 class="card-text py-2">{{ $totalGaleries }}</h1>
                    <a href="/admin/galeries" class="btn btn-lg px-4 btn-primary">Detail</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100" >
                <div class="card-body text-center">
                    <h4 class="card-title">Total Admin</h4>
                    <h1 class="card-text py-2">{{ $totalUsers }}</h1>
                    <a href="/admin/users" class="btn btn-lg px-4 btn-primary">Detail</a>
                </div>
            </div>
        </div>
    </div>

@endsection

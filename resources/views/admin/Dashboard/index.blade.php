@extends('layout.admin.main',['title'=>'Dashboard'])


@section('container')
    <div class="d-flex">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-center">Total Guru dan Staff</h5>
                <p class="card-text text-center">{{ $totalTeachersStaff }}</p>
                <a href="/admin/teachers-staff" class="btn btn-primary">Detail</a>
            </div>
        </div>


        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-center">Total Murid</h5>
                <p class="card-text text-center">{{ $totalStudents }}</p>
                <a href="/admin/newss" class="btn btn-primary">Detail</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-center">Total Berita</h5>
                <p class="card-text text-center">{{ $totalNews }}</p>
                <a href="/admin/news" class="btn btn-primary">Detail</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-center">Total Foto Galeri</h5>
                <p class="card-text text-center">{{ $totalGaleries }}</p>
                <a href="/admin/galeries" class="btn btn-primary">Detail</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-center">Total Admin</h5>
                <p class="card-text text-center">{{ $totalUsers }}</p>
                <a href="/admin/users" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>

    <div class="d-flex">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Judul</th>
                    <th scope="col">Isi</th>
                </tr>
            </thead>
            <tbody>

                <?php $no = 1; ?>
                @foreach ($recentNews as $news)
                    <tr>
                        <td>{{ $news->title }}</td>
                        <td>{!! $news->excerpt !!}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <table class="table border-0">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                </tr>
            </thead>
            <tbody>

                <?php $no = 1; ?>
                @foreach ($recentGaleries as $galery)
                    <tr>

                        <td><img src="{{ asset('images/uploads/' . $galery->image) }}" alt="" width="150px"
                                height="150px"></td>
                        <td>{{ $galery->title }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

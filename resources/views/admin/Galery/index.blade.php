@extends('layout.admin.main',['title'=>'Galeri'])


@section('container')

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <a href="/admin/galeries/create" class="btn btn-primary">Tambah Foto</a>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>


            <?php $no = 1; ?>
            @foreach ($galeries as $galery)

                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td><img src="{{ asset('images/uploads/' . $galery->image) }}" alt="" width="150px" height="150px"></td>
                    <td>{{ $galery->title }}</td>
                    <td>
                        <a href="/admin/galeries/{{ $galery->id }}/edit">Edit</a>
                        <form action="/admin/galeries/{{ $galery->id }}" method="post" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button onclick="return confirm('sure?')">Delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach





        </tbody>
    </table>

@endsection

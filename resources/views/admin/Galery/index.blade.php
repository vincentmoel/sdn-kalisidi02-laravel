

@extends('layout.admin.main',['title'=>'Galeri'])


@section('container')

<a href="/admin/galeries/create" class="btn btn-primary">Tambah Foto</a>


<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Image</th>
            <th scope="col">Detail</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>


        <?php $no = 1; ?>
        @foreach ($galeries as $galery)

            <tr>
                <th scope="row">{{ $no++ }}</th>
                <td><img src="{{ asset('storage/' . $galery->image) }}" alt="" width="150px" height="150px"></td>
                <td>{{ $galery->detail }}</td>
                <td>
                    <a href="/admin/galeries/{{ $galery->id }}/edit">Edit</a>
                    <form action="/galeries/galery/{{ $galery->id }}" method="post" class="d-inline">
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

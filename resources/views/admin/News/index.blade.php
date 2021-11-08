

@extends('layout.admin.main')


@section('container')
<a href="/admin/berita/create" class="btn btn-primary">Tambah Berita</a>


<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Title</th>
            <th scope="col">Isi</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>


        <?php $no = 1; ?>
        @foreach ($news as $news)

            <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $news->title }}</td>
                <td>{{ $news->excerpt }}</td>
                <td>
                    <a href="/admin/berita/{{ $news->id }}/edit">Edit</a>
                    <form action="/admin/berita/{{ $news->id }}" method="post" class="d-inline">
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

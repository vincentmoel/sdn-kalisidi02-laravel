

@extends('layout.admin.main',['title'=>'Berita'])


@section('container')
<a href="/admin/news/create" class="btn btn-primary">Tambah Berita</a>


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
        @foreach ($news as $oneNews)

            <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $oneNews->title }}</td>
                <td>{{ $oneNews->excerpt }}</td>
                <td>
                    <a href="/admin/news/{{ $oneNews->id }}/edit">Edit</a>
                    <form action="/admin/news/{{ $oneNews->id }}" method="post" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button onclick="return confirm('sure?')">Delete</button>
                    </form>
                </td>

            </tr>
        @endforeach





    </tbody>
</table>


{{ $news->links() }}

@endsection

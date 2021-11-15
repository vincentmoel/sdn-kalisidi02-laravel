@extends('layout.admin.main',['title'=>'Berita'])


@section('container')

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    <a href="/admin/news/create" class="btn btn-primary">Tambah Berita</a>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Judul</th>
                <th scope="col">Isi Berita</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>


            <?php $no = 1; ?>
            @foreach ($news as $oneNews)

                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>
                        <img src="{{ asset('images/uploads/' . $oneNews->image) }}" alt="" width="150px" height="150px">
                    </td>
                    <td>{{ $oneNews->title }}</td>
                    <td>{!! $oneNews->excerpt !!}</td>
                    <td>
                        <a href="/admin/news/{{ $oneNews->slug }}/edit">Edit</a>
                        <form action="/admin/news/{{ $oneNews->slug }}" method="post" class="d-inline">
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

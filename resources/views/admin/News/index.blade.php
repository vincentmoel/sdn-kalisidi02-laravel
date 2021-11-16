@extends('layout.admin.main',['title'=>'Berita'])


@section('container')

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    <a href="/admin/news/create" class="btn btn-primary">Tambah Berita</a>

    <form action="/admin/news" method="GET">
        <select name='show' onchange='this.form.submit()'>
            @for ($i = 10; $i <= 40; $i+=10)
                <option value={{ $i }} @if (request('show') == $i) selected @endif>{{ $i }}</option>
            @endfor
        </select>
        <input type="hidden" name="search" value="{{ request('search') }}">
    </form>

    <form action="/admin/news" method="GET">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cari Berita" aria-describedby="button-addon2" name="search"
                value="{{ request('search') }}">

        </div>
        <button class="btn btn-dark" type="submit" id="button-addon2">Search</button>
    </form>


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

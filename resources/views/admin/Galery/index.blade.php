@extends('layout.admin.main',['title'=>'Galeri'])


@section('container')

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <a href="/admin/galeries/create" class="btn btn-primary">Tambah Foto</a>

    <form action="/admin/galeries" method="GET">
        <select name='show' onchange='this.form.submit()'>
            @for ($i = 10; $i <= 40; $i+=10)
                <option value={{ $i }} @if (request('show') == $i) selected @endif>{{ $i }}</option>
            @endfor
        </select>
        <input type="hidden" name="search" value="{{ request('search') }}">
    </form>

    <form action="/admin/galeries" method="GET">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cari Foto" aria-describedby="button-addon2" name="search"
                value="{{ request('search') }}">

        </div>
        <button class="btn btn-dark" type="submit" id="button-addon2">Search</button>
    </form>

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

    {{ $galeries->links() }}

@endsection

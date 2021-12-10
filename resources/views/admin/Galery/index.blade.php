@extends('layout.admin.main',['title'=>'SD Negri Kalisidi 02 | Galeri'])


@section('container')

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    

    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-12 py-2">
                <a href="/admin/galeries/create" class="btn btn-primary">Tambah Foto</a>
            </div>
        </div>
        <div class="row py-2">
            <div class="col-12 col-lg-3">
                <form action="/admin/galeries" method="GET">
                    Foto ditampilkan :
                    <select name='show' onchange='this.form.submit()'>
                        @for ($i = 10; $i <= 40; $i+=10)
                            <option value={{ $i }} @if (request('show') == $i) selected @endif>{{ $i }}</option>
                        @endfor
                    </select>
                    <input type="hidden" name="search" value="{{ request('search') }}">
                </form>
            </div>
            <div class="col-lg-9 col-12">
                <form action="/admin/galeries" method="GET">
                    <div class="row">
                        <div class="col-lg-8 col-12">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Cari Foto" aria-describedby="button-addon2" name="search"
                                    value="{{ request('search') }}">
                    
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <button class="btn btn-dark" type="submit" id="button-addon2">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
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
                                    <a class="btn btn-info" href="/admin/galeries/{{ $galery->id }}/edit">Edit</a>
                                    <form action="/admin/galeries/{{ $galery->id }}" method="post" class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger" onclick="return confirm('sure?')">Hapus</button>
                                    </form>
                                </td>
            
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            
                {{ $galeries->links() }}
            </div>
        </div>
    </div>
    

    

    

    

@endsection

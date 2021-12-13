@extends('layout.admin.main',['title'=>'SD Negri Kalisidi 02 | Guru dan Staff'])


@section('container')

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-12">
                <a href="/admin/teachers-staff/create" class="btn btn-primary">Tambah Data Guru / Staff</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr class="">
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
            
            
                        <?php $no = 1; ?>
                        @foreach ($teachers as $teacher)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $teacher->name }}</td>
                                <td>{{ $teacher->gender }}</td>
                                <td>
                                    <img src="{{ asset('images/uploads/' . $teacher->image) }}" alt="" width="150px" height="150px">
                                </td>
                                <td>{{ $teacher->position->name }}</td>
                                <td>{{ $teacher->nip }}</td>
                                <td>
                                    <a class="btn btn-info" href="/admin/teachers-staff/{{ $teacher->nip }}/edit">Edit</a>
                                    <form action="/admin/teachers-staff/{{ $teacher->nip }}" method="post" class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger" onclick="return confirm('sure?')">Hapus</button>
                                    </form>
                                </td>
            
                            </tr>
                        @endforeach
            
            
            
            
            
                    </tbody>
                </table>
            
                {{ $teachers->links() }}
            </div>
        </div>
    </div>


    

@endsection

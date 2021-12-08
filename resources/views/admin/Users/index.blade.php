@extends('layout.admin.main',['title'=>'Users'])


@section('container')

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    <div class="container-fluid my-4">
        <div class="row">
            <div class="col-12">
                <a href="/admin/users/create" class="btn btn-primary">Tambah Admin</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Username</th>
                            <th scope="col">Tanggal Bergabung</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
            
            
                        <?php $no = 1; ?>
                        @foreach ($users as $user)
            
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ date_format($user->created_at, 'd M Y') }}</td>
                                <td>
                                    <form action="/admin/users/{{ $user->id }}" method="post" class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger" onclick="return confirm('sure?')">Hapus</button>
                                    </form>
                                </td>
            
                            </tr>
                        @endforeach
            
            
            
            
            
                    </tbody>
                </table>
            
                {{ $users->links() }}
            </div>
        </div>
    </div>
    


    


@endsection

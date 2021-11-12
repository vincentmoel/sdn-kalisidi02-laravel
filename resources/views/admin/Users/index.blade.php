@extends('layout.admin.main',['title'=>'Users'])


@section('container')

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif



    <a href="/admin/users/create" class="btn btn-primary">Tambah Admin</a>


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
                            <button onclick="return confirm('sure?')">Delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach





        </tbody>
    </table>

    {{ $users->links() }}


@endsection

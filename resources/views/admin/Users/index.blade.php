

@extends('layout.admin.main')


@section('container')
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
                <td>{{ date_format($user->created_at,'d M Y') }}</td>
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

@endsection

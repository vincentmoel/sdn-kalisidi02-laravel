@extends('layout.admin.main',['title'=>'Guru dan Staff'])


@section('container')

    <a href="/admin/guru-staff/create" class="btn btn-primary">Tambah Data Guru / Staff</a>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
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
                    <td>
                        <img src="{{ asset('storage/' . $teacher->image) }}" alt="" width="150px" height="150px">
                    </td>
                    <td>{{ $teacher->position->name }}</td>
                    <td>{{ $teacher->nip }}</td>
                    <td>
                        <a href="/admin/guru-staff/{{ $teacher->id }}/edit">Edit</a>
                        <form action="/admin/guru-staff/{{ $teacher->id }}" method="post" class="d-inline">
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

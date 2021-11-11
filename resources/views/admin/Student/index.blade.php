

@extends('layout.admin.main',['title'=>'Student'])


@section('container')
<a href="/admin/students/create" class="btn btn-primary">Tambah Data Siswa</a>


<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">NISN</th>
            <th scope="col">Nama</th>
            <th scope="col">Tempat, Tanggal Lahir</th>
            <th scope="col">Gender</th>
            <th scope="col">Agama</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>


        <?php $no = 1; ?>
        @foreach ($students as $student)

            <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $student->nisn }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->birthplace  }}, {{  date_format(new DateTime($student->birthdate), 'd F Y') }}</td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->religion->name }}</td>
                <td>
                    <a href="/admin/students/{{ $student->id }}/edit">Edit</a>
                    <form action="/admin/students/{{ $student->id }}" method="post" class="d-inline">
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

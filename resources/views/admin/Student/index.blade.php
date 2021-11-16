@extends('layout.admin.main',['title'=>'Student'])


@section('container')
    <a href="/admin/students/create" class="btn btn-primary">Tambah Data Siswa</a>

    <form action="/admin/students" method="GET">
        <select name='show' onchange='this.form.submit()'>
            @for ($i = 10; $i <= 40; $i+=10)
                <option value={{ $i }} @if (request('show') == $i) selected @endif>{{ $i }}</option>
            @endfor
        </select>
        <input type="hidden" name="search" value="{{ request('search') }}">
    </form>

    <form action="/admin/students" method="GET">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cari Siswa" aria-describedby="button-addon2" name="search"
                value="{{ request('search') }}">

        </div>
        <button class="btn btn-dark" type="submit" id="button-addon2">Search</button>
    </form>

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
                    <td>{{ $student->birthplace }}, {{ date_format(new DateTime($student->birthdate), 'd F Y') }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->religion->name }}</td>
                    <td>
                        <a href="/admin/students/{{ $student->nisn }}/edit">Edit</a>
                        <form action="/admin/students/{{ $student->nisn }}" method="post" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button onclick="return confirm('sure?')">Delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach





        </tbody>
    </table>


    {{ $students->links() }}

@endsection

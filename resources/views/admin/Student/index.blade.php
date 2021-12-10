@extends('layout.admin.main',['title'=>'SD Negri Kalisidi 02 | Student'])


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
                <a href="/admin/students/create" class="btn btn-primary">Tambah Data Siswa</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 py-2">
                <form action="/admin/students" method="GET">
                    <div class="row">
                        <div class="col-lg-3 col-12">
                            <label>
                                Siswa Ditampilkan :
                                <select name='show' onchange='this.form.submit()'>
                                    @for ($i = 10; $i <= 40; $i += 10)
                                        <option value={{ $i }} @if (request('show') == $i) selected @endif>{{ $i }}</option>
                                    @endfor
                                </select>
                                <input type="hidden" name="search" value="{{ request('search') }}">
                            </label>
                        </div>
                        <div class="col-lg-9 col-12">
                            <form action="/admin/students" method="GET">
                                <div class="row">
                                    <div class="col-lg-8 col-12">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Cari Siswa" aria-describedby="button-addon2" name="search"
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
                    
                    
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
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
                                    <a class="btn btn-info" href="/admin/students/{{ $student->nisn }}/edit">Edit</a>
                                    <form action="/admin/students/{{ $student->nisn }}" method="post" class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger" onclick="return confirm('sure?')">Hapus</button>
                                    </form>
                                </td>
            
                            </tr>
                        @endforeach
            
            
            
            
            
                    </tbody>
                </table>
            
            
                {{ $students->links() }}
            
            </div>
        </div>
    </div>

    

    

    
@endsection

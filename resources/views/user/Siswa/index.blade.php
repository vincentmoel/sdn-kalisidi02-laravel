<style>

</style>

@extends('layout.user.main',['title'=>'Siswa'])


@section('container')
    <div style="margin-top: 84px"></div>

    <div class="container-fluid py-5" style="background-image: linear-gradient(to right top, #0081c0, #0098cb, #00adc5, #00bfb0, #00ce91);>
                    <div class="   row">
        <div class="col-12 text-light text-center">
            <h1>Siswa</h1>
        </div>
    </div>
    </div>

    <div class="container mt-5">
        <div class="row w-75 mx-auto">
            <div class="col-12">
                <form action="/siswa" method="GET">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-12 pb-3">
                            <form action="/siswa" method="GET">

                                <label>
                                    Siswa Ditampilkan :
                                    <select name='show' onchange='this.form.submit()'>
                                        @for ($i = 10; $i <= 40; $i += 10)
                                            <option value={{ $i }} @if (request('show') == $i) selected @endif>{{ $i }}
                                            </option>
                                        @endfor
                                    </select>
                                    <input type="hidden" name="search" value="{{ request('search') }}">
                                </label>
                            </form>
                        </div>
                        <div class="col-lg-6 col-12 pb-3">
                            <form action="/siswa" method="GET">

                                <div class="input-group w-75" style="float: right;">
                                    <input type="search" name="search" class="form-control rounded" placeholder="Cari Siswa"
                                        aria-label="Search" aria-describedby="search-addon"
                                        value="{{ request('search') }}" />
                                    <button type="submit" class="btn btn-outline-primary">Cari</button>
                                </div>




                            </form>

                        </div>
                    </div>
            </div>
        </div>
        <div class="row w-75 mx-auto">
            <div class="col-12">
                <table class="table table-bordered table-hover table-lg">

                    <thead class="text-center table-primary">
                        <tr>
                            <th scope="col" style="width: 10%">Nomor</th>
                            <th scope="col" style="width: 70%">Nama</th>
                            <th scope="col" style="width: 20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($students->count() > 0)
                            @foreach ($students as $key=>$student)
                                <tr>
                                    <th scope="row" class="text-center">{{ $students->firstItem() + $key }}</th>
                                    <td>{{ $student->name }}</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-primary" onclick="showDetails(this)"
                                            data-bs-toggle="modal" data-bs-target="#siswaModal" data-nisn={{ $student->nisn }} data-name={{ $student->name }} data-birthplace={{ $student->birthplace }} data-birthdate={{ date("d-m-Y", strtotime($student->birthdate)) }} data-gender={{ $student->gender }} data-religion={{ $student->religion->name }}>Detail</button>
                                        </td>
                                </tr>

                            @endforeach
                        @else
                        <tr>
                            <td colspan="3" class="text-center">

                                - Data Tidak Ditemukan -
                            </td>

                        </tr>

                        @endif
                        
                    </tbody>
                    
                    <caption>
                        <div class="row">
                            <div class="col-lg-10 col-12">

                                Total Siswa : {{ $totalStudents }}
                            </div>
                            <div class="col-lg-2 col-12">
                                {{ $students->links() }}
                            </div>
                        </div>
                        
                    </caption>
                </table>

                {{-- siswa modal --}}
                <div class="modal fade" id="siswaModal" tabindex="1" aria-labelledby="siswaModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="siswaModalLabel">Informasi Siswa</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td style="font-weight: bold; width: 30%">NISN</td>
                                            <td style="font-weight: bold; width: 1%">:</td>
                                            <td id="show-nisn">NISN siswa disini</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: bold; width: 30%">Nama</td>
                                            <td style="font-weight: bold; width: 1%">:</td>
                                            <td id="show-name">Nama siswa disini</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: bold; width: 30%">Tempat Lahir</td>
                                            <td style="font-weight: bold; width: 1%">:</td>
                                            <td id="show-birthplace">tempat lahir siswa disini</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: bold; width: 30%">Tanggal Lahir</td>
                                            <td style="font-weight: bold; width: 1%">:</td>
                                            <td id="show-birthdate">tanggal lahir siswa disini</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: bold; width: 30%">Jenis Kelamin</td>
                                            <td style="font-weight: bold; width: 1%">:</td>
                                            <td id="show-gender">jenis kelamin siswa disini</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: bold; width: 30%">Agama</td>
                                            <td style="font-weight: bold; width: 1%">:</td>
                                            <td id="show-religion">agama siswa disini</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        const searchButton = document.getElementById('search-button');
        const searchInput = document.getElementById('search-input');
        searchButton.addEventListener('click', () => {
            const inputValue = searchInput.value;
            alert(inputValue);
        });


        function showDetails(student)
        {
            var nisn = student.getAttribute("data-nisn");
            var name = student.getAttribute("data-name");
            var birthplace = student.getAttribute("data-birthplace");
            var birthdate = student.getAttribute("data-birthdate");
            var gender = student.getAttribute("data-gender");
            if (gender == "L")
            {
                gender = "Laki - Laki";
            }
            else if(gender == "P")
            {
                gender = "Perempuan";
            }
            var religion = student.getAttribute("data-religion");
            document.getElementById("show-nisn").innerHTML = nisn;
            document.getElementById("show-name").innerHTML = name;
            document.getElementById("show-birthplace").innerHTML = birthplace;
            document.getElementById("show-birthdate").innerHTML = birthdate;
            document.getElementById("show-gender").innerHTML = gender;
            document.getElementById("show-religion").innerHTML = religion;
        }
    </script>
@endsection

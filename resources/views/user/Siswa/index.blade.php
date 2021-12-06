<style>
    
</style>

@extends('layout.user.main',['title'=>'Siswa'])


@section('container')
    <div style="margin-top: 84px"></div>

    <div class="container-fluid py-5" style="background-image: linear-gradient(to right top, #0081c0, #0098cb, #00adc5, #00bfb0, #00ce91);>
        <div class="row">
            <div class="col-12 text-light text-center">
                <h1>Siswa</h1>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row w-75 mx-auto">
            <div class="col-12">
                <form action="/admin/students" method="GET">
                    <div class="row">
                        <div class="col-6">
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
                        <div class="col-6">
                            <div class="input-group w-75" style="float: right;">
                                <input type="search" class="form-control rounded" placeholder="Cari Siswa" aria-label="Search"
                                aria-describedby="search-addon" />
                                <button type="button" class="btn btn-outline-primary">Cari</button>
                              </div>
                        </div>
                    </div>
                </form>
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
                      <tr>
                        <th scope="row" class="text-center">1</th>
                        <td>nama1</td>
                        <td class="text-center"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#siswaModal" >Detail</button></td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-center">2</th>
                        <td>nama2</td>
                        <td class="text-center"><a href="" class="btn btn-sm btn-primary px-3">Detail</a></td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-center">3</th>
                        <td>nama3</td>
                        <td class="text-center"><a href="" class="btn btn-sm btn-primary px-3">Detail</a></td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-center">3</th>
                        <td>nama3</td>
                        <td class="text-center"><a href="" class="btn btn-sm btn-primary px-3">Detail</a></td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-center">3</th>
                        <td>nama3</td>
                        <td class="text-center"><a href="" class="btn btn-sm btn-primary px-3">Detail</a></td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-center">3</th>
                        <td>nama3</td>
                        <td class="text-center"><a href="" class="btn btn-sm btn-primary px-3">Detail</a></td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-center">3</th>
                        <td>nama3</td>
                        <td class="text-center"><a href="" class="btn btn-sm btn-primary px-3">Detail</a></td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-center">3</th>
                        <td>nama3</td>
                        <td class="text-center"><a href="" class="btn btn-sm btn-primary px-3">Detail</a></td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-center">3</th>
                        <td>nama3</td>
                        <td class="text-center"><a href="" class="btn btn-sm btn-primary px-3">Detail</a></td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-center">3</th>
                        <td>nama3</td>
                        <td class="text-center"><a href="" class="btn btn-sm btn-primary px-3">Detail</a></td>
                      </tr>
                    </tbody>
                    <caption>
                        Total Siswa : xx
                    </caption>
                  </table>

                  {{-- siswa modal --}}
                  <div class="modal fade" id="siswaModal" tabindex="1" aria-labelledby="siswaModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="siswaModalLabel">Informasi Siswa</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                          <table class="table">
                            <tbody>
                              <tr>
                                <td style="font-weight: bold; width: 30%">NISN</td>
                                <td style="font-weight: bold; width: 1%">:</td>
                                <td>NISN siswa disini</td>
                              </tr>
                              <tr>
                                <td style="font-weight: bold; width: 30%">Nama</td>
                                <td style="font-weight: bold; width: 1%">:</td>
                                <td>Nama siswa disini</td>
                              </tr>
                              <tr>
                                <td style="font-weight: bold; width: 30%">Tempat Lahir</td>
                                <td style="font-weight: bold; width: 1%">:</td>
                                <td>tempat lahir siswa disini</td>
                              </tr>
                              <tr>
                                <td style="font-weight: bold; width: 30%">Tanggal Lahir</td>
                                <td style="font-weight: bold; width: 1%">:</td>
                                <td>tanggal lahir siswa disini</td>
                              </tr>
                              <tr>
                                <td style="font-weight: bold; width: 30%">Jenis Kelamin</td>
                                <td style="font-weight: bold; width: 1%">:</td>
                                <td>jenis kelamin siswa disini</td>
                              </tr>
                              <tr>
                                <td style="font-weight: bold; width: 30%">Agama</td>
                                <td style="font-weight: bold; width: 1%">:</td>
                                <td>agama siswa disini</td>
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
    </script>
@endsection
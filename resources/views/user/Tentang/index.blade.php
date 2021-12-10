<style>
    .visi-misi {
        background-image: linear-gradient(to right, #89b5af, #76b4af, #60b2b0, #43b0b3, #00aeb7);
        border-radius: 10px;
        color: white; 
    }

    .lokasi-kontak {
        color: black;
        background-color: #ffffff;
        text-align: center;
        border-radius: 10px;
    }

    .lokasi-kontak a {
        color: black;
        text-decoration: none;
    }

    .lokasi-kontak a:hover {
        color: blue;
    }
</style>

@extends('layout.user.main',['title'=>'SD Negri Kalisidi 02 | Tentang'])
@section('container')
    <div style="margin-top: 83px"></div>

    {{-- header --}}
    <div class="container-fluid" style="background-image: url(/images/tentang/header.png)">
        <div class="row">
            <div class="col-12 text-center text-light my-5">
                <h2>Informasi Tentang</h2>
                <h1>SD Negeri 02 Kalisidi</h1>
            </div>
        </div>
    </div>

    {{-- visi dan misi --}}
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12 visi-misi text-center py-4 my-2">
                <h2 class="pb-3">VISI</h2>
                <p style="font-size: 20px" class="w-75 mx-auto">“Terwujudnya peserta didik yang beriman, bertaqwa, dan berbudaya, berprestasi, berbudi pekerti luhur, serta cinta terhadap lingkungan”</p>
            </div>
            <div class="col-lg-8 col-12 visi-misi py-4 my-4">
                <h2 class="text-center">MISI</h2>
                <p class="w-75 mx-auto">
                    <ol class="mx-4" style="font-size: 20px">
                        <li>Mewujudkan peserta didik yang taat beribadah</li>
                        <li>Melaksanakan bimbingan dan pembelajaran yang aktif, inovatif, kreatif, efektif, dan menyenangkan sehingga peserta didik berkembang secara optimal sesuai dengan potensi yang mereka miliki</li>
                        <li>Mewujudkan peserta didik yang berprestasi</li>
                        <li>Menjalin kerjasama yang baik antar warga sekolah, masyarakat dan lembaga lain yang terkait dalam upaya peningkatan mutu pendidikan dan prestasi sekolah</li>
                        <li>Membiasakan warga sekolah untuk melaksanakan budata 5 S (Senyum, Salam, Sapa, Sopan, dan Santun)</li>
                        <li>Menciptakan suasana kerja yang harmonis diantara warga sekolah</li>
                        <li>Menumbuh kembangkan sikap dan perilaku yang baik dan berkarakter</li>
                        <li>Mewujudkan peserta didik yang disiplin dan berakhlak mulia</li>
                        <li>Membiasakan peserta didik menjaga kebersihan lingkungan sekolah sehingga tercipta sekolah yang bersih, hijau, dan nyaman</li>
                    </ol>
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color: #F0F2EB">
        <div class="contaier">
            <div class="row align-items-center justify-content-center py-5">
                <div class="col-lg-10 col-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-12 lokasi-kontak py-2">
                            <h3>Lokasi Sekolah</h3>
                        </div>
                        <div class="col-lg-10 col-12 lokasi-kontak px-2 py-4 mt-4">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3959.0159078653824!2d110.360924!3d-7.124153!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3b491c26e999a8f6!2sElementary%20School%20Kalisidi%2002!5e0!3m2!1sen!2sus!4v1638290309062!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" style="border-radius: 10px"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-12 mt-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-12 lokasi-kontak py-2">
                            <h3>Hubungi Kami</h3>
                        </div>
                        <div class="col-lg-9 col-12 lokasi-kontak mt-4 py-4">
                            <div class="row justify-content-center" style="font-size: 18px">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-lg-3 col-12">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-lg-1 col-4 pt-3 px-3">
                                                    <p><i class="fas fa-phone-alt"></i></p>
                                                </div>
                                                <div class="col-lg-5 col-8">
                                                    <a href="">081234567890</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-12">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-lg-1 col-4 pt-3 px-3">
                                                    <p><i class="fas fa-globe"></i></p>
                                                </div>
                                                <div class="col-lg-5 col-8">
                                                    <a href="/">www.abcde.sch.id</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-12">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-lg-1 col-4 pt-3 px-3">
                                                    <p><i class="fas fa-envelope"></i></p>
                                                </div>
                                                <div class="col-lg-5 col-8">
                                                    <a href="">email@abc.com</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-12">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-lg-1 col-4 pt-3 px-3">
                                                    <p><i class="fas fa-map-marker-alt"></i></p>
                                                </div>
                                                <div class="col-lg-5 col-8">
                                                    <a href="">link gmaps</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                                
                            </div>
                                {{-- <a href=""><i class="fas fa-phone-alt" style="padding-right: 20px"></i>081234567890</a>
                                <a href=""><i class="fas fa-globe" style="-right: 40px">www.abcde.sch.id</i></a>
                                <a href=""></a>
                                <a href=""><i class="fas fa-envelope" style="padding-right: 20px">email@abc.com</i></a>
                                <a href=""><i class="fas fa-map-marker-alt" style="padding-right: 20px"></i>link gmaps</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
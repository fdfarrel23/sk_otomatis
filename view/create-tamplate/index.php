<!--
=========================================================
* Argon Dashboard 2 - v2.0.2
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        SK Otomatis
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="resource/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="resource/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="resource/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="resource/assets/css/argon-dashboard.css?v=2.0.2" rel="stylesheet" />

</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
        id="sidenav-main">
        <div class="sidenav-header">
            <a class="navbar-brand m-0 d-flex justify-content-center"
                href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
                <img src="resource/assets/img/logo.svg" class="h-100" alt="main_logo">
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto h-100" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="index.php?controller=beranda&action=goToBeranda">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Beranda</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="index.php?controller=tamplatelist&action=goToListTamplate">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Daftar Template SK</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?controller=createSK&action=goToCreateSK">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green"
                                class="bi bi-file-earmark-diff-fill" viewBox="0 0 16 16">
                                <path
                                    d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8 6a.5.5 0 0 1 .5.5V8H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V9H6a.5.5 0 0 1 0-1h1.5V6.5A.5.5 0 0 1 8 6zm-2.5 6.5A.5.5 0 0 1 6 12h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z" />
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Membuat Data SK</span>
                    </a>
                </li>
                <li class="nav-item mt-5">
                    <a class="nav-link " href="index.php?controller=login&action=logout">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red"
                                class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                <path fill-rule="evenodd"
                                    d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
            data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white"
                                href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Daftar Template SK
                        </li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0">Daftar Template SK</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none"><?php echo $user['email']?></span>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item dropdown px-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="../public/assets/img/team-2.jpg"
                                                    class="avatar avatar-sm  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New message</span> from Laur
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="../public/assets/img/small-logos/logo-spotify.svg"
                                                    class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New album</span> by Travis Scott
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)"
                                                            fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background"
                                                                        d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                        opacity="0.593633743"></path>
                                                                    <path class="color-background"
                                                                        d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    Payment successfully completed
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <form method="POST" action="index.php?controller=createSK&action=createOutSK" enctype="multipart/form-data">
            <div class="container-fluid py-4">
                <div class="row mt-4">
                    <div class="col">
                        <div class="card p-4">

                            <div class="card-header pb-0 p-3 d-flex justify-content-between">
                                <h5 class="mb-0">Membuat Data SK</h5>
                                <img src="https://upload.wikimedia.org/wikipedia/id/4/44/Logo_PENS.png" width="42px"
                                    class="me-2" />
                            </div>
                            <div class="card-body p-3">
                                <p>Klasifikasi</p>
                                <select class="form-select" required aria-label="Default select example" name="klasifikasi">
                                    <option selected>-</option>
                                    <option value="P2AI - Peningkatan dan Pengembangan Aktivitas Instruksional">P2AI - Peningkatan dan Pengembangan Aktivitas Instruksional
                                    </option>
                                    <option value="A - SUBSTANSIF">A - SUBSTANSIF</option>
                                    <option value="B - FASILITATIF">B - FASILITATIF</option>
                                    <option value="C - KEPEGAWAIAN">C - KEPEGAWAIAN</option>
                                    <option value="D - KEUANGAN">D - KEUANGAN</option>
                                    <option value="P3M - Pusat Penelitian dan Pengabdian Masyarakat">P3M - Pusat Penelitian dan Pengabdian Masyarakat</option>
                                </select>
                                <p class="mt-3">Departemen</p>
                                <select class="form-select" required aria-label="Default select example" name="departement">
                                    <option selected>-</option>
                                    <option value="Teknik Elektro">Teknik Elektro</option>
                                    <option value="Teknik Informatika dan Kompute">Teknik Informatika dan Komputer</option>
                                    <option value="Teknik Mekanika dan Energi">Teknik Mekanika dan Energi</option>
                                    <option value="Teknologi Multimedia Kreatif">Teknologi Multimedia Kreatif</option>
                                    <option value="PJJ">PJJ</option>
                                    <option value="Pascasarjana">Pascasarjana</option>
                                </select>
                                <p class="mt-3">Prodi</p>
                                <select class="form-select" required aria-label="Default select example" name="prodi">
                                    <option selected>-</option>
                                    <option value="Teknik Elektronika">Teknik Elektronika</option>
                                    <option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
                                    <option value="Teknik Elektro Industri">Teknik Elektro Industri</option>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Teknik Komputer">Teknik Komputer</option>
                                    <option value="Teknik Mekatronika">Teknik Mekatronika</option>
                                    <option value="Multimedia Broadcasting">Multimedia Broadcasting</option>
                                    <option value="Sistem Pembangkit Energi">Sistem Pembangkit Energi</option>
                                    <option value="Teknologi Game">Teknologi Game</option>
                                    <option value="Teknologi Rekayasa Internet">Teknologi Rekayasa Internet</option>
                                    <option value="Teknologi Rekayasa Multimedia">Teknologi Rekayasa Multimedia</option>
                                    <option value="Sains Data Terapan">Sains Data Terapan</option>
                                </select>
                                <p class="mt-3">Unit</p>
                                <select class="form-select" required aria-label="Default select example" name="unit">
                                    <option selected>-</option>
                                    <option value="Administrasi ATK dan SPC">Administrasi ATK dan SPC</option>
                                    <option value="Administrasi Akademik">Administrasi Akademik</option>
                                    <option value="Administrasi Akademik Pascasarjana">Administrasi Akademik Pascasarjana</option>
                                    <option value="Administrasi Asrama">Administrasi Asrama</option>
                                    <option value="Administrasi Departemen">Administrasi Departemen</option>
                                    <option value="Administrasi Kantin/Koperasi">Administrasi Kantin/Koperasi</option>
                                    <option value="Administrasi Karir dan Potensi Alummi">Administrasi Karir dan Potensi Alummi</option>
                                    <option value="Administrasi Kemahasiswaan">Administrasi Kemahasiswaan</option>
                                    <option value="Administrasi Kemitraan dan Ventura">Administrasi Kemitraan dan Ventura</option>
                                    <option value="Administrasi Kepegawaian">Administrasi Kepegawaian</option>
                                    <option value="Administrasi Kerjasama">Administrasi Kerjasama</option>
                                    <option value="Administrasi Keuangan">Administrasi Keuangan</option>
                                    <option value="Administrasi P3M">Administrasi P3M</option>
                                    <option value="Administrasi Pengadaan Barang dan Jasa">Administrasi Pengadaan Barang dan Jasa</option>
                                    <option value="Administrasi Perlengkapan">Administrasi Perlengkapan</option>
                                    <option value="Administrasi Program Studi">Administrasi Program Studi</option>
                                    <option value="Administrasi Rumah Tangga">Administrasi Rumah Tangga</option>
                                    <option value="Administrasi Satuan Pengawas Internal">Administrasi Satuan Pengawas Internal</option>
                                    <option value="Administrasi UPT Uji Kompetensi">Administrasi UPT Uji Kompetensi</option>
                                    <option value="Administrasi Umum">Administrasi Umum</option>
                                    <option value="dministrasi Umum dan Kesekretariatan">Administrasi Umum dan Kesekretariatan</option>
                                    <option value="Administrasi Unit Inkubator Bisnis">Administrasi Unit Inkubator Bisnis</option>
                                    <option value="Administrasi Unit P2AI<">Administrasi Unit P2AI</option>
                                    <option value="Administrasi Unit Penjaminan Mutu">Administrasi Unit Penjaminan Mutu</option>
                                    <option value="Administrasi Unit Perencanaan dan Pelaporan">Administrasi Unit Perencanaan dan Pelaporan</option>
                                    <option value="Administrasi Unit Urusan Internasional<">Administrasi Unit Urusan Internasional</option>
                                    <option value="Administrasi VEDC">Administrasi VEDC</option>
                                    <option value="Dosen">Dosen</option>
                                    <option value="Dosen Luar">Dosen Luar</option>
                                    <option value="Dosen PSDKU Lamongan">Dosen PSDKU Lamongan</option>
                                    <option value="Dosen PSDKU Sumenep">Dosen PSDKU Sumenep</option>
                                    <option value="Dosen VEDC">Dosen VEDC</option>
                                    <option value="Kabag<">Kabag</option>
                                    <option value="Kasubag">Kasubag</option>
                                    <option value="Keamanan">Keamanan</option>
                                    <option value="Keamanan Pascasariana">Keamanan Pascasariana</option>
                                    <option value="Kebersihan">Kebersihan</option>
                                    <option value="Koordinator Keamanan">Koordinator Keamanan</option>
                                    <option value="Laboran">Laboran</option>
                                    <option value="Pegawai PSDKU Lamongan">Pegawai PSDKU Lamongan</option>
                                    <option value="Pegawai PSDKU Sumenep">Pegawai PSDKU Sumenep</option>
                                    <option value="Pengadministrasian Laboratorium Bahasa">Pengadministrasian Laboratorium Bahasa</option>
                                    <option value="Petugas Parkir D3">Petugas Parkir D3</option>
                                    <option value="Petugas Perpustakaan D3">Petugas Perpustakaan D3</option>
                                    <option value="Petugas Perpustakaan D4">Petugas Perpustakaan D4</option>
                                    <option value="Petugas Perpustakaan Pascasarjana">Petugas Perpustakaan Pascasarjana</option>
                                    <option value="Petugas UPT. Komputer">Petugas UPT. Komputer</option>
                                    <option value="Petugas Unit Pengolahan Data Elektronik">Petugas Unit Pengolahan Data Elektronik</option>
                                    <option value="Pramu Bhakti">Pramu Bhakti</option>
                                    <option value="Pramu Sarana dan Prasarana">Pramu Sarana dan Prasarana</option>
                                    <option value="Sopir">Sopir</option>
                                    <option value="Teknisi Laboratorium">Teknisi Laboratorium</option>
                                    <option value="Teknisi Perawatan dan Perbaikan">Teknisi Perawatan dan Perbaikan</option>
                                    <option value="Teknisi Umum">Teknisi Umum</option>
                                    <option value="Teknisi VEDC">Teknisi VEDC</option>
                                    <option value="Tenaga Ahli/ Pakar">Tenaga Ahli/ Pakar</option>
                                    <option value="Tenaga Medis">Tenaga Medis</option>
                                    <option value="Tenaga Taman">Tenaga Taman</option>
                                    <option value="Tim Kerja PSDKU">Tim Kerja PSDKU</option>
                                </select>
                                <p class="mt-3">Template SK</p>
                                <select class="form-select" aria-label="Default select example" required name="template">
                                    <option selected>-</option>
                                    <?php foreach($tamplates as $tamplate){ ?>
                                    <option value="<?php echo $tamplate->id ?>"><?php echo $tamplate->sk_name ?>
                                    </option>
                                    <?php } ?>
                                </select>

                                <p class="mt-3">Pegawai / Dosen Terkait</p>
                                <select class="form-select" aria-label="Default select example" required name="pegawai">
                                    <option selected>-</option>
                                    <?php foreach($employees as $employee){ ?>
                                    <option value="<?php echo $employee->id ?>"><?php echo $employee->name ?></option>
                                    <?php } ?>
                                </select>
                                <p class="mt-3">Perihal SK</p>
                                <input type="text" class="form-control" required name="perihal">
                                <p class="mt-3">Isi SK</p>
                                <input class="form-control" type="file" required accept="application/pdf" name="fileupload">
                            </div>
                        </div>
                    </div>
                </div>
                <!--   Core JS Files   -->
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

                <div class="modal fade" id="successModal" data-backdrop="false" tabindex="-1" role="dialog"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body d-flex justify-content-center">
                                <div>
                                    <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_9ljdzxac.json"
                                        background="transparent" speed="1" style="width: 300px; height: 300px;" loop
                                        autoplay>
                                    </lottie-player>
                                    <h4 class="text-center">SK Berhasil dibuat</h4>
                                    <div class="w-100 d-flex justify-content-center mt-3 mb-">
                                        <button type="submit" class="btn btn-success" >Download File SK</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-100 d-flex justify-content-end pe-4 pb-5 mt-3">
                    <button type="button" class="btn btn-success" id="button_submit">Submit</button>
                </div>
            </div>

        </form>


    </main>
    <!--   Core JS Files   -->
    <script src="resource/assets/js/core/popper.min.js"></script>
    <script src="resource/assets/js/core/bootstrap.min.js"></script>
    <script src="resource/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="resource/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="resource/assets/js/plugins/chartjs.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
         $('body').on('click', '#button_submit', function (event) {
            event.preventDefault();
            $("#successModal").modal('show');
            
            // $klasifikasi = $( "#klasifikasi option:selected" ).text();
            // $departement = $( "#departement option:selected" ).text();
            // $prodi = $( "#prodi option:selected" ).text();
            // $unit = $( "#unit option:selected" ).text();
            // $template = $( "#template  option:selected" ).text();
            // $pegawai = $( "#pegawai  option:selected" ).text();
            // $perihal = $( "#perihal" ).val();
            // const fileupload = $('#formFile').prop('files')[0];
        });
    </script>

    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="resource/assets/js/argon-dashboard.min.js?v=2.0.2"></script>
</body>

</html>
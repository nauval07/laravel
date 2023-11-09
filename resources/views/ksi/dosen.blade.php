<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Profile KSI</title>
</head>
<body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html">Profile Dosen Prodi KSI</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ksi.berita') }}">Berita Prodi KSI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ksi.lulusan') }}">Profile Lulusan Prodi KSI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ksi.dosen') }}">Profile Dosen Prodi KSI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Jumbotron-->
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-6 fw-bold">Selamat Datang di Halaman Profile Dosen Prodi KSI</h1>
                <p class="col-md-8 fs-4">Dapatkan informasi terupdate dari Program Studi Keamanan Sistem Informasi dan jangan lewatkan kesempatan untuk mendaftar di program studi ini.</p>
                <!--<button class="btn btn-primary btn-lg" type="button">Button</button>-->
            </div>
        </div>
        <!--End Jumbotron-->
        <!-- End Navbar -->
        <!--card-->
        <section id="card">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img src="{{ asset('image/foto.jpg') }}" class="card-img-top" alt="" width="450" height="350">
                            <div class="card-body">
                                <h5 class="card-title">Penerimaan Mahasiswa Baru</h5>
                                <p class="card-text">Telah dibuka penerimaan mahasiswa baru program studi keamanan sistem informasi dengan kuota sebanyak 250 mahasiswa</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Terakhir update 1 hari yang lalu</small>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100 text-center">
                        <img src="{{ asset('image/profil.jpg') }}" class="card-img-top" alt="" width="450" height="350">

                            <div class="card-body">
                                <h5 class="card-title">Juara 3 Keamanan Siber KMIPN</h5>
                                <p class="card-text">Mahasiswa program studi Keamanan sistem informasi berhasil meraih juara 3 dalam kegiatan KMIPN cabang lomba keamanan siber</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Terakhir update 20 jam yang lalu</small>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100 text-end">
                            <img src="{{ asset('image/photos.jpg') }}" class="card-img-top" alt="" width="450" height="350">
                            <div class="card-body">
                                <h5 class="card-title">Ujian Akhir Semester</h5>
                                <p class="card-text">Pada tanggal 18 Desember 2023 mahasiswa program studi keamanan sistem informasi,
                                    akan melaksanakan ujian akhir semester.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Terakhir update 2 jam yang lalu</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End card-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
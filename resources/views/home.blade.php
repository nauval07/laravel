<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Homepage</title>
</head>
<body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html">Prodi KSI</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                </div>
        </nav>
    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-secondary">Selamat Datang!</h1>
                <h4 class="text-secondary">Di Perpustakaan Politeknik Negeri
                    Bengkalis</h4>
                <h6 class="mt-3">
                    Silahkan
                    <a href="{{ route('auth.login') }}" style="text-decoration: none">masuk</a>
                    atau <a href="{{ route('auth.register') }}" style="text-decoration:none">daftar</a>
                    jika anda belum punya akun
                </h6>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
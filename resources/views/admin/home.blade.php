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
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.home') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Input</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ksi.dosen') }}">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Buku</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Peminjaman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container mt-3">
                @if (Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil!</strong> {{ Session::get('success') }}
                    <button type="button" class="btn-close" data-bsdismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if (Session::get('failed'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Gagal!</strong> {{ Session::get('success') }}
                    <button type="button" class="btn-close" data-bsdismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
        </nav>
        </nav>
        <div class="container">
            <div class="row mt-3">
                <div class="col">
                    <h4 class="text-secondary">Selamat Datang {{ Auth::user()->name }}</h4>
                </div>
            </div>
        </div>
        <div class="input-group">
            <input type="search" name="search" class="form-
 control rounded" placeholder="Cari nama admin" aria-label="Search" aria-describedby="search-addon" />
            <button type="submit" class="btn btn-outline-primary">
                search</button>
        </div>
        </form>
        </div>
        <div class="col"></div>
        </div>
        <div class="row mt-5">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col-2">
                <a class="btn btn-success" href="{{ route('admin.tambah')
}}" style="text-decoration: none; margin-left: 30px">Tambah
                    Data +</a>
            </div>
        </div>
        <table class="table" style="margin-top: 10px">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($data as $index => $userAdmin)
                <tr>
                    <td>{{ $index + $data->firstItem() }}</td>
                    <td scope="row">{{ $userAdmin->name }}</td>
                    <td>{{ $userAdmin->email }}</td>
                    <td>{{ $userAdmin->jenis_kelamin }}</td>
                    <td>{{ $userAdmin->level }}</td>
                    <td>
                        <a class="btn btn-outline-warning" href="/editAdmin/{{ $userAdmin->id }}">Edit</a>
                        <a class="btn btn-outline-danger" href="/deleteAdmin/{{ $userAdmin->id }}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table><br>
        {{ $data->links() }}
        </div><br><br><br>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
        </script>
</body>

</html>
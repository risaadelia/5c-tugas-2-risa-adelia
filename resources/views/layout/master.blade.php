<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link category" href="/mahasiswa">Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link category" href="/dosen">Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link category" href="/matakuliah">Mata Kuliah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link category" href="/mahasiswaController">Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link category" href="/dosenController">Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link category" href="/matakuliahController">Mata Kuliah</a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')
</body>
</html>


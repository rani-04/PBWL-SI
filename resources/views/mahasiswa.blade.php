<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Laravel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/mahasiswa">Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/profil">Profil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <div class="container" style="margin-left: 30px">
        <h1>Ini adalah halaman Mahasiswa</h1>

        {{--
            ROWSPAN = Untuk menggabungkan baris
            COLSPAN = Untuk menggabungkan kolom
        --}}

        <table class="table table-blue table-sm table-hover table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th>NPM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Jenis Kelamin</th>
                    <th colspan="2">TTL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>123</td>
                    <td>Rani Ramadhani</td>
                    <td>Perempuan</td>
                    <td>27-04-2004</td>
                    <td rowspan="4">Labusel</td>
                </tr>
                <tr>
                    <td>124</td>
                    <td>Rani Anjelina Ritonga</td>
                    <td>Perempuan</td>
                    <td>13-01-2005</td>
                </tr>
                <tr>
                    <td>125</td>
                    <td>Asni Rahma Yanti</td>
                    <td>Perempuan</td>
                    <td>16-08-2003</td>
                </tr>
                <tr>
                    <td>126</td>
                    <td>Citra Ramadhani</td>
                    <td>Perempuan</td>
                    <td>06-11-2004</td>
                </tr>
            </tbody>
        </table>

      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
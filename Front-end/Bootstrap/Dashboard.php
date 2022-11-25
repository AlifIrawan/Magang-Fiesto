<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <title>Dashboard admin</title>
</head>

<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Nama Proyek</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fa fa-cog">&nbsp;</i>Setting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="return confirm('Apakah anda yakin??')" href="Home.html"><i class=" fa fa-sign-out">&nbsp;</i>Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row mt-5 pt-4">
            <div class="col-sm-3 col-md-2">
                <ul class="nav nav-pills justify-content-center flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pesan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Setting</a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
                <h1 class="page-header mt-5">Dashboard</h1>
                <h2 class="sub-header">Artikel</h2>
                <a href="Artikel.html" onclick="return confirm('Apakah anda yakin??')" type="submit" class="btn btn-success">Buat baru</a>
                <div class="table-responsive pt-4">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col" width="5%">#</th>
                                <th scope="col" width="40%">Judul</th>
                                <th scope="col" width="45%">Konten</th>
                                <th scope="col" width="5%">Aksi</th>
                                <th scope="col" width="5%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><?= $_GET["judul"] ?></td>
                                <td><?= $_GET["konten"] ?></td>
                                <td>
                                    <button type="submit" class="btn btn-info">Update</button>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src=" js/bootstrap.min.js"></script>
</body>

</html>
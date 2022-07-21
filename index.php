<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STMIK Widya Pratama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    
</head>

<body>

<!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#3d948b">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PPDB 2022</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto" style="padding-left:10px">
                <a class="nav-link active" href="index.php">DAFTAR</a>
                <a class="nav-link active" href="list-siswa.php">TAMPIL DATA</a>
                <a class="nav-link active" href="cetak.php">CETAK DATA</a>
            </div>
            </div>
        </div>
    </nav>

        <!-- Tutup Navbar -->


<!-- Container -->
    <!-- container -->
    <div class="container">
        <div class="row my-3">
            <div class="col-md">
                <h4>Formulir Pendaftaran </h4>
                <hr>
            </div>
            <div class="row">
                <div class="col-md">
                    <form action="proses-pendaftaran.php" method="post">

                <fieldset>

                <div class="mb-3">
                        <label for="Nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama"
                        autocomplete="off" require>
                    </div>

                    <div class="mb-3">
                        <label for="alamat">alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukan Alamat"
                        autocomplete="off" require>
                    </div>

                    <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-select" name="jenis_kelamin">
                                <option selected disabled>Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="mb-3">
                        <label for="jurusan">Program Studi</label>
                            <select class="form-select" name="jurusan">
                                <option selected disabled>Pilih Program Studi</option>
                                <option value="SI">S1- Sistem Informasi</option>
                                <option value="TI">S1- Teknik Informatika</option>
                                <option value="MI">D3- Menejemen Informatika</option>
                                <option value="KA">D3- Komputerisasi Akuntansi</option>
                            </select>
                        </div>

                    <div class="mb-3">
                        <label for="agama">Agama</label>
                        <select class="form-select" name="agama">
                                <option selected disabled>Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Katolik">Katolik</option>
                            </select>
                    </div>
                    <div class="mb-3">
                        <label for="sekolah_asal">Sekolah Asal</label>
                        <input type="text" name="sekolah_asal" id="sekolah_asal" class="form-control" placeholder="Masukan Sekolah Asal"
                        autocomplete="off" require>
                    </div>

            <p>
                <input type="submit" class="btn btn-primary" value="Daftar" name="daftar"/>
                <button type="reset" class="btn btn-primary" name="reset"> batal </button>
            </p>
            </div>
        </div>
        </div>

    </div>
    </fieldset>
    </form>


    <!-- footer -->
    <footer>

<font face="Times New Roman">
    <b><div class="copy" style="color: rgb(250, 244, 244); background-color: #040c79; text-align: center;">&copy; 2021 | 21.230.0016 - Anin Naba Anzila.</div></b>
</font>

</footer>
    <!-- tutup footer -->

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
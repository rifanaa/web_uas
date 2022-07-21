<?php

include("config.php");

//kl tidak ada di query string
if( !isset($_GET['id']) ) {
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

//buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

//jika data yang diediit tidak ditemukan
if( mysqli_num_rows ($query) < 1 ) {
    die("DATA TIDAK DITEMUKAN");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>STMIK Widya Pratama</title>
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


<!-- container -->
    <div class="container">
        <div class="row my-3">
            <div class="col-md">
                <h4>Formulir Edit Data Mahasiswa</h4>
                <hr>
            </div>

        <div class="row">
            <div class="col-md">
                <form action="proses-edit.php" method="POST">
                    <fieldset>

            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
         
            <div class="mb-3">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama lengkap" value="<?php echo $siswa['nama']?>" autocomplete="off" require/>
            </div>

            <div class="mb-3">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukan Alamat" value="<?php echo $siswa['alamat'] ?>" autocomplete="off" require />
            </div>

            <div>
                <label for="jenis_kelamin">Jenis Kelamin </label>
                <?php $jk = $siswa['jenis_kelamin']; ?>
                <label><input type="radio" name="jenis_kelamin"
                value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked" : "" ?>> Laki-Laki</label>
        
                <label><input type="radio" name="jenis_kelamin"
                value="perempuan" <?php echo ($jk == 'perempuan') ? "checked" : "" ?>> Perempuan</label>
            </div>

            <div class="mb-3">
                <label for="jurusan">Program Studi</label>
                <?php $jurusan = $siswa['jurusan'];?>
                    <select class="form-select" name="jurusan">
                        <option selected disabled>Pilih Program Studi</option>
                        <option <?php echo ($jurusan == 'SI')? "selected": "" ?>> S1- Sistem Informasi </option>
                        <option <?php echo ($jurusan == 'TI')? "selected": "" ?>> S1- Teknik Informatika </option>
                        <option <?php echo ($jurusan == 'MI')? "selected": "" ?>> D3- Menejemen Informatika </option>
                        <option <?php echo ($jurusan == 'KA')? "selected": "" ?>> D3- Komputerisasi Akuntansi </option>
                    </select>
            </div>

            <div class="mb-3">
                <label for="agama">Agama</label>
                <?php $agama = $siswa['agama'];?>
                    <select class="form-select" name="agama">
                        <option selected disabled>Pilih Agama</option>
                        <option <?php echo ($agama == 'Islam')? "selected": "" ?>> Islam </option>
                        <option <?php echo ($agama == 'Kristen')? "selected": "" ?>> Kristen </option>
                        <option <?php echo ($agama == 'Hindu')? "selected": "" ?>> Hindu </option>
                        <option <?php echo ($agama == 'Budha')? "selected": "" ?>> Budha </option>
                        <option <?php echo ($agama == 'Katolik')? "selected": "" ?>> Katolik </option>
                    </select>
            </div>

            <div class="mb-3">
                <label for="sekolah_asal">Sekolah Asal</label>
                <input type="text" name="sekolah_asal"  placeholder="Masukan Sekolah Asal" id="alamat" class="form-control" placeholder="Masukan Alamat" value="<?php echo $siswa['sekolah_asal'] ?>" autocomplete="off" require/>
            </div>

         <p>
            <input type="submit" class="btn btn-primary" value="SAVE" name="save" />
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
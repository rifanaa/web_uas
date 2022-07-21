<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STMIK Widya Pratama Pekalongan</title>
     
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


 <!-- tentang -->
     <!-- container -->
     <div class="container">
        <div class="row">
            <div class="col-md">
                <h2 class="text-center text-uppercase fw-bold">Data Calon Mahasiswa</h2>
            </div>
                <hr>
        </div>
    
        <div class="row">
            <div class="col-md">
                <a href="form-daftar.php" class="btn btn-primary" target="">Tambah Data</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Jurusan</th>
                        <th>Agama</th>
                        <th>Sekolah Asal</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>

                <tbody>

    <?php 
    include("config.php");
    $sqlQuery = "SELECT * FROM calon_siswa";
    $query = mysqli_query($db, $sqlQuery);
    if (!$query) {
        
    }
    $nomor = 0;
    while($siswa = mysqli_fetch_array($query)){

        $nomor++;
        echo "<tr>";

        echo "<td>".$nomor."</td>";
        echo "<td>".$siswa['nama']."</td>";
        echo "<td>".$siswa['alamat']."</td>";
        echo "<td>".$siswa['jenis_kelamin']."</td>";
        echo "<td>".$siswa['jurusan']."</td>";
        echo "<td>".$siswa['agama']."</td>";
        echo "<td>".$siswa['sekolah_asal']."</td>";

        echo "<td>";
        echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
        echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
        echo "</td>";
        
        echo "</tr>";
            }

            ?>
        </tbody>
       
            </tabel>

            <p>Total Data Siswa: <?php echo mysqli_num_rows($query) ?></p>
            </div>
        </div>
    </div>
    <!-- tutup container -->

 
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
<!-- Bunddel bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>
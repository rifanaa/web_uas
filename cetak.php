<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>STMIK Widya Pratama</h1>
        <h2>DATA LAPORAN PENDAFTARAN</h2>
        <hr>
    </center>

    <?php include("config.php"); ?>

    <br>

    <table border = "1" style ="width: 100%" align="center">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
        </tr>

        <?php
            $no = 1;
            $sql = "SELECT * FROM calon_siswa";
            $query = mysqli_query($db, $sql);

            while ($siswa = mysqli_fetch_array($query)) {
                echo "<tr>";
                
                echo "<td>".$no++; "</td>";
                echo "<td>".$siswa['nama']."</td>";
                echo "<td>".$siswa['alamat']."</td>";
                echo "<td>".$siswa['jenis_kelamin']."</td>";
                echo "<td>".$siswa['jurusan']."</td>";
                echo "<td>".$siswa['agama']."</td>";
                echo "<td>".$siswa['sekolah_asal']."</td>";
                
                echo "</tr>";
            }
        ?>
        
    </table>

        <p align="right">Panitia PPBD 2022
            <br><br>TTD<br><br>
            <b>21.230.0016 - Anin Naba Anzila</b>
        </p>

        <script>
            window.print();
        </script>
</body>
</html>


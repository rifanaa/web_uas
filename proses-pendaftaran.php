<?php

include("config.php");

//cek apakah tombol daftar sudah di klik atau belum
if(isset ($_POST['daftar'])) {

    //ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $jurusan = $_POST['jurusan'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    //buat query
    $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, jurusan, agama, sekolah_asal)
    VALUE ('$nama','$alamat','$jk','$jurusan','$agama','$sekolah')";
    $query = mysqli_query($db, $sql);

    //apakah query simpan berhasil
    if( $query ) {
        //kl berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        //kl gagal alihkan ke halaman index.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
}else {
    die("Akses dilarang...");
}
    ?>

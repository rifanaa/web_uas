<?php
include ("config.php");

//cek apakah tombol simpan sudah diklik atau blm
    if(isset ($_POST['save'])) {

//ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $jurusan = $_POST['jurusan'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

//buat query update
    $sql = "UPDATE calon_siswa SET nama='$nama',
    alamat='$alamat', jenis_kelamin='$jk', jurusan ='$jurusan', agama='$agama', sekolah_asal='$sekolah' WHERE id='$id'";
    $query = mysqli_query($db, $sql);

//apakah query update berhasil
        if( $query ) {
//kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list-siswa.php');
  } else {
    //kalau gagal tampilkan pesan
    die("GAGAL MENYIMPAN PERUBAHAN");
  }
} else {
    die("Akses Dilarang...");
}

?>
<?php
if (isset($_POST['simpan'])) {
    require_once('../config.php');
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'] == '' ? 0 : $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'] == '' ? 0 : $_POST['tanggal_lahir'];
    $kelas_id = $_POST['kelas_id'];

    $sql = "INSERT INTO siswa SET nis='$nis', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', kelas_id='$kelas_id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<script>location='index.php';</script>";
    } else {
        echo "<script>alert('Data gagal disimpan');</script>";
        echo "<script>location='index.php';</script>";
        // var_dump($sql);
    }
}

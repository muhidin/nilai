<?php
if (isset($_POST['simpan'])) {
    require_once('../config.php');
    $kelas = $_POST['kelas'];
    $kapasitas = $_POST['kapasitas'] == '' ? 0 : $_POST['kapasitas'];
    $terisi = $_POST['terisi'] == '' ? 0 : $_POST['terisi'];

    $sql = "INSERT INTO kelas SET kelas='$kelas', kapasitas='$kapasitas', terisi='$terisi'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<script>location='index.php';</script>";
    } else {
        echo "<script>alert('Data gagal disimpan');</script>";
        echo "<script>location='index.php';</script>";
        // var_dump($sql);
    }
}

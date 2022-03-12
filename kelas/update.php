<?php
if (isset($_POST['update'])) {
    require_once('../config.php');
    $id = $_POST['id'];
    $kelas = $_POST['kelas'];
    $kapasitas = $_POST['kapasitas'] == '' ? 0 : $_POST['kapasitas'];
    $terisi = $_POST['terisi'] == '' ? 0 : $_POST['terisi'];

    $sql = "UPDATE kelas SET kelas='$kelas', kapasitas='$kapasitas', terisi='$terisi' WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<script>location='index.php';</script>";
    } else {
        echo "<script>alert('Data gagal diupdate');</script>";
        echo "<script>location='index.php';</script>";
        // var_dump($sql);
    }
}

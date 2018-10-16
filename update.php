<?php
session_start();
require_once("db.php");

$nama=$_POST['nama'];
$nim=$_POST['nim'];
$jenis_kelamin=$_POST['jk'];
$program_studi=$_POST['ps'];
$fakultas=$_POST['fk'];
$asal=$_POST['asal'];
$moto=$_POST['moto'];

$sql = "UPDATE datamaba SET nama='$nama', nim='$nim', jenis_kelamin='$jenis_kelamin', program_studi='$program_studi', fakultas='$fakultas', asal='$asal', moto='$moto' WHERE nim='$nim'";

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    $_SESSION["nama"] = $nama;
    echo "Data berhasil diperbarui";
    echo "<a href='list.php'>Index</a>";
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>



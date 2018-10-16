<?php

include 'db.php';
$nim=$_GET['nim'];
$form=mysqli_query($conn,"SELECT * FROM datamaba WHERE nim='$nim'");
$row=mysqli_fetch_array($form);
$fakultas=array('Sistem Informasi','Manajemen Bisnis Telekomunikasi Informatika','Teknik Telekomunikasi','Desain Interior','Fisika','Sistem Multimedia');

function active_radio_button($value,$input){
	$result = $input==$result?'checled':'';
	return $result;

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Jurnal</title>
</head>
<body>
	<input type="hidden" value="<?php echo $row['nim'];?>" name="nim">
		<center>
       		<form action="update.php" method="POST" enctype="multipart/form-data">
      			<h2>Input Data Mahasiswa Baru</h2>
			<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $row['nama'];?>"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="number" name="nim" value="<?php echo $row['nim'];?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" name="jk" value="<?php echo $row['jenis_kelamin'];?>">Laki-Laki</option></td>
				<td><input type="radio" name="jk" value="<?php echo $row['jenis_kelamin'];?>">Perempuan</option></td>
				
			</tr>
	<tr>
 <td>Program Studi</td>
    <td>:</td>
     <td> <select class="" name="ps" value="<?php echo $row['program_studi'];?>">
        <option value="">-- Jurusan --</option>
        <option value="If">Informatika</option>
        <option value="SI">Sistem Informasi</option>
        <option value="mbti">Manajemen Bisnis Telekomunikasi Informatika</option>
        <option value="TT">Teknik Telekomunikasi</option>
        <option value="DI">Desain Interior</option>
        <option value="Fisika">Fisika</option>
        <option value="SM">Sistem Multimedia</option>
       
       </select> 
       </td>
	</tr>


			<tr>

    <td>Fakultas</td>
    <td>:</td>
     <td> <select class="" name="fk" value="<?php echo $row['fakultas'];?>"
        <option value="">-- Fakultas --</option>
        <option value="FIF">FIF</option>
        <option value="FIT">FIT</option>
        <option value="FRI">FRI</option>
        <option value="FKB">FKB</option>
        <option value="FIK">FIK</option>
        <option value="FTE">FTE</option>
        <option value="FEB">FEB</option>
       
      </select>
  </td>
</tr>
<tr>
			<td>Asal</td>
			<td>:</td>
			<td><input type="text" name="asal" value="<?php echo $row['asal'];?>"></td>
			</tr>

				<tr>

	<td>Moto Hidup</td>
			<td>:</td>
			<td><input type="textarea" name="moto" value="<?php echo $row['moto'];?>"></td>
			</tr>
<tr>
				<td><input type="submit" name="submit" value="Kirim"></td>
			</tr>

  	
		</table>
	</form>
	</center> 	




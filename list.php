<!DOCTYPE html>
<html>
<head>
	<title>Jurnal</title>
</head>
<body>
		<center>
			<h2>Data Mahasiswa Baru</h2>

		<table border="1" >
			<tr>
				SEARCH
				<form action="search.php" method="POST">
					<input type="text" name="search">
					<input type="submit" name="submit" value="submit">

			</form>

			<tr> 
				<th>Nama</th>
				<th>NIM</th>
				<th>Jenis Kelamin</th>
				<th>Program Studi</th>
				<th>Fakultas</th>
				<th>Asal</th>
				<th>Moto Hidup</th>
				<th>Aksi</th>
			</tr>
<?php
include_once 'db.php';
$query =
		"SELECT 
					`nama`,
				`nim`,
				`jenis_kelamin`,
				`program_studi`,
				`fakultas`,
				`asal`,
				`moto`
		FROM datamaba";

		$result=mysqli_query($conn,$query);
		while($data=mysqli_fetch_array($result)){
		?>
<center>
		<?php
		echo "<tr>";
		echo "<td>".$data['nama']."</td>";
		echo "<td>".$data['nim']."</td>";
		echo "<td>".$data['jenis_kelamin']."</td>";
		echo "<td>".$data['program_studi']."</td>";
		echo "<td>".$data['fakultas']."</td>";
		echo "<td>".$data['asal']."</td>";
		echo "<td>".$data['moto']."</td>";
		echo "<td><a href = 'delete.php?nim=".$data['nim']."'>Delete</a></td>";
		echo "<td><a href = 'edit.php?nim=".$data['nim']."'>Edit</a></td>";
		echo "</tr>";
		 
}
		?>

		
</center></table>

	
</body>
</html>
	<tr>
				SEARCH
				<form action="search.php" method="POST">
					<input type="text" name="search">
					<input type="submit" name="submit" value="submit">

			</form>



<?php
		include_once 'db.php';
		echo("<H3>Hasil Pencarian</H3>");
		$search = isset ($_POST['search'])? $_POST['search']: " ";

		$perintah="SELECT * FROM datamaba WHERE nim like '%$search'";
		$hasil=mysqli_query($conn,$perintah);
		$jumlah=mysqli_num_rows($hasil);
		if($jumlah>0){
			echo "Data yang ditemukan : $jumlah<br><hr>";
while($data=mysqli_fetch_row($hasil)){
	echo ("Nama : $data[0]<br>");
	echo ("Nim : $data[1]<br>");
	echo "<td><a href = 'list.php'>Daftar Mahasiswa Baru</a></td>";
}
		}else{
			echo "Maaf, Data yang anda cari tidak ada";
		}
		?>
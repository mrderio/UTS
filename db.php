<!DOCTYPE html>
<html>
<head>
	<title>Output UTS Pemograman Web 2</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style type="text/css">
    	body {
    		margin-top: 20px;
    	}
    </style>
</head>
<body>
<div class="container">
	<?php

	//Keterangan
	// Nama : Muhammad Derio
	// Kelas : 06TPLE012


	$wilayah = $_POST['wilayah'];
	$positif_covid = $_POST['positif_covid'];
	$pasien_dirawat = $_POST['jumlah_pasien_dirawat'];
	$pasien_sembuh = $_POST['jumlah_pasien_sembuh'];
	$pasien_meninggal = $_POST['jumlah_pasien_meninggal'];
	$nama_operator = $_POST['nama_operator'];
	$nomor_nim = $_POST['nomor_nim'];
	?>

	<h1 class="text-center font-weight-bold">Data Pemantauan Covid 19 Wilayah <?php echo $wilayah; ?></h2>
	<h3 class="text-center">Per <?php echo date('d F Y H:i:s'); ?></h2>
	<h2 class="text-center"><?php echo $nama_operator; ?></h1>
	<h2 class="text-center"><?php echo $nomor_nim; ?></h2>

	<table align="center" class="table table-bordered">
		<thead>
			<th>Positif</th>
			<th>Dirawat</th>
			<th>Sembuh</th>
			<th>Meninggal</th>
		</thead>
		<tbody>
			<!-- Data pasien positif untuk covid 19 Banten -->
			<td><?php echo $positif_covid; ?></td>

			<!-- Data pasien dirawat untuk covid 19 Banten -->
			<td><?php echo $pasien_dirawat; ?></td>


			<!-- Data pasien sembuh untuk covid 19 Banten -->
			<td><?php echo $pasien_sembuh; ?></td>

			<!-- Data pasien meninggal untuk covid 19 Banten -->
			<td><?php echo $pasien_meninggal; ?></td>
		</tbody>
	</table>

	<p class="text-center">Catatan : Pastikan Koneksi internet berjalan agar boostrap bekerja</p>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
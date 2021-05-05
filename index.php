<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>UTS Pemograman web 2 - Muhammad Derio</title>
		<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    
    <style type="text/css">
    	body {
    		margin-top: 20px;
    	}
    </style>
</head>
<body>
<form action="db.php" method="post">
<div class="container">
	
	<!-- Keterangan  -->
	<!-- Nama : Muhammad Derio -->
	<!-- Kelas : 06TPLE012 -->

	<h2>Pemasukan Data Hasil Pemantauan Covid 19</h2>
	<p><b>Catatan : Pastikan internet berjalan atau terkoneksi agar boostrap CSS dapat berjalan</b></p>	

		<div class="form-group">	
		<label>Nama Wilayah :</label>
			<select name="wilayah" class="form-control">
				<option value="DKI Jakarta">DKI Jakarta</option>
				<option value="Jawa Barat">Jawa Barat</option>
				<option value="Banten">Banten</option>
				<option value="Jawa Tengah">Jawa Tengah</option>
			</select>
		</div>	

		<div class="form-group">
			<label>Jumlah Positif :</label>
			<input type="text" name="positif_covid" required="" class="form-control">
		</div>


		<div class="form-group">
			<label>Jumlah Dirawat :</label>
			<input type="text" name="jumlah_pasien_dirawat" required="" class="form-control">	
		</div>


		<div class="form-group">
			<label>Jumlah Sembuh :</label>
			<input type="text" name="jumlah_pasien_sembuh" required="" class="form-control">
		</div>

		<div class="form-group">
			<label>Jumlah Meninggal :</label>
			<input type="text" name="jumlah_pasien_meninggal" required="" class="form-control">
		</div>

		<div class="form-group">
			<label>Nama Operator :</label>
			<input type="text" name="nama_operator" required="" class="form-control">
		</div>

		<div class="form-group">
			<label>NIM Mahasiswa :</label>
			<input type="text" name="nomor_nim" required="" class="form-control">
		</div>

			<input type="submit" name="kirim" value="Submit" class="btn btn-primary btn-lg">

	</table>

</div>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
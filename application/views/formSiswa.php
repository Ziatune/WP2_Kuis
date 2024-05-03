<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>D Lemas</title>
</head>
<body>
	<div class="form">
		<form action="<?= base_url('siswa/cetak') ?>" method="post" class="form_siswa">
		<center>
			<h1>D-Lemas</h1>
		</center>
			<label for="nama">Nama Siswa : </label><br>
			<input type="text" name="nama" id="nama" required><br>
			<label for="nis">NIS : </label><br>
			<input type="text" name="nis" id="nis" required><br>
			<label for="kelas">Kelas : </label><br>
			<input type="text" name="kelas" id="kelas" required><br>
			<label for="tanggal">Tanggal Lahir : </label><br>
			<input type="date" name="tanggal" id="tanggal" required><br>
			<label for="alamat">Alamat : </label><br>
			<textarea name="alamat" id="alamat" cols="30" rows="5" required></textarea><br>
			<label for="gender">Jenis Kelamin : </label><br>
			<input type="radio" name="gender" id="gender_laki" value="Laki-laki"> Laki-laki
			<input type="radio" name="gender" id="gender_perempuan" value="Perempuan"> Perempuan<br>
			<label for="agama">Agama : </label><br>
			<select name="agama" id="agama">
				<option value="islam">Islam</option>
				<option value="kristen">Kristen</option>
				<option value="katolik">Katolik</option>
				<option value="protestan">Protestan</option>
				<option value="buddha">Buddha</option>
				<option value="hindu">Hindu</option>
				<option value="khonghucu">Khonghucu</option>
			</select><br>
			<input type="submit" value="submit">
		</form>
	</div>
</body>
</html>

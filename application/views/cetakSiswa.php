<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>D Lemas</title>
</head>
<body>
  <div class="container">
    <div class="siswa">
      <h1 style="text-align: center;">D-Lemas</h1>
      <h3>Nama          : <?= $nama; ?> </h3>
      <h3>NIS           : <?= $nis; ?> </h3>
      <h3>Kelas         : <?= $kelas; ?> </h3>
      <h3>Tanggal Lahir : <?= $tanggal; ?> </h3>
      <h3>Alamat        : <?= $alamat; ?> </h3>
      <h3>Jenis Kelamin : <?= $gender; ?> </h3>
      <h3>Agama         : <?= $agama; ?> </h3>
      <a href="<?= base_url('siswa') ?>">Kembali</a>
    </div>
  </div>
</body>
</html>
<?php
if (isset($_POST['nama'])) {
	# code...
	if ($_POST['tpa'] == 'baik') {
		$hasil = "Diterima";
	}else {
		if ($_POST['toefl'] == 'cukup') {
			if ($_POST['un'] == 'rendah') {
				$hasil = "Tidak Diterima";
			}else {
				$hasil = "Diterima";
			}
			
		}else {
			$hasil = "Tidak Diterima";
		}
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hasil SPMB</title>
</head>
<body>
	<div><h1>Hasil Seleksi Penerimaan Mahasiswa Baru</h1></div>
	<div>
		<h2> Nama : <?= $_POST['nama']; ?></h2>
		<h3>Keterangan : <?= $hasil; ?></h3>
	</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style>
		tr {
			margin: 5px;
			padding: 0px;
		}
		ul {
			padding : 0px;
		}
	</style>
	<title>ID3 SPMB</title>
</head>
<body>
	<div><h1>Sitem Penerimaan Mahasiwa Baru</h1></div>
	<div>
		<form action="hasil.php" method="POST">
			<table>
				<tr>
					<td><label for="nama">Nama</label></td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
				<td><label for="tpa_id">TPA</label></td>
				<td><select name="tpa" id="tpa_id">
					<option value="baik">Baik</option>
					<option value="buruk">Buruk</option>
				</select>
				</td>
				</tr>
				<tr>
				<td><label for="toefl_id">TOEFL</label></td>
				<td><select name="toefl" id="toefl_id">
					<option value="bagus">Bagus</option>
					<option value="cukup">Cukup</option>
					<option value="kurang">Kurang</option>
				</select>
				</td>
				</tr>
				<tr>
				<td><label for="un_id">UN</label></td>
				<td>
				<select name="un" id="un_id">
					<option value="tinggi">Tinggi</option>
					<option value="sedang">Sedang</option>
					<option value="rendah">Rendah</option>
				</select>
				</td>
				</tr>
			</table>
			<button name="submit" type="submit">Submit</button>
		</form>
	</div>
	
</body>
</html>

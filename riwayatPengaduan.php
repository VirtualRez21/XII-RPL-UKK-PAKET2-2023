<?php
	require 'koneksi.php';
	if($_SESSION['nik'] == ""){
		header('location: login.php');
	}
	else{
		$varNik = $_SESSION['nik'];

		$query = "SELECT * FROM pengaduan WHERE nik = '$varNik';";
		$result = mysqli_query($conn, $query);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="CSS/style.css">

	<script type="text/javascript">
		function checkDelete(){
			return confirm('Yakin Data Ingin Dihapus?');
		}
	</script>

	<title>Riwayat Pengaduan</title>
</head>
<body>

	<div class="sidebar">
	  <a href="dashboard.php">DASHBOARD</a>
	  <a href="formPengaduan.php">FORM PENGADUAN</a>
	  <a class="active" href="riwayatPengaduan.php">RIWAYAT PENGADUAN</a>
	  <a href="#">LOGOUT</a>
	</div>

	<div class="content">
		<h2>LIHAT RIWAYAT PENGADUAN</h2>
		<div class="container">
			<center>
				<table border="1">
					<tr>
						<th>ID</th>
						<th>Tanggal Pengaduan</th>
						<th>NIK</th>
						<th>Laporan</th>
						<th>Foto</th>
						<th>Status</th>
						<th>Action</th>
					</tr>

					<?php
					while ($data = mysqli_fetch_assoc($result)) {
					?>

					<tr>
						<td>
							<?php echo $data['id_pengaduan']; ?>
						</td>

						<td>
							<?php echo $data['tgl_pengaduan']; ?>
						</td>

						<td>
							<?php echo $data['nik']; ?>
						</td>

						<td>
							<?php echo $data['isi_laporan']; ?>
						</td>

						<td>
							<img src="media/laporan/<?php echo $data['foto']; ?>" width="300px">
						</td>

						<td>
							<?php
								if($data['status'] == '0'){
									echo "Belum Ditanggapi";
								}
								elseif($data['status'] == 'proses'){
									echo "Sedang Diproses";
								}
								elseif($data['selesai'] == 'selesai'){
									echo "Laporan Selesai";
								}
								else{
									echo "Laporan Invalid";
								}
							?>
						</td>

						<td>
							<a href="editPengaduan.php?edit=<?php echo $data["id_pengaduan"] ?>">edit<i>&#x270F;</i></a>
							<br>
							<a onclick="return checkDelete()" href="prosesUser.php?delete=<?php echo $data['id_pengaduan'] ?>">Delete<i>&#x1F5D1;</i></a>
						</td>
					</tr>

					<?php
					}
					?>

				</table>
			</center>
		</div>
	</div>

</body>
</html>
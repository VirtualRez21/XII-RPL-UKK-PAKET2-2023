<?php
  
  require '../koneksi.php';
  require '../fungsi.php';

  if($_SESSION['nama_petugas'] == ""){
    header('location: login.php');
  }
  else{
    if(isset($_GET['idPengaduan'])){
      $varIdPengaduan = $_GET['idPengaduan'];
      $varIdPetugas = $_SESSION['id_petugas'];

      $sql = "SELECT * FROM pengaduan WHERE id_pengaduan='$varIdPengaduan';";
      $result = mysqli_query($conn, $sql);
      $data = mysqli_fetch_assoc($result); // data dari tabel pengaduan

      if($data == NULL){
        echo notifikasi('Data Laporan Tidak Ditemukan', 'lihatPengaduan.php');
      }
      elseif($data != NULL){
        $varNik = $data['nik'];
        $sql2 = "SELECT * FROM masyarakat WHERE nik='$varNik';";
        $result2 = mysqli_query($conn, $sql2);
        $data2 = mysqli_fetch_assoc($result2); // data dari tabel masyarakat

        $sql3 = "SELECT * FROM tanggapan WHERE id_pengaduan='$varIdPengaduan' ;";
        $result3 = mysqli_query($conn, $sql3);

        if(mysqli_num_rows($result3) == 0){
          echo notifikasi('Tanggapan Belum Tersedia', 'lihatPengaduan.php');
        }

        $data3 = mysqli_fetch_assoc($result3); // data dari tabel tanggapan
      }
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../CSS/style.css">
  <title>PROSES PENGADUAN MASYARAKAT</title>
</head>
<body>

  <div class="sidebar">
    <a href="dashboard.php">DASHBOARD</a>
    <a href="lihatPengaduan.php">DAFTAR PENGADUAN</a>
    <?php
      if($_SESSION['level'] == 'admin'){
        echo "<a href='tambahPetugas.php'>TAMBAH PETUGAS</a>
        <a href='#'>LIHAT PETUGAS</a>";
      }
    ?>
    <a href="logout.php">LOGOUT</a>
  </div>

  <div class="content">
    <h2 style="text-align: center;">PROSES PENGADUAN MASYARAKAT</h2>

    <div class="container">
      <h4>Nama Pelapor: <?php echo $data2['nama'] ?></h4>
      <p><?php echo $data['isi_laporan'] ?></p>
      <img src="../media/laporan/<?php echo $data['foto'] ?>" width="300px">
      <h4>Tanggapan Petugas</h4>
      <p><?php echo $data3['tanggapan'] ?></p>
    </div>
  </div>

</body>
</html>
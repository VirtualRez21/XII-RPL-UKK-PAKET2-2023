<?php
  
  require '../koneksi.php';

  if($_SESSION['nama_petugas'] == ""){
    header('location: login.php');
  }
  else{
    $sql = "SELECT * FROM pengaduan;";
    $result = mysqli_query($conn, $sql);
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../CSS/style.css">
  <title>DASHBOARD PETUGAS PENGADUAN MASYARAKAT</title>
</head>
<body>

  <div class="sidebar">
    <a href="dashboard.php">DASHBOARD</a>
    <a class="active" href="lihatPengaduan.php">DAFTAR PENGADUAN</a>
    <?php
      if($_SESSION['level'] == 'admin'){
        echo "<a href='tambahPetugas.php'>TAMBAH PETUGAS</a>
        <a href='#'>LIHAT PETUGAS</a>";
      }
    ?>
    <a href="logout.php">LOGOUT</a>
  </div>

  <div class="content">
    <h2 style="text-align: center;">DAFTAR PENGADUAN MASYARAKAT</h2>

    <div class="container">
      <center>
      <table>
        <tr>
          <th>No</th>
          <th>Tanggal</th>
          <th>NIK</th>
          <th>Nama</th>
          <th>Laporan</th>
          <th>Foto</th>
          <th>Status</th>
        </tr>

        <?php
        $nomor = 1;
        while ($data = mysqli_fetch_assoc($result)) {
          $nikPelapor = $data['nik'];
        ?>

        <tr>
          <td>
            <?php echo $nomor ?>
          </td>
          <td>
            <?php echo $data['tgl_pengaduan'] ?>
          </td>
          <td>
            <?php echo $nikPelapor ?>
          </td>
          <td>
            <?php
            $sql2 = "SELECT * FROM masyarakat WHERE nik='$nikPelapor';";
            $result2 = mysqli_query($conn, $sql2);
            $data2 = mysqli_fetch_assoc($result2);

            echo $data2['nama'];
            ?>
          </td>
          <td>
            <?php echo $data['isi_laporan'] ?>
          </td>
          <td>
            <img src="../media/laporan/<?php echo $data['foto'] ?>" width="300px">
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
        </tr>

        <?php
        $nomor = $nomor + 1;
        }
        ?>

      </table>
      </center>
    </div>

  </div>

</body>
</html>
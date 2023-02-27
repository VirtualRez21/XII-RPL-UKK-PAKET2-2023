<?php
  
  require '../koneksi.php';

  if($_SESSION['nama_petugas'] == ""){
    header('location: login.php');
  }
  else{
    $sql = "SELECT * FROM petugas;";
    $result = mysqli_query($conn, $sql);
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../CSS/style.css">
  <title>LIHAT PETUGAS PENGADUAN MASYARAKAT</title>
</head>
<body>

  <div class="sidebar">
    <a href="dashboard.php">DASHBOARD</a>
    <a href="lihatPengaduan.php">DAFTAR PENGADUAN</a>
    <?php
      if($_SESSION['level'] == 'admin'){
        echo "<a href='tambahPetugas.php'>TAMBAH PETUGAS</a>
        <a class='active' href='lihatPetugas.php'>LIHAT PETUGAS</a>";
      }
    ?>
    <a href="logout.php">LOGOUT</a>
  </div>

  <div class="content">
    <h2 style="text-align: center;">DAFTAR PETUGAS PENGADUAN MASYARAKAT</h2>

    <div class="container">
      <center>
      <table>
        <tr>
          <th>No</th>
          <th>Nama Petugas</th>
          <th>Username</th>
          <th>Telepon</th>
          <th>Level</th>
        </tr>

        <?php
        $nomor = 1;
        while ($data = mysqli_fetch_assoc($result)) {
        ?>

        <tr>
          <td>
            <?php echo $nomor ?>
          </td>
          <td>
            <?php echo $data['nama_petugas'] ?>
          </td>
          <td>
            <?php echo $data['username'] ?>
          </td>
          <td>
            <?php echo $data['telp'] ?>
          </td>
          <td>
            <?php echo $data['level'] ?>
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
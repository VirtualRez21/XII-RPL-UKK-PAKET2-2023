<?php
require 'function.php';
require '../fungsi.php';
session_start();

if($_SESSION['nama_petugas'] == ""){
  header('location: login.php');
}
elseif($_SESSION['level'] != 'admin'){
  echo notifikasi('Anda tidak bisa membuka halaman ini', 'dashboard.php');
}
else{
  $registPetugas = new Registration();
  if(isset($_POST['submitRegistrasiPetugas'])){
    $varNamaPetugas = $_POST['namaRegistrasiPetugas'];
    $varUsernamePetugas = $_POST['usernameRegistrasiPetugas'];
    $varPasswordPetugas = $_POST['passwordRegistrasiPetugas'];
    $varTeleponPetugas = $_POST['teleponRegistrasiPetugas'];

    $result = $registPetugas->tambahPetugas($varNamaPetugas, $varUsernamePetugas, $varPasswordPetugas, $varTeleponPetugas);

    if($result == 1){
      echo notifikasi('Username telah terdaftar', 'tambahPetugas.php');
    }
    elseif($result == 10){
      echo notifikasi('Akun berhasil ditambah', 'lihatPetugas.php');
    }
    elseif($result == 100){
      echo notifikasi('Akun tidak berhasil ditambah', 'tambahPetugas.php');
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
  <title>REGISTRASI PETUGAS PENGADUAN MASYARAKAT</title>
</head>

<body>
  <div class="sidebar">
    <a href="dashboard.php">DASHBOARD</a>
    <a href="lihatPengaduan.php">DAFTAR PENGADUAN</a>
    <?php
      if($_SESSION['level'] == 'admin'){
        echo "<a href='tambahPetugas.php' class='active'>TAMBAH PETUGAS</a>
        <a href='lihatPetugas.php'>LIHAT PETUGAS</a>";
      }
    ?>
    <a href="logout.php">LOGOUT</a>
  </div>

  <div class="content2">
    <h2 style="text-align: center;">TAMBAH PETUGAS</h2>
    <div class="container">
      <form action="tambahPetugas.php" method="POST">
      <h2 style="text-align: center;">FORM REGISTRASI PETUGAS</h2>
      <div class="container">

        <label for="namaRegistrasiPetugas"><b>Nama Petugas:</b></label>
        <input type="text" placeholder="Enter Nama" name="namaRegistrasiPetugas" required>

        <label for="usernameRegistrasiPetugas"><b>Username:</b></label>
        <input type="text" placeholder="Enter Username" name="usernameRegistrasiPetugas" required>

        <label for="passwordRegistrasiPetugas"><b>Password:</b></label>
        <input type="password" placeholder="Enter Password" name="passwordRegistrasiPetugas" required>

        <label for="teleponRegistrasiPetugas"><b>Telepon/HP:</b></label>
        <input type="text" placeholder="Enter Telepon/HP" name="teleponRegistrasiPetugas" required>
        
        <center> 
          <button type="submit" name="submitRegistrasiPetugas">Registrasi</button>
        </center> 

      </div>
    </form>
    </div>
  </div>
  
</body>
</html>
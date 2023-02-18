<?php
	
	class Connection{
		public $host = "localhost";
		public $user = "root";
		public $password = "";
		public $db_name = "pengaduan_masyarakat";
		public $conn;

		public function __construct(){
			$this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);
		}
	}

	class Signin extends Connection{
		public function login($username, $password){
			$password2 = md5($password);
			$result = mysqli_query($this->conn, "SELECT * FROM petugas WHERE username = '$username' AND password = '$password2'");
			$login = mysqli_fetch_assoc($result);

			if(mysqli_num_rows($result) > 0){
				if($login['username'] == $username && $login['password'] == $password2){
					$_SESSION['id_petugas'] = $login['id_petugas'];
					$_SESSION['nama_petugas'] = $login['nama_petugas'];
					$_SESSION['username'] = $login['username'];
					$_SESSION['password'] = $login['password'];
					$_SESSION['telpon'] = $login['telp'];
					$_SESSION['level'] = $login['level'];

					return 1;
					// Login Berhasil
				}
				else{
					return 10;
					// Username Atau Password Salah
				}
			}
			else{
				return 10;
				// Username Tidak Ditemukan
			}
		}
	}

?>
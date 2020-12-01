<?php
// mengaktifkana sesion php
 session_start();
 // menghubungkan dengan koneksi ke databse
 include 'koneksi.php';
 // menangkap data yang dikirim dari form
 $username = $_POST['username'];
 $password = $_POST['password'];
 // proses seleksi database
 $result = pg_query($host, "SELECT * FROM users where username = '$username' and
password = '$password'");
 $cek = pg_num_rows($result);
 if ($cek > 0) {
 // menyimpan session user,
$_SESSION['username'] = $username;
 $_SESSION['status'] = "sudah_login";
header("location:admin.php");
} else {
     header("location:login.php?pesan=gagal");
}
?>
<?php
//koneksi ke database
try {
$dbopts = parse_url(getenv('DATABASE_URL'));
$host=pg_connect("host=".$dbopts["host"]." user=".$dbopts["user"]."
dbname=".ltrim($dbopts["path"], '/')." password=".$dbopts["pass"]);
} Catch (Exception $e) {
echo "Koneksi database gagal: " . $e->getMessage();
die;
}
?>
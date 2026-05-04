<?php
$host = "localhost";
$user = "root";
$pw = "";
$db = "db_tib4";

$koneksi = new mysqli($host, $user, $pw, $db);

if ($koneksi->connect_error) { 
    die("koneksi databases gagal: " . $koneksi->connect_error);
} else {
    echo "koneksi database berhasil";
}
?>
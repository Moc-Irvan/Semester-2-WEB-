<?php
// 1) defisinikan variable koneksi databse
$host = "localhost";
$dbname = "db_puskesmas";
$username = "root";
$password = "";

// 2) buat DSN dan opsi akses database
$dsn = "mysql:host=$host;dbname=$dbname";

// 3) buat koneksi ke database
$dbh = new PDO($dsn, $username, $password);
?>
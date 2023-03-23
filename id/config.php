<?php
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
  $uri = 'https://';
} else {
  $uri = 'http://';
}
$uri .= $_SERVER['HTTP_HOST'];

//live
// define('BASE_URL', $uri . "/id");
//local
define('BASE_URL', $uri . "/wps/id");

//live
// define('SITE_PATH', $uri . "/id/admin/img/news/");
//local
define('SITE_PATH', $uri . "/wps/id/admin/img/news/details/");
define('SITE_NEWS', $uri . "/wps/id/admin/img/news/");

define('DS', '/');

// Koneksi Live
// $servername = "localhost";
// $username = "mitm9652_mitsubishi";
// $password = "Orig1nmitsubishi2022";
// $dbname = "mitm9652_mitsubishi";
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// if (!$conn) {
//   echo "Failed to connect!";
// }
// Akhir Koneksi Live

// Koneksi Local
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wps-id";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  echo "Failed to connect!";
}
  // Akhir Koneksi Local

<?php
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
  $uri = 'https://';
} else {
  $uri = 'http://';
}
$uri .= $_SERVER['HTTP_HOST'];

//live
// define('BASE_URL', $uri);
//local
define('BASE_URL', $uri . "/wps");

//live
// define('SITE_PATH', $uri . "/wps/admin/img/news/");
// define('SITE_NEWS', $uri . "/wps/admin/img/news/");
// define('SITE_TESTIMONIAL', $uri . "/wps/admin/img/testimonial/");
//local
define('SITE_PATH', $uri . "/wps/admin/img/news/details/");
define('SITE_NEWS', $uri . "/wps/admin/img/news/");
define('SITE_TESTIMONIAL', $uri . "/wps/admin/img/testimonial/");

define('DS', '/');

// Koneksi Live
// $servername = "localhost";
// $username = "harb2847_eben";
// $password = "Orig1neben2022";
// $dbname = "harb2847_wps";
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// if (!$conn) {
//   echo "Failed to connect!";
// }
// Akhir Koneksi Live

// Koneksi Local
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wps";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  echo "Failed to connect!";
}
// Akhir Koneksi Local

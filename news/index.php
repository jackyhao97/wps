<?php 
  require_once '../config.php';
  $rand = rand(1,1000);
?>

<!doctype html>
<html lang="en">

<head>
  <?php 
    require_once '../header.php';
  ?>
</head>

<body>
  <?php 
    require_once '../navbar-news.php';
  ?>
  <section class="wps-banner" id="banner">
    <img src="<?=BASE_URL.DS.'assets/img/about/about-us.jpg'?>" alt="About Us" class="w-100">
  </section>
  <?php 
    $select = $conn->query("SELECT * FROM tb_news WHERE id = 7");
    $row = $select->fetch_array(MYSQLI_ASSOC);
  ?>

  <section class="news mt-5 mb-5" id="news">
    <div class="container">
      <?=$row["keterangan"]?>
    </div>
  </section>

  <?php
    require_once '../footer.php';
  ?>
</body>
</html>
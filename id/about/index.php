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
    require_once '../navbar-about.php';
  ?>
  <section class="wps-banner" id="banner">
    <?php
      $banner = $conn->query("SELECT path FROM tb_banner WHERE category = 'about'");
      $rowBanner = $banner->fetch_array();
    ?>
    <img src="<?=BASE_URL.DS.'admin/img/banner/'.$rowBanner['path']?>" alt="Banner" class="w-100">
  </section>
  <?php 
    $select = $conn->query("SELECT * FROM tb_about ORDER BY id DESC LIMIT 0, 1");
    $row = $select->fetch_array(MYSQLI_ASSOC);
  ?>

  <section class="about mt-5 mb-5" id="about">
    <div class="container">
      <?=$row["konten"]?>
    </div>
  </section>

  <?php
    require_once '../footer.php';
  ?>
</body>
</html>
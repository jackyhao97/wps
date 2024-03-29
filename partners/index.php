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
    require_once '../navbar-partners.php';
  ?>
  <section class="wps-banner" id="banner">
    <?php
      $banner = $conn->query("SELECT path FROM tb_banner WHERE category = 'partners'");
      $rowBanner = $banner->fetch_array();
    ?>
    <img src="<?=BASE_URL.DS.'admin/img/banner/'.$rowBanner['path']?>" alt="Banner" class="w-100">
  </section>
  <section class="partners mt-5 mb-5" id="partners">
    <div class="container">
      <div class="row">
      <?php 
        $select = $conn->query("SELECT * FROM tb_partners ORDER BY id DESC");
        while($row = $select->fetch_array(MYSQLI_ASSOC)) :
      ?>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 align-partners">
          <a href="<?=$row['url']?>" target="_blank" class="text-decoration-none">
            <img src="<?=BASE_URL.DS.'admin/img/partners/'.$row['path']?>" alt="" class="img-partners">
            <p class="text-justify text-dark"><?=$row["deskripsi"]?></p>
          </a>
        </div>
      <?php
        endwhile;
      ?>
      </div>
    </div>
  </section>

  <?php
    require_once '../footer.php';
  ?>
</body>
</html>
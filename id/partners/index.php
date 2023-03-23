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
    <img src="<?=BASE_URL.DS.'assets/img/partners/partners.PNG'?>" alt="Partners" class="w-100">
  </section>
  <section class="partners mt-5 mb-5" id="partners">
    <div class="container">
      <div class="row">
      <?php 
        $select = $conn->query("SELECT * FROM tb_partners ORDER BY id DESC");
        while($row = $select->fetch_array(MYSQLI_ASSOC)) :
      ?>
        <div class="col-lg-2 col-md-4 col-sm-6 col-12 align-partners">
          <a href="<?=$row['url']?>" target="_blank">
            <img src="<?=BASE_URL.DS.'admin/img/partners/'.$row['path']?>" alt="" class="img-partners">
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
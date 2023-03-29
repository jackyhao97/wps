<?php 
  require_once 'config.php';
  $rand = rand(1,1000);
?>

<!doctype html>
<html lang="en">

<head>
  <?php 
    require_once 'header.php';
  ?>
</head>

<body>
  <?php 
    require_once 'navbar.php';
  ?>
  <section class="slider" id="slider">
    <div id="carouselExampleIndicators" class="carousel slide wps-slider">
      <div class="carousel-indicators">
      <?php
        $sqlcount = $conn->query("SELECT COUNT(id) AS total FROM tb_slider");
        $rowcount = $sqlcount->fetch_array();
        $i = 0;
        while($i < $rowcount["total"]) :
          if($i == 0) {
      ?>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?=$i?>" class="active" aria-current="true" aria-label="Slide <?=$i+1?>"></button>
      <?php
          } else {
      ?>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?=$i?>" aria-label="Slide <?=$i+1?>"></button>
      <?php
          }
        $i++;
        endwhile;
      ?>
      </div>
      <div class="carousel-inner">
      <?php
        $sqlselect = $conn->query("SELECT name,path FROM tb_slider ORDER BY urutan");
        $j = 0;
        while($row = $sqlselect->fetch_array()) :
          if($j == 0) {
      ?>
        <div class="carousel-item active">
          <img src="<?=BASE_URL.DS.'admin/img/slider/'.$row["path"]?>" class="d-block w-100" alt="<?=$row["name"]?>">
        </div>
      <?php
          } else {
      ?>
        <div class="carousel-item">
          <img src="<?=BASE_URL.DS.'admin/img/slider/'.$row["path"]?>" class="d-block w-100" alt="<?=$row["name"]?>">
        </div>
      <?php
          }
          $j++;
        endwhile;
        ?>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <div class="container p-2 p-sm-3 wps-slider-button">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </div>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <div class="container p-2 p-sm-3 wps-slider-button">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </div>
      </button>
    </div>
  </section>
  <section class="content mt-4rem" id="content">
    <div class="container text-center">
      <h4>At WPS, we are passionate about solving your problems in</h4>
    </div>
    <div class="container mt-5">
      <div class="row">
      <?php 
        $sqlcontent = $conn->query("SELECT judul, keterangan, path FROM tb_content ORDER BY urutan");
        while ($rowContent = $sqlcontent->fetch_array()) :
      ?>
        <div class="col-md-4 col-sm-6 col-12 mb-5">
          <div class="card w-100">
            <img src="<?=BASE_URL.DS.'admin/img/content/'.$rowContent['path']?>" class="card-img-top" alt="<?=$rowContent['judul']?>">
            <div class="card-body">
              <h5 class="card-title title fw-semibold text-decoration-none"><?=$rowContent['judul']?></h5>
              <p class="card-text text-justify mt-4"><?=$rowContent['keterangan']?></p>
            </div>
          </div>
        </div>
      <?php
        endwhile;
      ?>
      </div>
    </div>
  </section>
  <?php 
    require_once 'footer.php';
  ?>
</body>
</html>
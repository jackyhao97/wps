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
    require_once '../navbar-services.php';
  ?>
  <section class="wps-banner" id="banner">
    <img src="<?=BASE_URL.DS.'assets/img/services/services.jpg'?>" alt="About Us" class="w-100">
  </section>
  <section class="services mt-5 mb-5" id="services">
    <div class="accordion" id="accordionPanelsStayOpenExample">
      <?php 
        $select = $conn->query("SELECT * FROM tb_service");
        while ($row = $select->fetch_array(MYSQLI_ASSOC)) :
          $i = 1;
      ?>
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-heading<?=$i?>">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?=$i?>" aria-expanded="true" aria-controls="panelsStayOpen-collapse<?=$i?>">
            <?=$row["judul"]?>
          </button>
        </h2>
      <?php
        if ($i == 1) {
      ?>
        <div id="panelsStayOpen-collapse<?=$i?>" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading<?=$i?>">
          <div class="accordion-body">
            <img src="<?=BASE_URL.DS."$row["path"]"?>" alt="<?=$row['judul']?>" class="w-100">
            <?=$row["keterangan"]?>
          </div>
        </div>
      <?php
        }
        else {
      ?>
        <div id="panelsStayOpen-collapse<?=$i?>" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading<?=$i?>">
          <div class="accordion-body">
            <?=$row["keterangan"]?>
          </div>
        </div>
      <?php
        }
      ?>
      </div>
      <?php
          $i++;
        endwhile;
      ?>
    </div>
  </section>

  <?php
    require_once '../footer.php';
  ?>
</body>
</html>
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
    require_once '../navbar-career.php';
  ?>
  <section class="wps-banner" id="banner">
    <img src="<?=BASE_URL.DS.'assets/img/career/career.jpg'?>" alt="Career" class="w-100">
  </section>
  <main>
    <div class="container mt-5 mb-5">
      <p class="text-justify">
        We welcome fresh graduates with a D3 or S1 to join our consultant team. Send your CV to
        <a href="mailto:hr@widyapresisisolusi.com" target="_blank">hr@widyapresisisolusi.com</a>
      </p>
      <p>Our latest job opportunities are :</p>
    </div>
  </main>
  <section class="career mt-5 mb-5" id="career">
    <div class="container">
      
      <div class="accordion" id="accordionExample">
        <?php 
          $select = $conn->query("SELECT * FROM tb_services ORDER BY urutan");
          $i = 1;
          while ($row = $select->fetch_array(MYSQLI_ASSOC)) :
        ?>
        <div class="accordion-item">
        <?php
          if ($i == 1) {
        ?>
          <h2 class="accordion-header" id="heading<?=$i?>">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?=$i?>" aria-expanded="true" aria-controls="collapse<?=$i?>">
              <?=$row["judul"]?>
            </button>
          </h2>
          <div id="collapse<?=$i?>" class="accordion-collapse collapse show" aria-labelledby="heading<?=$i?>" data-bs-parent="#accordionExample">
            <div class="accordion-body accordion-custom">
              <img src="<?=BASE_URL.DS.'admin/img/services/'.$row['path']?>" alt="<?=$row['judul']?>" class="w-100 mb-5">
              <?=$row["keterangan"]?>
            </div>
          </div>
        <?php
          }
          else {
        ?>
          <h2 class="accordion-header" id="heading<?=$i?>">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?=$i?>" aria-expanded="false" aria-controls="collapse<?=$i?>">
              <?=$row["judul"]?>
            </button>
          </h2>
          <div id="collapse<?=$i?>" class="accordion-collapse collapse" aria-labelledby="heading<?=$i?>" data-bs-parent="#accordionExample">
            <div class="accordion-body accordion-custom">
              <img src="<?=BASE_URL.DS.'admin/img/services/'.$row['path']?>" alt="<?=$row['judul']?>" class="w-100 mb-5">
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
      </div>

      <div class="row">
      <?php 
        $select = $conn->query("SELECT * FROM tb_career ORDER BY urutan");
        while($row = $select->fetch_array(MYSQLI_ASSOC)) :
      ?>
        <div class="col-12 mb-5">
          <h2 class="fw-bold"><?=$row["title"]?></h2>
          <?=$row["requirement"]?>
          <div class="text-end">
            <a href="mailto:hr@widyapresisisolusi.com" class="btn btn-success" target="_blank">Apply Now</a>
          </div>
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
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
        Kami menyambut lulusan baru dengan gelar D3 atau S1 untuk bergabung dengan tim konsultan kami. Kirimkan CV Anda ke
        <a href="mailto:hr@widyapresisisolusi.com" target="_blank">hr@widyapresisisolusi.com</a>
      </p>
      <p>Peluang kerja terbaru kami adalah :</p>
    </div>
  </main>
  <section class="career mt-5 mb-5" id="career">
    <div class="container">
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Untuk WPS
            </button>
          </h2>
        <?php 
          $select = $conn->query("SELECT * FROM tb_career ORDER BY urutan");
          while ($row = $select->fetch_array(MYSQLI_ASSOC)) :
        ?>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body accordion-custom">
              <h2 class="fw-bold"><?=$row["title"]?></h2>
              <?=$row["requirement"]?>
              <div class="text-end">
                <a href="mailto:hr@widyapresisisolusi.com?subject=Apply for <?=$row['title']?> Position" class="btn btn-success" target="_blank">Apply Now</a>
              </div>
            </div>
          </div>
        <?php
          endwhile;
        ?>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              Untuk Klien
            </button>
          </h2>
        <?php 
          $select = $conn->query("SELECT * FROM tb_career_clients ORDER BY urutan");
          while ($row = $select->fetch_array(MYSQLI_ASSOC)) :
        ?>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body accordion-custom">
              <h2 class="fw-bold"><?=$row["title"]?></h2>
              <?=$row["requirement"]?>
              <div class="text-end">
                <a href="mailto:hr@widyapresisisolusi.com?subject=Apply for <?=$row['title']?> Position" class="btn btn-success" target="_blank">Apply Now</a>
              </div>
            </div>
          </div>
        <?php
          endwhile;
        ?>
        </div>
      </div>
    </div>
  </section>

  <?php
    require_once '../footer.php';
  ?>
</body>
</html>
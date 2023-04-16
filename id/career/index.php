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
    <?php
      $banner = $conn->query("SELECT path FROM tb_banner WHERE category = 'career'");
      $rowBanner = $banner->fetch_array();
    ?>
    <img src="<?=BASE_URL.DS.'admin/img/banner/'.$rowBanner['path']?>" alt="Banner" class="w-100">
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
              <h4 class="fw-bold">Pekerjaan tersedia di Widya Presisi Solusi</h4>
            </button>
          </h2>
        <?php 
          $select = $conn->query("SELECT * FROM tb_career ORDER BY urutan");
          while ($row = $select->fetch_array(MYSQLI_ASSOC)) :
        ?>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body accordion-custom">
              <h4 class="fw-bold"><?=$row["title"]?></h4>
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
              <h4 class="fw-bold">Pekerjaan tersedia di Klien</h4>
            </button>
          </h2>
        <?php 
          $select = $conn->query("SELECT * FROM tb_career_clients ORDER BY urutan");
          while ($row = $select->fetch_array(MYSQLI_ASSOC)) :
        ?>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body accordion-custom">
              <h4 class="fw-bold"><?=$row["title"]?></h4>
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
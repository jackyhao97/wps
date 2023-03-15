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
      <p>
        We welcome fresh graduates with a D3 or S1 to join our consultant team. Send your CV to
        <a href="mailto:hr@widyapresisisolusi.com" target="_blank">hr@widyapresisisolusi.com</a>
      </p>
      <p>Our latest job opportunities are :</p>
    </div>
  </main>
  <section class="career mt-5 mb-5" id="career">
    <div class="container">
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
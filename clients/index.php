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
    require_once '../navbar-clients.php';
  ?>
  <section class="wps-banner" id="banner">
    <img src="<?=BASE_URL.DS.'assets/img/clients/banner/banner.jpg'?>" alt="Clients" class="w-100">
  </section>
  <main>
    <div class="container mt-5 mb-5">
      <p>We have helped a wide variety of local and multinational Industries. We understand that every Industry have unique characteristics and challenges in order to survive and achieve their business objective(s). We have helped industries in these sectors :</p>
      <ul>
        <li>Manufacturing</li>
        <li>Distribution</li>
        <li>Retail</li>
        <li>Multi Finance</li>
        <li>Securities</li>
        <li>Assets Management</li>
        <li>Property Development</li>
        <li>Property Management</li>
      </ul>
    </div>
  </main>
  <section class="clients mt-5 mb-5" id="clients">
    <div class="container">
      <div class="row">
      <?php 
        $select = $conn->query("SELECT * FROM tb_clients ORDER BY id DESC");
        while($row = $select->fetch_array(MYSQLI_ASSOC)) :
      ?>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
          <a href="<?=$row['url']?>" target="_blank">
            <img src="<?=BASE_URL.DS.'admin/img/clients/'.$row['path']?>" alt="" class="w-100">
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
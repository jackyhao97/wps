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
    <?php
      $banner = $conn->query("SELECT path FROM tb_banner WHERE category = 'clients'");
      $rowBanner = $banner->fetch_array();
    ?>
    <img src="<?=BASE_URL.DS.'admin/img/banner/'.$rowBanner['path']?>" alt="Banner" class="w-100">
  </section>
  <main>
    <div class="container mt-5 mb-5">
      <p class="text-justify">We have helped a wide variety of local and multinational Industries. We understand that every Industry have unique characteristics and challenges in order to survive and achieve their business objective(s). We have helped industries in these sectors :</p>
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
  <section class="clients mt-5" id="clients">
    <div class="container">
      <div class="row">
      <?php 
        $select = $conn->query("SELECT * FROM tb_clients ORDER BY urutan");
        while($row = $select->fetch_array(MYSQLI_ASSOC)) :
      ?>
        <div class="col-lg-2 col-md-4 col-sm-6 col-12 align-clients">
          <a href="<?=$row['url']?>" target="_blank">
            <img src="<?=BASE_URL.DS.'admin/img/clients/'.$row['path']?>" alt="" class="img-clients">
          </a>
        </div>
      <?php
        endwhile;
      ?>
      </div>
    </div>
  </section>
  <section class="testimonial mt-5 mb-5 text-center" id="testimonial">
    <h2 class="fw-bold mb-5">Testimoni</h2>
    <div class="swiper-container swiper-container-testimonial">
      <div class="swiper-wrapper">
        <?php
          $testimonial = $conn->query("SELECT * FROM tb_testimonial ORDER BY id DESC LIMIT 0,5");
          while ($rowTestimonial = $testimonial->fetch_array()) :
        ?>
          <div class="swiper-slide">
            <img src="<?=SITE_TESTIMONIAL.$rowTestimonial['path']?>" alt="Testimoni" class="img-testimonial">
            <p class="fw-bold"><?=$rowTestimonial["nama"]?></p>
            <p class="deskripsi-testimoni"><?=$rowTestimonial["testimoni"]?></p>
          </div>
        <?php            
          endwhile;
        ?>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <!-- Add Pagination -->
      <div class="swiper-pagination swiper-pagination-testimonial"></div>
    </div>
  </section>

  <?php
    require_once '../footer.php';
  ?>

  <script>
    const swiperTestimonial = new Swiper('.swiper-container-testimonial', {
      pagination: {
        el: '.swiper-pagination-testimonial',
        clickable: true,
      },
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
    });
  </script>
</body>
</html>
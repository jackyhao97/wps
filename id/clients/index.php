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
      <p class="text-justify">Kami telah membantu berbagai Industri lokal dan multinasional. Kami memahami bahwa setiap Industri memiliki karakteristik dan tantangan yang unik untuk bertahan dan mencapai tujuan bisnis mereka. Kami telah membantu industri di sektor ini:</p>
      <ul>
        <li>Manufaktur</li>
        <li>Distribusi</li>
        <li>Pengecer</li>
        <li>Multi Keuangan</li>
        <li>Keamanan</li>
        <li>Managemen Aset</li>
        <li>Pengembangan Properti</li>
        <li>Manajemen Properti</li>
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
            <h3><?=$rowTestimonial["nama"]?></h3>
            <p><?=$rowTestimonial["testimoni"]?></p>
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
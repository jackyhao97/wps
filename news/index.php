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
    require_once '../navbar-news.php';
  ?>
  <section class="wps-banner" id="banner">
    <div class="blog" id="blog">
      <div class="swiper-container swiper-container-blog">
        <div class="swiper-wrapper">
          <?php
            $result = $conn->query("SELECT * FROM tb_news ORDER BY id DESC LIMIT 0,10");
            while ($row = $result->fetch_array()) :
              $date = strtotime($row["tgl_berita"]);
              $date = date("d-m-Y", $date);
          ?>            
            <div class="swiper-slide">
              <img src="<?=SITE_NEWS.$row['path']?>" alt="<?=$row['judul']?>" class="gambar">
              <p class="tanggal fw-bold"><?=$date?></p>
              <h3 class="judul"><?=$row["judul"]?></h3>                            
              <!-- <a class="btn btn-outline-light selengkapnya" name="btnSelengkapnya" href="detail.php?url=<?=$row['seo_link']?>"><i class="fas fa-plus mr-2"></i>SELENGKAPNYA</a> -->
              <a class="btn btn-outline-light selengkapnya" name="btnSelengkapnya" href="./<?=$row['judul']?>"><i class="fas fa-plus me-2"></i>SELENGKAPNYA</a>
            </div>
          <?php            
            endwhile;
          ?>
        </div>
      </div>    
      <!-- Add Pagination -->
      <div class="swiper-pagination swiper-pagination-blog"></div>
    </div>
  </section>

  <?php
    require_once '../footer.php';
  ?>

  <script>
    const swiperBlog = new Swiper('.swiper-container-blog', {
      pagination: {
        el: '.swiper-pagination-blog',
        clickable: true,
      },
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
    });
  </script>
</body>
</html>
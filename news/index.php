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
              <a class="btn btn-outline-light selengkapnya" name="btnSelengkapnya" href="./<?=$row['seo_link']?>"><i class="fas fa-plus me-2"></i>SELENGKAPNYA</a>
            </div>
          <?php            
            endwhile;
          ?>
        </div>
      </div>    
      <!-- Add Pagination -->
      <div class="swiper-pagination swiper-pagination-blog"></div>
    </div>

    <div class="container-grid-berita berita mt-5">
      <span class="news nc-1"><i class="fas fa-caret-right caret-custom"></i> <h5 class="text-uppercase d-inline-block fw-bold"> Berita Terpopuler</h5></span>
      <?php
        $tampil = $conn->query("SELECT * FROM tb_news ORDER BY id DESC LIMIT 0,1");
        $rowTampil = $tampil->fetch_array();
      ?>
      <div class="news n-1">
        <a href="<?= BASE_URL.DS.'news'.DS.$rowTampil['seo_link']; ?>">
          <img class="fit-image" src="<?=SITE_NEWS.$rowTampil['path']?>" alt="news-4">
        </a>
        <a class="p-4 article-title article-title-utama" href="<?= BASE_URL.DS.'news'.DS.$rowTampil['seo_link']; ?>">
          <span class="small"><?= date("d-m-Y", strtotime($rowTampil["tgl_berita"])) ?></span><br>
          <?= $rowTampil["judul"]; ?>
        </a>       
      </div>
      <?php
        $jumlah = $conn->query("SELECT COUNT('id') FROM tb_news");
        $result = $jumlah->fetch_array();
        $result = $result[0] - 4;
        $show = $conn->query("SELECT * FROM tb_news LIMIT 1,4");
        $id = 2;
        while ($rowShow = $show->fetch_assoc()) :
      ?>
      <div class="news n-<?=$id?>">
        <a href="<?=BASE_URL.DS.'news'.DS.$rowShow['seo_link']?>">
          <img class="fit-image" src="<?=SITE_NEWS.$rowShow['path']?>" alt="news-4">
        </a>
        <a class="p-4 article-title" href="<?= BASE_URL.DS.'news'.DS.$rowShow['seo_link']; ?>">
          <span class="small"><?= date("d-m-Y", strtotime($rowShow["tgl_berita"])) ?></span><br>
          <?= $rowShow["judul"]; ?>
        </a>
      </div>
      <?php
        $id++;
        endwhile;   
      ?>
    </div>

    <div class="kategori text-black mt-5" id="kategori">
      <div class="container">
        <div class="row fw-bold text-right overflow-auto">
          <div class="col-2">
            <a href="javascript:void(0)" id="semua" class="blog-active category"><i class="fas fa-caret-right caret-custom"></i> BERITA LAINNYA</a>
          </div>
          <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
          <!-- <?php
            $category = $conn->query("SELECT id, category, tipe FROM tb_category");
            while ($rowCategory = $category->fetch_array()) :
              $tipe = $rowCategory["tipe"];
              $id = $rowCategory["id"];
          ?>
          <div class="col-2">
            <a href="javascript:void(0)" id="<?=$tipe?>" class="category"><?=$rowCategory["category"]?></a>
          </div>
          <script>
            $("#<?=$tipe?>").click(function() {        
              let tipe = "<?=$tipe?>";
              let id = "<?=$id?>";
              $(".category").each(function() {
                $(this).removeClass("blog-active");
              })
              $(this).addClass("blog-active");
              $.ajax({
                type: "post",
                url: "data-news.php",
                data: {tipe: tipe, id: id},
                success: function(data) {
                  $("#hasil").html(data);
                },
                error: function(data) {
                  console.log('error');
                }
              })
            })   
          </script>
          <?php
            endwhile;
          ?> -->
        </div>
      </div>
    </div>

    <div class="container mt-5 kumpulan-berita" id="hasil">          
      <!-- Berita inject disini -->
    </div>
  </section>

  <?php
    require_once '../footer-news.php';
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

    function loadData(page, query = '') {
      $.ajax({
        url: "pagination.php",
        method: "POST",
        data: {page: page, query: query},
        success: function(data) {
          $("#hasil").html(data);
        }
      })
    }
    loadData(1);

    $(document).on('click', '.page-link', function() {      
      let page = $(this).data('page_number');
      loadData(page);
      $("html, body").animate(
      {
        scrollTop: $(".kumpulan-berita").offset().top - 180,
      },
      500,
      "easeInOutExpo"
      );  
    })

    $("#semua").click(function() {
      $(".category").each(function() {
        $(this).removeClass("blog-active");
      })
      $(this).addClass("blog-active");
      loadData(1);
    })
  </script>
</body>
</html>
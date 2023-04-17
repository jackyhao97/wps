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
    <?php
      $banner = $conn->query("SELECT path FROM tb_banner WHERE category = 'news'");
      $rowBanner = $banner->fetch_array();
    ?>
    <img src="<?=BASE_URL.DS.'admin/img/banner/'.$rowBanner['path']?>" alt="Banner" class="w-100">
    <div class="container berita mt-5">
      <span class="news nc-1"><i class="fas fa-caret-right caret-custom"></i> <h5 class="text-uppercase d-inline-block fw-bold"> Berita Terpopuler</h5></span>
      <div class="row mt-3">
      <?php
        $tampil = $conn->query("SELECT * FROM tb_news ORDER BY viewed DESC LIMIT 0, 4");
        while ($rowTampil = $tampil->fetch_array()) :
      ?>
        <div class="col-12 col-sm-4 col-md-3">
          <div class="card">
            <img src="<?=BASE_URL.DS.'admin/img/news/'.$rowTampil["path"]?>" class="card-img-top" alt="<?=$rowTampil["name"]?>">
            <div class="card-body">
              <p class="card-title fw-bold"><?=$rowTampil["judul"]?></p>
              <p class="mb-3 mt-3"><?=$rowTampil["deskripsi"]?></p>
              <a href="./<?=$rowTampil["seo_link"]?>">[Read More]</a>
            </div>
          </div>
        </div>
      <?php
        endwhile;
      ?>
      </div>
    </div>

    <div class="kategori text-black mt-5" id="kategori">
      <div class="container">
        <div class="row fw-bold text-right overflow-auto">
          <div class="col-12">
            <a href="javascript:void(0)" id="semua" class="category">
              <h5 class="fw-bold">BERITA LAINNYA</h5>
            </a>
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

    <div class="container kumpulan-berita" id="hasil">          
      <!-- Berita inject disini -->
    </div>
  </section>

  <?php
    require_once '../footer-news.php';
  ?>

  <script>
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
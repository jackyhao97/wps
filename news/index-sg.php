<?php
  require_once '../config.php';
  require_once '../koneksi.php';
  require_once("../mitsubishi-medan/component/FileGetContents.php");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-30618930-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-30618930-3');
    </script>

    <script>
	  !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version="2.0";n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","1274490382674254");fbq("track","PageView");
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1274490382674254&ev=PageView&noscript=1"/></noscript>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berita Mitsubishi | Sardana Berlian</title>
    <link rel="manifest" href="../manifest.json">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= BASE_URL.DS. 'apple-touch-icon.png'; ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= BASE_URL.DS. 'favicon-32x32.png'; ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= BASE_URL.DS. 'favicon-16x16.png'; ?>">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#333">
    <?php readfile('../component/meta/Home.php')?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/brands.css"
        integrity="sha384-i2PyM6FMpVnxjRPi0KW/xIS7hkeSznkllv+Hx/MtYDaHA5VcF0yL3KVlvzp8bWjQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/solid.css"
        integrity="sha384-ioUrHig76ITq4aEJ67dHzTvqjsAP/7IzgwE7lgJcg2r7BRNGYSK0LwSmROzYtgzs" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/fontawesome.css"
        integrity="sha384-sri+NftO+0hcisDKgr287Y/1LVnInHJ1l+XC7+FOabmTTIK0HnE2ID+xxvJ21c5J" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.5/swiper-bundle.min.css" integrity="sha512-5vO03tOXbvqdej8rp7j/maGugo+rvwfO80cG/nqKDhumZMJjwOn6O1VO2S6x2G/NsRvzrywTgmPDuz5DSzh+Fw==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
    <script src=" https://cdn.jsdelivr.net/gh/aFarkas/lazysizes/lazysizes.min.js" async=""></script>    
</head>
<body>
    <header>
        <?php require_once("../mitsubishi-medan/component/Header.php");?>
    </header>
    <div class="blog" id="blog">
      <!-- Swiper -->
      <div class="swiper-container swiper-container-blog">
        <div class="swiper-wrapper">
          <?php
            // $result = $koneksi->query("SELECT * FROM news WHERE kategori = 'SG' AND (tipe = 'PROMO' OR tipe = 'EVENT' OR tipe = 'HYPE') ORDER BY id DESC LIMIT 0,5");
            $result = $koneksi->query("SELECT * FROM news WHERE kategori = 'SG' ORDER BY id DESC LIMIT 0,10");
            while ($row = $result->fetch_array()) :
              $date = strtotime($row["tanggalpublish"]);
              $date = date("d-m-Y", $date);
          ?>            
            <div class="swiper-slide">
              <img src="https://sardanagroup.co.id/HP/production/images/news/<?=$row["Paths"]?>" alt="Blog Mitsubishi Sardana Berlian" class="gambar">
              <p class="tanggal mmc-bold"><?=$date?></p>
              <h3 class="judul"><?=$row["judul"]?></h3>                            
              <!-- <a class="btn btn-outline-light selengkapnya" name="btnSelengkapnya" href="detail.php?url=<?=$row['seo_link']?>"><i class="fas fa-plus mr-2"></i>SELENGKAPNYA</a> -->
              <a class="btn btn-outline-light selengkapnya" name="btnSelengkapnya" href="./<?=$row['seo_link']?>"><i class="fas fa-plus mr-2"></i>SELENGKAPNYA</a>
            </div>
          <?php            
            endwhile;
          ?>
        </div>
      </div>    
      <!-- Add Pagination -->
      <div class="swiper-pagination swiper-pagination-blog"></div>
    </div>

    <div class="kategori text-black mt-3" id="kategori">
      <div class="container">
        <div class="row mmc-medium text-right overflow-auto">
          <div class="col-2">
            <a href="javascript:void(0)" id="semua" class="blog-active category">SEMUA</a>
          </div>
          <div class="col-2">
            <a href="javascript:void(0)" id="berita" class="category">BERITA</a>
          </div>
          <div class="col-2">
            <a href="javascript:void(0)" id="promo" class="category">PROMO</a>
          </div>
          <div class="col-2">
            <a href="javascript:void(0)" id="event" class="category">EVENT</a>
          </div>
          <div class="col-2">
            <a href="javascript:void(0)" id="hype" class="category">HYPE</a>
          </div>
          <div class="col-2">
            <a href="javascript:void(0)" id="produk" class="category">PRODUK</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-5 kumpulan-berita" id="hasil">          
      <!-- Berita inject disini -->
    </div>

    <footer class="pt-3">
        <?php require_once("../component/Footer.php")?>
    </footer>
    <?php readfile("../component/Menu.php")?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/gh/uxsolutions/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script defer src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15/dist/smooth-scroll.polyfills.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.5/swiper-bundle.min.js" integrity="sha512-FOwkbQRYQPDMpsAuQVcbA0GclkyNgmNGyhdxwsOAe1PB55Ys/lb9DnnYG0S9IHYs68Miwo9mwEL2+B3aDXW4ww==" crossorigin="anonymous"></script>
    <script src="../assets/js/jquery.easing.1.3.js"></script>
    <script src="../assets/js/index.js"></script>
    <!-- Initialize Swiper -->
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
        // let tipe = "berita";
        // $(".category").each(function() {
        //   $(this).removeClass("blog-active");
        // })
        // $(this).addClass("blog-active");
        // $.ajax({
        //   type: "post",
        //   url: "data-blog.php",
        //   data: {tipe: tipe},
        //   success: function(data) {
        //     $("#hasil").html(data);
        //   },
        //   error: function(data) {
        //     console.log('error');
        //   }
        // })
        $(".category").each(function() {
          $(this).removeClass("blog-active");
        })
        $(this).addClass("blog-active");
        loadData(1);
      })
      $("#berita").click(function() {        
        let tipe = "berita";
        $(".category").each(function() {
          $(this).removeClass("blog-active");
        })
        $(this).addClass("blog-active");
        $.ajax({
          type: "post",
          url: "data-blog.php",
          data: {tipe: tipe},
          success: function(data) {
            $("#hasil").html(data);
          },
          error: function(data) {
            console.log('error');
          }
        })
      })      
      $("#promo").click(function() {        
        let tipe = "promo";
        $(".category").each(function() {
          $(this).removeClass("blog-active");
        })
        $(this).addClass("blog-active");
        $.ajax({
          type: "post",
          url: "data-blog.php",
          data: {tipe: tipe},
          success: function(data) {
            $("#hasil").html(data);
          },
          error: function(data) {
            console.log('error');
          }
        })
      })
      $("#event").click(function() {
        let tipe = "event";
        $(".category").each(function() {
          $(this).removeClass("blog-active");
        })
        $(this).addClass("blog-active");
        $.ajax({
          type: "post",
          url: "data-blog.php",
          data: {tipe: tipe},
          success: function(data) {
            $("#hasil").html(data);
          },
          error: function(data) {
            console.log('error');
          }
        })
      })      
      $("#hype").click(function() {
        let tipe = "hype";
        $(".category").each(function() {
          $(this).removeClass("blog-active");
        })
        $(this).addClass("blog-active");
        $.ajax({
          type: "post",
          url: "data-blog.php",
          data: {tipe: tipe},
          success: function(data) {
            $("#hasil").html(data);
          },
          error: function(data) {
            console.log('error');
          }
        })
      })
      $("#produk").click(function() {
        let tipe = "produk";
        $(".category").each(function() {
          $(this).removeClass("blog-active");
        })
        $(this).addClass("blog-active");
        $.ajax({
          type: "post",
          url: "data-blog.php",
          data: {tipe: tipe},
          success: function(data) {
            $("#hasil").html(data);
          },
          error: function(data) {
            console.log('error');
          }
        })
      })
    </script>
  </body>
</html>
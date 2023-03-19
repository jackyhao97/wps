<?php
  require_once "../config.php";
  require_once "../koneksi.php";
  require_once("../mitsubishi-medan/component/FileGetContents.php");
  $url = $_GET["url"];            
  $result = $koneksi->query("SELECT * FROM news WHERE seo_link = '$url'");
  $row = $result->fetch_array();
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
  <title><?=$row["judul"]?> | Sardana Berlian</title>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.2.0/swiper-bundle.min.css" integrity="sha512-BYn1UZcpzkgi4cForzUzU/FqsewIcfXDYAU0tThFfehimrUrp5hOtcWPI1Wpli8rKopUIhaDCbxXPttBDTISgA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="../../assets/css/styles.css">
  <script src=" https://cdn.jsdelivr.net/gh/aFarkas/lazysizes/lazysizes.min.js" async=""></script>
  <style>
    table {
      width: 100% !important;
    }
  </style>
</head>
<body>
  <header>
      <?php require_once("../mitsubishi-medan/component/Header.php");?>
  </header>

  <div class="detail-blog" id="detailBlog" style="margin-top: 120px">
    <div class="container konten-blog">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?=BASE_URL.'berita-mitsubishi/'?>">Berita</a></li>
          <?php
           $url = $_GET["url"];            
           $result = $koneksi->query("SELECT * FROM news WHERE seo_link = '$url'");           
            if ($result->num_rows > 0) :
              $row = $result->fetch_array();
              $date = strtotime($row["tanggalpublish"]);
              $date = date("d-m-Y", $date);
          ?>
          <li class="breadcrumb-item active" aria-current="page"><?=ucfirst($row["tipe"])?></li>          
        </ol>
      </nav>
      <div class="row text-center mb-4">
        <div class="col-12">
          <img src="https://sardanagroup.co.id/HP/production/images/news/<?=$row['Paths']?>" alt="<?=$row['judul']?>">
        </div>
      </div>        
        <?php
          endif;
        ?>    
      <div class="row mt-5">
        <div class="col-12">
          <h3><?=$row["judul"]?></h3>
          <div class="d-flex justify-content-between align-items-center mt-2">
            <small class="text-muted"><?=ucfirst($row["tipe"])." / ".$date?></small>
            <div>
              <span class="mmc-bold text-muted mr-2">Share</span>
              <a href="https://www.facebook.com/sharer.php?u=https://sardanagroup.co.id/berita-mitsubishi/<?=$row['seo_link']?>"><i class="fab fa-lg fa-facebook mr-1"></i></a>
              <a href="javascript:;" onclick="popUp=window.open('https://twitter.com/intent/tweet?ref_src=twsrc%5Etfw&amp;text=<?=ucwords(str_replace('-',' ',$row['seo_link']))?>&amp;tw_p=tweetbutton&amp;url=https://sardanagroup.co.id/berita-mitsubishi/<?=$row['seo_link']?>', 'popupwindow', 'scrollbars=yes,width=600,height=400');popUp.focus();return false"><i class="fab fa-lg fa-twitter-square mr-1"></i></a>
              <a href="javascript:void(0)" onclick="copyLink()"><i class="fa fa-lg fa-link"></i></a>
            </div>
          </div>
          <a href="https://sardanagroup.co.id/berita-mitsubishi/<?=$row['Paths']?>"></a>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12 mmc-regular">
          <?=$row["keterangan"]?>
        </div>
      </div> 
    </div>
    
    <div class="container">
      <div class="row mt-5 mb-4">
        <div class="col-12">
          <h3 class="mb-4">Berita Lainnya</h3>
        </div>
        <div class="col-12">
          <div class="swiper swiper-container-detail">
            <div class="swiper-wrapper">
              <?php
                $total = $koneksi->query('SELECT COUNT(id) FROM news WHERE kategori = "SG"');
                $total = $total->fetch_array();
                $total = $total[0];
                $min = $total - 20;
                $rand = rand($min, $total);                
                $result = $koneksi->query("SELECT * FROM news WHERE kategori = 'SG' LIMIT $rand,10");
                while ($row = $result->fetch_array()) :
              ?>
              <div class="swiper-slide">
                <div class="card" style="overflow: hidden; cursor: pointer; border-radius: 0 !important; border: 2px solid #e3dfdf;" onclick="window.location='<?=$row["seo_link"]?>'">
                  <div class="card-header" style="border: 0; padding: 0; border-radius: 0 !important; height: 200px; overflow: hidden">
                    <img src="https://sardanagroup.co.id/HP/production/images/news/<?=$row['Paths']?>" class="card-img-top" alt="<?=$row['judul']?>">
                  </div>
                  <div class="card-body">
                    <small class="card-text text-muted"><?=$row["tanggalpublish"]?></small>
                    <p class="card-text" style="margin-bottom: 0; height: 100px"><?=$row["judul"]?></p>
                      <a class="btn btn-danger selengkapnya-lain" href="<?=$row["seo_link"]?>"><i class="fas fa-plus mr-2" style="font-size: 12px;"></i> SELENGKAPNYA</a>
                  </div>
                </div>
              </div>
              <?php
                endwhile;
              ?>
            </div>
            <div class="swiper-button-next swiper-button-next-custom"></div>
            <div class="swiper-button-prev swiper-button-prev-custom"></div>
          </div>
        </div>
      </div>
    </div>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.2.0/swiper-bundle.min.js" integrity="sha512-XHnWZWvy5TkCnPgLU7XsWhGAks1JQ3uFutVxRSH0Z4+djsGkCkxVsYu+JgfrDicvbCmjfUf1HeMWYUvUYKgjzQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="../../assets/js/index.js"></script>
  <script>
    const swiperDetail = new Swiper('.swiper-container-detail', {
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
          spaceBetween: 20
        },
        600: {
          slidesPerView: 2,
          spaceBetween: 20
        },
        // when window width is >= 480px
        800: {
          slidesPerView: 3,
          spaceBetween: 30
        },       
      },
      navigation: {
        nextEl: '.swiper-button-next-custom',
        prevEl: '.swiper-button-prev-custom',
      },
    });

    function copyLink() {
      const link = window.location.href
      navigator.clipboard.writeText(link).then(function() {
        alert('Copied to clipboard!')
      }, function(err) {
        console.error('Could not copy text: ', err.message)
      })
    }
  </script>
</body>
</html>
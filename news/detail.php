<?php
  require_once "../config.php";
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
  <section class="mt-120">
    <div class="detail-blog" id="detailBlog">
      <div class="container konten-blog">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="<?=BASE_URL.DS.'news/'?>">News</a></li>
            <?php
             $url = $_GET["url"];            
             $result = $conn->query("SELECT * FROM tb_news WHERE seo_link = '$url'");
              if ($result->num_rows > 0) :
                $row = $result->fetch_array();
                $date = strtotime($row["tgl_berita"]);
                $date = date("d-m-Y", $date);
                $viewed = $row["viewed"] + 1;
                $id = $row["id"];
                // $update = $conn->query("UPDATE tb_news SET viewed = '$viewed' WHERE seo_link = '$url'");
                $update = $conn->query("UPDATE tb_news SET viewed = '$viewed' WHERE id = '$id'");
            ?>
            <li class="breadcrumb-item active" aria-current="page"><?=$row["judul"]?></li>          
          </ol>
        </nav>       
          <?php
            endif;
          ?>    
        <div class="row mt-2">
          <div class="col-12">
            <h3 class="fw-bold text-center color-blue"><?=$row["judul"]?></h3>
            <div class="text-end">
              <small class="text-muted">Post Date : <?=$date?></small>
            </div>
            <a href="<?=BASE_URL.DS.'news'.DS.$row['path']?>"></a>
          </div>
          <div class="col-12">
            <div class="text-end">
              <small class="text-muted">Viewed : <?=$viewed?> times</small>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-12 col-sm-5">
            <img src="<?=SITE_NEWS.$row['path']?>" alt="<?=$row['judul']?>" class="w-100">
          </div>
          <div class="col-12 col-sm-7 mt-3 mt-sm-0">
            <?=$row["keterangan"]?>
          </div>
        </div> 
      </div>   
    </div>
  </section>

  <?php
    require_once '../footer.php';
  ?>

  <!-- <script>
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
  </script> -->
</body>
</html>
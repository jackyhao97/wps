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
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=BASE_URL.DS.'news/'?>">News</a></li>
            <?php
             $url = $_GET["url"];            
             $result = $conn->query("SELECT * FROM tb_news a LEFT JOIN tb_category b ON a.category_id = b.id WHERE a.seo_link = '$url'");           
              if ($result->num_rows > 0) :
                $row = $result->fetch_array();
                $date = strtotime($row["tgl_berita"]);
                $date = date("d-m-Y", $date);
            ?>
            <li class="breadcrumb-item active" aria-current="page"><?=ucfirst($row["category"])?></li>          
          </ol>
        </nav>   
          <?php
            endif;
          ?>    
        <div class="row mt-5">
          <div class="col-12">
            <h3 class="fw-bold"><?=$row["judul"]?></h3>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <small class="text-muted"><?=ucfirst($row["category"])." / ".$date?></small>
            </div>
            <a href="<?=BASE_URL.DS.'news'.DS.$row['path']?>"></a>
          </div>
        </div>
        <div class="row text-center mt-5">
          <div class="col-12">
            <img src="<?=SITE_NEWS.$row['path']?>" alt="<?=$row['judul']?>" class="w-100">
          </div>
        </div>     
        <div class="row mt-5">
          <div class="col-12">
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
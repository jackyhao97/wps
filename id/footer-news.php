<section class="footer bg-body-tertiary" id="footer">
  <div class="container">
    <div class="row pt-5 pb-5">
     <div class="col-md-3 col-sm-4 col-12">
        <h5 class="fw-bolder">NEWS</h5>
        <hr class="hr-custom">
        <?php 
          $resultNews = $conn->query("SELECT * FROM tb_news ORDER BY id DESC LIMIT 0,1");
          while ($rowNews = $resultNews->fetch_array()) :
        ?>
          <img src="<?=BASE_URL.DS.'admin/img/news/'.$rowNews['path']?>" alt="<?=$rowNews['judul']?>" class="w-100">
          <h5 class="fw-bold mt-4"><?=$rowNews['judul']?></h5>
          <a href="./news/<?=$rowNews["seo_link"]?>">Read More...</a>
        <?php
          endwhile;
        ?>
      </div>
      <div class="col-md-6 col-sm-4 col-12 mt-5 mt-sm-0 mb-5 mb-sm-0 text-center">
        <h5 class="fw-bolder judul-testimonial" style="text-align: left !important">TESTIMONIAL</h5>
        <hr class="hr-custom">
        <div class="swiper-container swiper-container-testimonial mt-4">
          <div class="swiper-wrapper">
          <?php 
            $result = $conn->query("SELECT * FROM tb_testimonial ORDER BY id DESC LIMIT 0,6");
            while ($row = $result->fetch_array()) :
          ?>
            <div class="swiper-slide">
              <img src="<?=SITE_TESTIMONIAL.$row['path']?>" alt="Testimoni" class="img-testimonial">
              <h3 class="fw-bold"><?=$row["nama"]?></h3>
              <p class="text-justify"><?=$row["testimoni"]?></p>
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
      </div>
      <div class="col-md-3 col-sm-6 col-12">
        <h5 class="fw-bolder">CONTACT US</h5>
        <hr class="hr-custom">
        <p><i class="fa-solid fa-location-dot me-2"></i> The Boulevard - Mezzanine floor - A Jl.Fachrudin No.5. Jakarta Pusat, 10250. Indonesia</p>
        <p><i class="fa-solid fa-phone me-2"></i> Phone: +6221 3192 2727, +6221 3192 2797</p>
        <!-- <p><i class="fa-solid fa-fax me-2"></i> Fax: +6221315 2227</p> -->
        <p><i class="fa-solid fa-envelope me-2"></i> Email: <a href=" mailto:info@widyapresisisolusi.com" target="_blank">info@widyapresisisolusi.com</a></p>
      </div>
    </div>
    <div class="row text-center">
      <small>Copyright &copy; <?=date('Y')?> Widya Presisi Solusi. All rights reserved</small>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="<?=BASE_URL.DS.'assets/js/jquery.easing.1.3.js'?>"></script>
<script src="<?=BASE_URL.DS.'assets/js/swiper-bundle.min.js'?>"></script>
<script src="<?=BASE_URL.DS.'assets/js/script.js'?>"></script>
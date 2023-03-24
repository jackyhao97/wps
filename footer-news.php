<!-- <section class="footer bg-body-tertiary" id="footer">
  <div class="container">
    <div class="row pt-5 pb-5">
      <div class="col-md-3 col-sm-6 col-12">
        <h4 class="fw-bolder">About Us</h4>
        <p class="text-justify">Our company name is PT Widya Presisi Solusi. We chose the name Widya meaning knowledge because we want to give solutions based on our skills ...</p>
      </div>
      <div class="col-md-3 col-sm-6 col-12">
        <h4 class="fw-bolder">Services</h4>
        <a href="" class="link-custom">Payroll Outsourcing</a><br />
        <a href="" class="link-custom">Payroll Admin</a><br />
        <a href="" class="link-custom">HRIS Myquantumhr</a><br />
        <a href="" class="link-custom">IT Security</a><br />
        <a href="" class="link-custom">Learning Management System</a><br />
        <a href="" class="link-custom">Other Business Processing</a><br />
      </div>
      <div class="col-md-3 col-sm-6 col-12 mt-3 mt-sm-0">
        <h4 class="fw-bolder">Testimonial</h4>
        <p class="text-justify">“Dengan memakai jasa Widya Presisi Solusi saya sangat puas sekali karena ketepatan waktu dalam penghitungan payroll”</p>
      </div>
      <div class="col-md-3 col-sm-6 col-12">
        <h4 class="fw-bolder">Contact Us</h4>
        <p><i class="fa-solid fa-location-dot me-2"></i> The Boulevard - Mezzanine floor - A Jl.Fachrudin No.5. Jakarta Pusat, 10250. Indonesia</p>
        <p><i class="fa-solid fa-phone me-2"></i> Phone: +6221 3192 2727, +6221 3192 2797</p>
        <p><i class="fa-solid fa-fax me-2"></i> Fax: +6221315 2227</p>
        <p><i class="fa-solid fa-envelope me-2"></i> Email: <a href=" mailto:info@widyapresisisolusi.com" target="_blank">info@widyapresisisolusi.com</a></p>
      </div>
    </div>
    <div class="row text-center">
      <small>Copyright <?=date('Y')?> Widya Presisi Solusi. All rights reserved</small>
    </div>
  </div>
</section> -->
<section class="footer bg-body-tertiary" id="footer">
  <div class="container">
    <div class="row pt-5 pb-5">
      <div class="col-md-3 col-sm-6 col-12">
        <h4 class="fw-bolder">About Us</h4>
        <p class="text-justify">Our company name is PT Widya Presisi Solusi. We chose the name Widya meaning knowledge because we want to give solutions based on our skills and expertise to your management and your employees to become a great company...</p>
      </div>
      <div class="col-md-3 col-sm-6 col-12">
        <h4 class="fw-bolder">Services</h4>
        <a href="<?=BASE_URL.DS.'services/'?>" class="link-custom">Payroll Outsourcing</a><br />
        <a href="<?=BASE_URL.DS.'services/'?>" class="link-custom">Payroll Admin</a><br />
        <a href="<?=BASE_URL.DS.'services/'?>" class="link-custom">HRIS Myquantumhr</a><br />
        <a href="<?=BASE_URL.DS.'services/'?>" class="link-custom">IT Security</a><br />
        <a href="<?=BASE_URL.DS.'services/'?>" class="link-custom">Learning Management System</a><br />
        <a href="<?=BASE_URL.DS.'services/'?>" class="link-custom">Other Business Processing</a><br />
      </div>
      <div class="col-md-3 col-sm-6 col-12 mt-3 mt-sm-0">
        <h4 class="fw-bolder">Testimonial</h4>
        <?php 
          $result = $conn->query("SELECT * FROM tb_testimonial ORDER BY id DESC LIMIT 0,2");
          while ($row = $result->fetch_array()) :
        ?>
          <h6 class="fw-bold"><?=$row['nama']?></h6>
          <p class="text-justify"><?=$row['testimoni']?></p>
        <?php
          endwhile;
        ?>
      </div>
      <div class="col-md-3 col-sm-6 col-12">
        <h4 class="fw-bolder">Contact Us</h4>
        <p><i class="fa-solid fa-location-dot me-2"></i> The Boulevard - Mezzanine floor - A Jl.Fachrudin No.5. Jakarta Pusat, 10250. Indonesia</p>
        <p><i class="fa-solid fa-phone me-2"></i> Phone: +6221 3192 2727, +6221 3192 2797</p>
        <p><i class="fa-solid fa-fax me-2"></i> Fax: +6221315 2227</p>
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
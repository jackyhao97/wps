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
    require_once '../navbar-contact.php';
  ?>
  <section class="wps-banner" id="banner">
    <img src="<?=BASE_URL.DS.'assets/img/contact/contact.jpg'?>" alt="Contact Us" class="w-100">
  </section>
  <section class="contact mt-5 mb-5" id="contact">
    <div class="container">
      <div class="col-12 col-sm-6">
        <p>Please fill the contact form below :</p>
        <form>
          <div class="mb-3">
            <label for="txt_name" class="form-label">Name</label>
            <input type="text" class="form-control" id="txt_name" aria-describedby="name" placeholder="Enter your name...">
          </div>
          <div class="mb-3">
            <label for="txt_email" class="form-label">Email</label>
            <input type="email" class="form-control" id="txt_email" aria-describedby="email" placeholder="Enter your email...">
          </div>
          <div class="mb-3">
            <label for="txt_subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="txt_subject" aria-describedby="subject" placeholder="Your subject...">
          </div>
          <div class="mb-3">
            <label for="txt_topic" class="form-label">Topic</label>
            <select class="form-select" aria-label="Default select example" id="txt_topic">
              <option selected>Open this select menu</option>
              <option value="1">Payroll Administration</option>
              <option value="2">Payroll Outsourcing</option>
              <option value="3">HR Information System</option>
              <option value="4">IT Security</option>
              <option value="5">Learning Management System</option>
              <option value="6">Other Business Process Outsourcing</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="txt_message" class="form-label">Message</label>
            <textarea class="form-control" id="txt_message" rows="4" placeholder="Your message..."></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Send</button>
        </form>
      </div>
      <div class="col-12 col-sm-6">
        <h3 class="fw-bold">Address</h3>
        <a href="https://www.google.com/maps/place/PT+Widya+Presisi+Solusi/@-6.183404,106.8144006,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69f68268d40057:0xc6f45229584d9390!8m2!3d-6.1834093!4d106.8165893!16s%2Fg%2F11b5wkhprr" target="_blank">The Boulevard - Mezzanine floor - A Jl.Fachrudin No.5. Jakarta Pusat, 10250. Indonesia </a>
        <a href="" target="_blank">Phone: +6221 3192 2727, +6221 3192 2797 </a>
      </div>
    </div>
  </section>

  <?php
    require_once '../footer.php';
  ?>
</body>
</html>
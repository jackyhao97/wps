<?php 
  header("Access-Control-Allow-Origin:*");
  require_once '../config.php';
  require_once '../assets/class/attach_mailer_class.php';
  $rand = rand(1,1000);

  if (isset($_POST["btn_submit"])) {
    $name = isset($_POST['txt_name']) ? mysqli_real_escape_string($conn, $_POST['txt_name']) : '';
    $email = isset($_POST['txt_email']) ? mysqli_real_escape_string($conn, $_POST['txt_email']) : '';
    $subject = isset($_POST['txt_subject']) ? mysqli_real_escape_string($conn, $_POST['txt_subject']) : '';
    $topic = isset($_POST['txt_topic']) ? mysqli_real_escape_string($conn, $_POST['txt_topic']) : '';
    $pesan = isset($_POST['txt_message']) ? mysqli_real_escape_string($conn, $_POST['txt_message']) : '';

    switch ($topic) {
      case 2:
        $topics = "Payroll Outsourcing";
      case 3:
        $topics = "HR Information System";
      case 4:
        $topics = "IT Security";
      case 5:
        $topics = "Learning Management System";
      case 6:
        $topics = "Other Business Process Outsourcing";
      default :
        $topics = "Payroll Administration";
    }

    $insert = $conn->query("INSERT INTO tb_contact (name, email, subject, topic, message) VALUES ('$name', '$email', '$subject', '$topics', '$pesan')");

    if ($insert) {
      // $sender_name = 'Web Master widyapresisisolusi.com';
      // $sender_mail = 'webmaster@widyapresisisolusi.com';
      // $mailto = 'jackyhau97@gmail.com';

      // // if($jenisLayanan == 1){$mailto = 'jackyhau97@gmail.com';}
      // // else if($jenisLayanan == 2){$mailto = 'phpexplode1997@gmail.com';}				
      // // $cc = 'it.sibmotor@gmail.com';

      // $subject = "[Notifikasi] Konsultasi pembelian dari pengunjung website www.sardanagroup.co.id";
      // $message = "Berikut ini terlampir informasi konsultasi pembelian dari pengunjung website Anda.".PHP_EOL;
      // $message .= "Nama : ".$name.PHP_EOL;
      // $message .= "Email : ".$email.PHP_EOL;
      // $message .= "Subject : ".$subject.PHP_EOL;
      // $message .= "Topik : ".$topics.PHP_EOL;
      // $message .= "Message : ".$pesan.PHP_EOL;

      // $mail = new attach_mailer($sender_name, $sender_mail, $mailto, $cc = "", $bcc = "", $subject, $message);
      // $mail->process_mail();

      // the message
      $msg = "First line of text\nSecond line of text";
      
      // use wordwrap() if lines are longer than 70 characters
      $msg = wordwrap($msg,70);
      
      // send email
      mail("jackyhau97@gmail.com","My subject",$msg);


      echo "<script>alert('Terima kasih telah mengisi data anda. Pihak kami akan segera menghubungi Anda.');</script>";
    }
    else {
      echo "<script>alert('Mohon maaf data gagal dikirim. Silahkan coba kembali.');</script>";
    }
  }
?>

<!doctype html>
<html lang="en">

<head>
  <?php 
    require_once '../header.php';
  ?>

  <script>
  function gtag_report_conversion(url) {
    var callback = function () {
      if (typeof(url) != 'undefined') {
        window.location = url;
      }
    };
    gtag('event', 'conversion', {
        'send_to': 'AW-978740247/z4uDCLKYzvcCEJfI2dID',
        'event_callback': callback
    });
    return false;
  }
  </script>
</head>

<body>
  <?php 
    require_once '../navbar-contact.php';
  ?>
  <section class="wps-banner" id="banner">
    <img src="<?=BASE_URL.DS.'assets/img/contact/contact-us.png'?>" alt="Contact Us" class="w-100">
  </section>
  <section class="contact mt-5 mb-5" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-7">
          <p>Please fill the contact form below :</p>
          <form method="post">
            <div class="mb-3">
              <label for="txt_name" class="form-label">Name</label>
              <input type="text" class="form-control" id="txt_name" name="txt_name" aria-describedby="name" placeholder="Enter your name...">
            </div>
            <div class="mb-3">
              <label for="txt_email" class="form-label">Email</label>
              <input type="email" class="form-control" id="txt_email" name="txt_email" aria-describedby="email" placeholder="Enter your email...">
            </div>
            <div class="mb-3">
              <label for="txt_subject" class="form-label">Subject</label>
              <input type="text" class="form-control" id="txt_subject" name="txt_subject" aria-describedby="subject" placeholder="Your subject...">
            </div>
            <div class="mb-3">
              <label for="txt_topic" class="form-label">Topic</label>
              <select class="form-select" aria-label="Default select example" id="txt_topic" name="txt_topic">
                <option value="1" selected>Payroll Administration</option>
                <option value="2">Payroll Outsourcing</option>
                <option value="3">HR Information System</option>
                <option value="4">IT Security</option>
                <option value="5">Learning Management System</option>
                <option value="6">Other Business Process Outsourcing</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="txt_message" class="form-label">Message</label>
              <textarea class="form-control" id="txt_message" name="txt_message" rows="4" placeholder="Your message..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="btn_submit">Send</button>
          </form>
        </div>
        <div class="col-12 col-sm-5 mt-5 mt-sm-0">
          <h3 class="fw-bold mb-5">ADDRESS</h3>
          <a href="https://www.google.com/maps/place/PT+Widya+Presisi+Solusi/@-6.183404,106.8144006,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69f68268d40057:0xc6f45229584d9390!8m2!3d-6.1834093!4d106.8165893!16s%2Fg%2F11b5wkhprr" target="_blank" class="text-decoration-none"><i class="fa-solid fa-location-dot me-2 "></i> The Boulevard - Mezzanine floor - A Jl.Fachrudin No.5. Jakarta Pusat, 10250. Indonesia </a><br /><br />
          <a href="tel:+622131922727" target="_blank" class="text-decoration-none"><i class="fa-solid fa-phone me-2"></i> Phone: +6221 3192 2727/ 22794727 </a><br /><br />
          <!-- <a href="#" class="text-decoration-none"><i class="fa-solid fa-fax me-2"></i> Fax: +6221315 2227 </a><br /><br /> -->
          <a href="mailto:info@widyapresisisolusi.com" target="_blank" class="text-decoration-none"><i class="fa-solid fa-envelope me-2"></i> Email: info@widyapresisisolusi.com</a><br /><br />
        </div>
      </div>
    </div>
  </section>

  <?php
    require_once '../footer.php';
  ?>
</body>
</html>
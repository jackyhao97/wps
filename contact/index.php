<?php
  require_once '../config.php';
  require_once '../assets/class/class.phpmailer.php';
  $rand = rand(1,1000);

  if (isset($_POST["btn_submit"])) {
    $name = isset($_POST['txt_name']) ? mysqli_real_escape_string($conn, $_POST['txt_name']) : '';
    $email = isset($_POST['txt_email']) ? mysqli_real_escape_string($conn, $_POST['txt_email']) : '';
    $subject = isset($_POST['txt_subject']) ? mysqli_real_escape_string($conn, $_POST['txt_subject']) : '';
    $topic = isset($_POST['txt_topic']) ? $_POST['txt_topic'] : '';
    $pesan = isset($_POST['txt_message']) ? mysqli_real_escape_string($conn, $_POST['txt_message']) : '';

    switch ($topic) {
      case 1 :
        $topics = "Payroll Administration";
        break;
      case 2:
        $topics = "Payroll Outsourcing";
        break;
      case 3:
        $topics = "HR Information System";
        break;
      case 4:
        $topics = "IT Security";
        break;
      case 5:
        $topics = "Learning Management System";
        break;
      case 6:
        $topics = "Other Business Process Outsourcing";
        break;
    }

    $insert = $conn->query("INSERT INTO tb_contact (name, email, subject, topic, message) VALUES ('$name', '$email', '$subject', '$topics', '$pesan')");
    $select = $conn->query("SELECT email FROM tb_email_contact WHERE topic = $topic");
    $rowSelect = $select->fetch_array(MYSQLI_ASSOC);

    if ($insert) {
      $mail = new PHPMailer;

      $mail->IsSMTP();

      $mail->SMTPSecure = 'ssl';

      $mail->Host = "smtp.gmail.com"; //hostname masing-masing provider email untuk email pengirimnya (bukan email tujuan)
      
      $mail->SMTPDebug  = 0; // 0 artinya log dihilangkan dari screen
      $mail->Port = 465;
      $mail->SMTPAuth = true;

      $mail->Timeout = 60; // timeout pengiriman (dalam detik)
      $mail->SMTPKeepAlive = true; 

      $mail->Username = "phpexplode1997@gmail.com"; //user email
      $mail->Password = "lisqkeikwkqfhbyj"; //password email
      $mail->SetFrom("phpexplode1997@gmail.com","Widya Presisi Solusi"); //set email pengirim
      $mail->Subject = "Message from contact us"; //subyek email
      $mail->AddAddress($rowSelect['email'], "Nama penerima yang muncul"); //tujuan email

      $body = "The following are website visitors who ask via the Contact Us page :";
      $body .= "<br>";
      $body .= "<br>";
      $body .= "Name : " . $name;
      $body .= "<br>";
      $body .= "Email : " . $email;
      $body .= "<br>";
      $body .= "Subject : " . $subject;
      $body .= "<br>";
      $body .= "Topic : " . $topics;
      $body .= "<br>";
      $body .= "Message : " . $pesan;
      $body .= "<br>";
      $body .= "Entry Date : " . date("d-m-Y H:i:s");

      $mail->MsgHTML($body); // konten email

      if($mail->Send()) echo "<script>alert('Terima kasih telah mengisi data anda. Pihak kami akan segera menghubungi Anda.');</script>";
      else echo "<script>alert('Email gagal dikirim.');</script>";
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
    <?php
      $banner = $conn->query("SELECT path FROM tb_banner WHERE category = 'contact'");
      $rowBanner = $banner->fetch_array();
    ?>
    <img src="<?=BASE_URL.DS.'admin/img/banner/'.$rowBanner['path']?>" alt="Banner" class="w-100">
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
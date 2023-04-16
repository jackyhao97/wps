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
        $topics = "Administrasi Penggajian";
        break;
      case 2:
        $topics = "Outsourcing Penggajian";
        break;
      case 3:
        $topics = "Sistem Informasi SDM";
        break;
      case 4:
        $topics = "Keamanan IT";
        break;
      case 5:
        $topics = "Sistem Manajemen Pembelajaran";
        break;
      case 6:
        $topics = "Pengalihdayaan Proses Bisnis Lainnya";
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

      $body = "Berikut adalah pengunjung website yang bertanya melalui halaman Contact Us :";
      $body .= "<br>";
      $body .= "<br>";
      $body .= "Nama : " . $name;
      $body .= "<br>";
      $body .= "Email : " . $email;
      $body .= "<br>";
      $body .= "Subjek : " . $subject;
      $body .= "<br>";
      $body .= "Topik : " . $topics;
      $body .= "<br>";
      $body .= "Pesan : " . $pesan;
      $body .= "<br>";
      $body .= "Tgl Entry : " . date("d-m-Y H:i:s");

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
    <img src="<?=BASE_URL.DS.'assets/img/contact/contact-us.png'?>" alt="Contact Us" class="w-100">
  </section>
  <section class="contact mt-5 mb-5" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-7">
          <p>Silakan isi formulir kontak di bawah ini:</p>
          <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="txt_name" class="form-label">Nama</label>
              <input type="text" class="form-control" id="txt_name" name="txt_name" aria-describedby="name" placeholder="Enter your name...">
            </div>
            <div class="mb-3">
              <label for="txt_email" class="form-label">Email</label>
              <input type="email" class="form-control" id="txt_email" name="txt_email" aria-describedby="email" placeholder="Enter your email...">
            </div>
            <div class="mb-3">
              <label for="txt_subject" class="form-label">Subjek</label>
              <input type="text" class="form-control" id="txt_subject" name="txt_subject" aria-describedby="subject" placeholder="Your subject...">
            </div>
            <div class="mb-3">
              <label for="txt_topic" class="form-label">Topik</label>
              <select class="form-select" aria-label="Default select example" id="txt_topic" name="txt_topic">
                <option value="1" selected>Administrasi penggajian</option>
                <option value="2">Outsourcing Penggajian</option>
                <option value="3">Sistem Informasi SDM</option>
                <option value="4">Keamanan TI</option>
                <option value="5">Sistem Manajemen Pembelajaran</option>
                <option value="6">Pengalihdayaan Proses Bisnis Lainnya</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="txt_message" class="form-label">Pesan</label>
              <textarea class="form-control" id="txt_message" name="txt_message" rows="4" placeholder="Your message..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="btn_submit">Kirim</button>
          </form>
        </div>
        <div class="col-12 col-sm-5 mt-5 mt-sm-0">
          <h3 class="fw-bold mb-5">ALAMAT</h3>
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
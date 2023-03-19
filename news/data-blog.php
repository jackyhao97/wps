<?php
  require_once "../config.php";
  require_once "../koneksi.php";
  $data = '<div class="row">';
  if (isset($_POST["tipe"]))
  {
    $tipe = $_POST["tipe"];
    $result = $koneksi->query("SELECT * FROM news WHERE kategori = 'SG' AND tipe = '$tipe' ORDER BY id DESC LIMIT 0, 12");
    while ($row = $result->fetch_array())
    {      
      $date = strtotime($row["tanggalpublish"]);
      $date = date("d-m-Y", $date);
      $data .= '<div class="col-12 col-sm-6 col-lg-4 mb-4">
                  <div class="card" style="overflow: hidden; cursor: pointer; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.6);" onclick="window.location=`' .$row["seo_link"]. '`">
                    <div class="card-header" style="border: 0; padding: 0; border-radius: 0; height: 200px; overflow: hidden">
                      <img src="https://sardanagroup.co.id/HP/production/images/news/' .$row["Paths"]. '" class="card-img-top" alt="'.$row["judul"].'">
                    </div>
                    <div class="card-body">
                      <small class="card-text text-muted">' .$date. '</small>
                      <p class="card-text" style="margin-bottom: 0; height: 100px">' .$row["judul"]. '</p>
                      <a class="btn btn-danger selengkapnya-lain" href="./' .$row["seo_link"].'"><i class="fas fa-plus mr-2" style="font-size: 12px"></i>SELENGKAPNYA</a>                    
                    </div>
                  </div>
                </div>';
    }
  }
  else
  {
    $data .= 'data not found.';
  }  
  $data .= '</div>';

  echo $data;
?>
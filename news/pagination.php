<?php
  require_once '../config.php';
  require_once '../koneksi.php';  
  // live
  $connect = new PDO("mysql:host=localhost; dbname=sardanab_hpsardana", "sardanab_hpadmin", "ikankoi123456");
  // local
  // $connect = new PDO("mysql:host=localhost; dbname=sardanab_hpsardana", "root", "");
  $limit = 12;
  $page = 1;
  // $jlhBeritaLainnya = 4; lIMIT JUMLAH BERITA SEHINGGA MEMUNGKINKAN BERITA MULAI DARI NO BERAPA
  $jlhBeritaLainnya = 0;
  
  if ($_POST["page"] > 1) {
    $start = (($_POST["page"] - 1)) * $limit;
    $page = $_POST['page'];
  }
  else {
    $start = 0;
  }

  // $max = $conn->query("SELECT MAX(`id`) FROM `news` WHERE kategori = 'HM'");
  // $max = $conn->query("SELECT MAX(`id`) FROM `news`");
  $max = $koneksi->query("SELECT MAX(`id`) FROM `news` WHERE kategori = 'SG'");
  $maxResult = $max->fetch_array();
  $maxResult = $maxResult[0] - $jlhBeritaLainnya;  
  // $query = 'SELECT * FROM news WHERE kategori = "HM" AND id < ' .$maxResult;    
  $query = 'SELECT * FROM news WHERE id <= ' .$maxResult. ' AND kategori = "SG"';    

  if($_POST["query"] != '') {
    $query .= ' AND judul LIKE "%' .str_replace(' ', '%', $_POST['query']). '%"';
  }

  $query .= ' ORDER BY id DESC';
  $filter_query = $query . ' LIMIT ' .$start. ', ' .$limit. '';
  $statement = $connect->prepare($query);
  $statement->execute();

  $total_data = $statement->rowCount();
  $statement = $connect->prepare($filter_query);
  $statement->execute();

  $result = $statement->fetchAll();
  $output = '<div class="row">';
    
  foreach($result as $row) {      
    $date = strtotime($row["tanggalpublish"]);
    $date = date("d-m-Y", $date);
    $output .=  '
              <div class="col-12 col-sm-6 col-lg-4 mt-4">
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
              </div>
              ';
  }    
  $output .=  '
              </div>
              <div class="row">
                <div class="col-12 d-flex justify-content-center mt-5 mb-3">
                  <ul class="pagination">
              ';
  $total_links = ceil($total_data / $limit);
  $previous_link = '';
  $next_link = '';
  $page_link = '';
  $page_array= [];

  // Pagination Number
  if ($total_links > 4) {
    if ($page < 5) {
      for ($count = 1; $count <= 5; $count++) {
        $page_array[] = $count;        
      }
      $page_array[] = '...';
      $page_array[] = $total_links;
    }
    else {
      $end_limit = $total_links - 5;
      if ($page > $end_limit) {
        $page_array[] = 1;
        $page_array[] = '...';
        for ($count = $end_limit; $count <= $total_links; $count++) {
          $page_array[] = $count;
        }
      }
      else {
        $page_array[] = 1;
        $page_array[] = '...';
        for ($count = $page - 1; $count <= $page + 1; $count++) {
          $page_array[] = $count;
        }
        $page_array[] = '...';
        $page_array[] = $total_links;
      }
    }
  }
  else {
    for ($count = 1; $count <= $total_links; $count++) {
      $page_array[] = $count;
    }
  }

  for ($count = 0; $count < count($page_array); $count++) {
    if ($page == $page_array[$count]) {
      $page_link .=   '
                      <li class="page-item active">
                        <a class="page-link" href="#">' .$page_array[$count]. '
                        </a>
                      </li>
                      ';

      $previous_id = $page_array[$count] - 1;
      
      if ($previous_id > 0) {
        $previous_link = '<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="' .$previous_id. '">&lt;</a></li>';
      }
      else {
        $previous_link =  '
                          <li class="page-item disabled">
                            <a class="page-link" href="#">&lt;</a>
                          </li>
                          ';
      }

      $next_id = $page_array[$count] + 1;

      if ($next_id >= $total_links) {
        $next_link =  '
                      <li class="page-item disabled">
                        <a class="page-link" href="#">&gt;</a>
                      </li>
                      ';
      }
      else {
        $next_link =  '
                      <li class="page-item">
                        <a class="page-link" href="javascript:void(0)" data-page_number="' .$next_id. '">&gt;
                        </a>
                      </li>
                      ';                      
      }
    }
    else {
      if ($page_array[$count] == '...') {
        $page_link .=   '
                        <li class="page-item disabled">
                          <a class="page-link" href="#">...
                          </a>
                        </li>
                        ';
      }
      else {
        $page_link .=   '
                        <li class="page-item">
                          <a class="page-link" href="javascript:void(0)" data-page_number="' .$page_array[$count]. '">' .$page_array[$count].'
                          </a>
                        </li>
                        ';
      }
    }
  }
  
  $output .=  $previous_link . $page_link . $next_link;
  $output .=  '
              </ul>
              </div>
              ';

  echo $output;
?>
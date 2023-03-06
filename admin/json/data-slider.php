<?php

session_start();

require_once('../../config.php');

require_once('../vendor/ssp.cls.php');

$counter = 0;


function BuildCounter()
{

  global $counter;

  $counter += 1;

  return $counter;
}

function ShowImages($data, $nama) {
  // $component = '<img src="'BASE_URL.DS.'admin/img/slider/SLIDER_CVBCV_1677419030.jpg" class="w-50" />';
  $component = '<a href="'.BASE_URL.DS.'admin/img/slider/'.$data.'" data-lightbox="'.$nama.'" data-title="'.$nama.'">';
  $component .= '<img src="'.BASE_URL.DS.'admin/img/slider/'.$data.'" class="w-50" />';
  $component .= "</a>";

  return $component;
}

function BuildDelete($data) {
  $component = '<a class="btn btn-sm btn-danger" onclick="initHapus('.$data.')" title="hapus"><i class="fa fa-trash"></i></a>';

  return $component;
}


$table = <<<EOT
  (
    SELECT `id`, `name`, `path` FROM `tb_slider`
  ) temp 
  EOT;



$primaryKey = 'id';

$func_apply = 'BuildCounter';

$func_apply_2 = 'ShowImages';

$func_apply_3 = 'BuildDelete';

$columns = array(

  array(

    'db' => 'id',

    'dt' => 0,

    'formatter' => function () use ($func_apply) {

      return $func_apply();
    }

  ),

  array('db' => 'name', 'dt' => 1),
  array(
    'db' => 'path', 
    'dt' => 2,
    'formatter' => function($d, $row) use ($func_apply_2) {
      return $func_apply_2($d, $row[1]);
    }
  ),
  array(
    'db' => 'id', 
    'dt' => 3,
    'formatter' => function($d, $row) use ($func_apply_3) {
      return $func_apply_3($d);
    }
  )
);


$sql_details = array(

  'user' => $username,

  'pass' => $password,

  'db' => $dbname,

  'host' => $servername

);

echo json_encode(SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns));

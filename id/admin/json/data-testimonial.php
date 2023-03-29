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

function ShowImages($data, $judul) {
  $component = '<a href="'.BASE_URL.DS.'admin/img/testimonial/'.$data.'" data-lightbox="'.$judul.'" data-title="'.$judul.'">';
  $component .= '<img src="'.BASE_URL.DS.'admin/img/testimonial/'.$data.'" class="w-50" />';
  $component .= "</a>";

  return $component;
}

function BuildDelete($data) {
  $component = '<a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_edit" onclick="show('.$data.')" title="Edit"><i class="fa fa-edit"></i></a>';
  $component .= "<br />";
  $component .= '<a class="btn btn-sm btn-danger mt-1" onclick="initHapus('.$data.')" title="Hapus"><i class="fa fa-trash"></i></a>';

  return $component;
}


$table = <<<EOT
  (
    SELECT `id`, `nama`, `testimoni`, `path`, `urutan` FROM `tb_testimonial`
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

  array('db' => 'nama', 'dt' => 1),
  array(
    'db' => 'testimoni',
    'dt' => 2,
    'formatter' => function($d) {
      return substr($d, 0, 50) . "...";
    }
  ),
  array('db' => 'urutan', 'dt' => 3),
  array(
    'db' => 'path', 
    'dt' => 4,
    'formatter' => function($d, $row) use ($func_apply_2) {
      return $func_apply_2($d, $row[1]);
    }
  ),
  array(
    'db' => 'id', 
    'dt' => 5,
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

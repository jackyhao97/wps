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

function ShowImages($data, $id) {
  $component = '<a href="'.BASE_URL.DS.'admin/img/banner/'.$data.'" data-lightbox="'.$id.'" data-title="'.$id.'">';
  $component .= '<img src="'.BASE_URL.DS.'admin/img/banner/'.$data.'" class="w-50" />';
  $component .= "</a>";

  return $component;
}

function BuildAction($data) {
  $component = '<a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_edit" onclick="show('.$data.')" title="Edit"><i class="fa fa-edit"></i></a>';
  $component .= "<br />";
  $component .= '<a class="btn btn-sm btn-danger mt-1" onclick="initHapus('.$data.')" title="hapus"><i class="fa fa-trash"></i></a>';

  return $component;
}


$table = <<<EOT
  (
    SELECT `id`, `path` FROM `tb_banner`
  ) temp 
  EOT;



$primaryKey = 'id';

$func_apply = 'BuildCounter';

$func_apply_2 = 'ShowImages';

$func_apply_3 = 'BuildAction';

$columns = array(

  array(

    'db' => 'id',

    'dt' => 0,

    'formatter' => function () use ($func_apply) {

      return $func_apply();
    }

  ),
  array(
    'db' => 'path', 
    'dt' => 1,
    'formatter' => function($d, $row) use ($func_apply_2) {
      return $func_apply_2($d, $row[0]);
    }
  ),
  array(
    'db' => 'id', 
    'dt' => 2,
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

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

function BuildAction($data) {
  $component = '<a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_edit" onclick="show('.$data.')" title="Edit"><i class="fa fa-edit"></i></a>';
  $component .= "<br />";
  $component .= '<a class="btn btn-sm btn-danger mt-1" onclick="initHapus('.$data.')" title="Hapus"><i class="fa fa-trash"></i></a>';

  return $component;
}


$table = <<<EOT
  (
    SELECT `id`, `title`, `urutan` FROM `tb_career_clients`
  ) temp 
  EOT;



$primaryKey = 'id';

$func_apply = 'BuildCounter';

$func_apply_2 = 'BuildAction';

$columns = array(

  array(

    'db' => 'id',

    'dt' => 0,

    'formatter' => function () use ($func_apply) {

      return $func_apply();
    }

  ),

  array('db' => 'title', 'dt' => 1),
  array('db' => 'urutan', 'dt' => 2),
  array(
    'db' => 'id', 
    'dt' => 3,
    'formatter' => function($d, $row) use ($func_apply_2) {
      return $func_apply_2($d);
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

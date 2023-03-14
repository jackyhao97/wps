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


$table = <<<EOT
  (
    SELECT `id`, `name`, `email`, `subject`, `topic`, `message` FROM `tb_contact`
  ) temp 
  EOT;


$primaryKey = 'id';

$func_apply = 'BuildCounter';

$columns = array(

  array(

    'db' => 'id',

    'dt' => 0,

    'formatter' => function () use ($func_apply) {

      return $func_apply();
    }

  ),
  array('db' => 'name', 'dt' => 1),
  array('db' => 'email', 'dt' => 2),
  array('db' => 'subject', 'dt' => 3),
  array('db' => 'topic', 'dt' => 4),
  array('db' => 'message', 'dt' => 5)
);


$sql_details = array(

  'user' => $username,

  'pass' => $password,

  'db' => $dbname,

  'host' => $servername

);

echo json_encode(SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns));

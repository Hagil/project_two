<?php

require_once ('../common/connection.php');
require_once ('../common/logger.php');

$db = new Dbconnect($app_user, $app_pass);

$sql = "SELECT * FROM stats";

$result = $db->conn->query($sql);

if($result){
  $output = $result->fetchAll();
  echo json_encode($output);
}
  else{
logger($db->conn->error);
  }

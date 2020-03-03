<?php
require_once('.././model/config/DB_class.php');
$movieModel = new Movie();
$sql = 'SELECT * FROM `movie`';
$result = $movieModel->getAllMovie($sql);
die(json_encode($result));

?>
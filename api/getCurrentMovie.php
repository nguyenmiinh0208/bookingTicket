<?php
require_once('.././model/config/DB_class.php');
$movieModel = new Movie();
$sql = 'SELECT * FROM `movie` WHERE (`m_releaseDate` < CURDATE())';
$result = $movieModel->getCurrentMovie($sql);
die(json_encode($result));

?>
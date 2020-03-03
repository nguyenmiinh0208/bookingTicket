<?php

require_once('.././model/config/DB_class.php');
$movieModel = new Movie();
$sql = 'SELECT * FROM `movie` WHERE (`m_releaseDate` > CURDATE())';
$result = $movieModel->getUpCommingMovie($sql);
die(json_encode($result));

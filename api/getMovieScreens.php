<?php
require_once('.././model/config/DB_class.php');
$movieModel = new Movie();
$sql = 'SELECT `showmovie`.`show_id` AS `show_id`, `showmovie`.`show_starttime` AS `show_starttime`, `movie`.`m_name` AS `m_name`, 
`movie`.`m_duration` AS `m_duration` , `theater`.`th_name` AS `th_name`
        FROM `movie`,`showmovie`, `theater`, `cinema` 
        WHERE `movie`.`m_id` = `showmovie`.`show_movie` AND `showmovie`.`show_cinema` = `cinema`.`cine_id` AND `cinema`.`cine_theater` = `theater`.`th_id`';
$result = $movieModel->getAllMovie($sql);
die(json_encode($result));

?>
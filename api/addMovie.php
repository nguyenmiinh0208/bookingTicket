<?php
require_once('.././model/config/DB_class.php');
$movieModel = new Movie();
$res = NULL;
if(isset($_POST['request']) && $_POST['request'] == 'addMovie') {
    $sql = "INSERT INTO 
    movie (m_name, m_releaseDate, m_duration, m_director, m_actors, m_description, m_genre)
    VALUES ('".$_POST["movieTitle"]."',
            '".$_POST["movieRelDate"]."',
            '".$_POST["movieDuration"]."',
            '".$_POST["movieDirector"]."',
            '".$_POST["movieActors"]."',
            '".$_POST["movieDescription"]."',
            '".$_POST["movieGenre"]."')";
    $result = $movieModel->add_new($sql);
    $res = ["message" => 'success',
              "status" => 200];
}
echo json_encode($res);
?>


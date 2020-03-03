<?php

require_once('.././model/config/DB_class.php');
$movieModel = new Movie();

if ($_POST["action"] == "delete") {
  $id = $_POST['id'];
  $sql = "DELETE FROM `showmovie` WHERE show_id = $id"; 
  if($movieModel->deleteMovie($sql)) {  
    echo json_encode(
        array("msg" => "success")
    );
  } else {
      echo json_encode(
          array("msg" => "failed")
      );
  }
}
?>
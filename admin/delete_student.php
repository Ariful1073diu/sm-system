<?php
    require_once"./dbcon.php";
    $id = ($_GET['id']);
    $result = "DELETE FROM student_infos WHERE id=$id";

    if ($link->query($result) === TRUE) {
        echo "New record Deleted successfully";
      } else {
        echo "Error: " . $result . "<br>" . $link->error;
      }
    
    
    //header('location:index.php?page=all-student')
 ?>
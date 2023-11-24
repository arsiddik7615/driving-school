<?php 
                    
include 'connection.php';

    $id = $_GET['id'];


    $sql = "DELETE FROM course WHERE  id = '$id'";


    $result = $connection-> query($sql);



    header('Location: course.php');
                    
?>
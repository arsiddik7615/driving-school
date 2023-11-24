<?php 
                    
include 'connection.php';

    $id = $_GET['id'];


    $sql = "DELETE FROM success WHERE  id = '$id'";


    $result = $connection-> query($sql);



    header('Location: success.php');
                    
?>
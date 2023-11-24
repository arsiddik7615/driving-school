<?php 
                    
include 'connection.php';

    $id = $_GET['id'];


    $sql = "DELETE FROM service WHERE  id = '$id'";


    $result = $connection-> query($sql);



    header('Location: service.php');
                    
?>
<?php 

include ('connection.php');



$id = $_POST['list'];

$title = $_POST['title'];

$count = $_POST['count'];


$sql = "UPDATE success SET title = '$title', count = '$count' where id = '$id'";

$result = $connection-> query($sql);

header('Location:success.php');
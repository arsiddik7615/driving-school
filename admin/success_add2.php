<?php 

include ('connection.php');



$id = $_POST['list'];

$title = $_POST['title'];

$count = $_POST['count'];

$sql = "INSERT INTO success (title, count) VALUES ('$title', '$count')";

$result = $connection-> query($sql);

header('Location:success.php');
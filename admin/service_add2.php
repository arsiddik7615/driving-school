<?php 

include ('connection.php');



$id = $_POST['list'];

$icon = $_POST['icon'];

$title = $_POST['title'];

$content = $_POST['content'];

$image = $_FILES['image']['name'];

$tem = $_FILES['image']['tmp_name'];

move_uploaded_file($tem, "../uploads/".$image);


$sql = "INSERT INTO service (title, icon, content, image) VALUES ('$title', '$icon', '$content', '$image')";


$result = $connection-> query($sql);

header('Location:service.php');
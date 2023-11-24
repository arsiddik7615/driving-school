<?php 

include ('connection.php');



$id = $_POST['list'];


$title = $_POST['title'];

$t_duration = $_POST['t_duration'];

$p_duration = $_POST['p_duration'];

$price = $_POST['price'];

$content = $_POST['content'];

$image = $_FILES['image']['name'];

$tem = $_FILES['image']['tmp_name'];

move_uploaded_file($tem, "../uploads/".$image);


$sql = "INSERT INTO course (title, t_duration,p_duration,price, content, image) VALUES ('$title','$t_duration', '$p_duration','$price', '$content', '$image')";

$result = $connection-> query($sql);

header('Location:course.php');
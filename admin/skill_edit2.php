<?php 

include ('connection.php');



$id = $_POST['list'];

$title = $_POST['title'];

$content = $_POST['content'];


$image = $_FILES['image']['name'];

$tem = $_FILES['image']['tmp_name'];

move_uploaded_file($tem, "../uploads/".$image);


$sql = "UPDATE skill SET title = '$title', content = '$content', image = '$image' where id = '$id'";

$result = $connection-> query($sql);

header('Location: skill.php');

?>
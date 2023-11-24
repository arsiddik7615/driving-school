<?php 

include ('connection.php');



$id = $_POST['list'];

$title = $_POST['title'];

$content = $_POST['content'];

$facility_1 = $_POST['facility_1'];

$facility_2 = $_POST['facility_2'];


$image = $_FILES['image']['name'];

$tem = $_FILES['image']['tmp_name'];

move_uploaded_file($tem, "../uploads/".$image);


$sql = "UPDATE about_compani SET title = '$title', content = '$content', facility_1 ='$facility_1',facility_2 ='$facility_2', image = '$image' where id = '$id'";

$result = $connection-> query($sql);

header('Location: about_compani.php');

?>
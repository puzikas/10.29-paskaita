<?php

$alert = null;

if (isset($_POST['submit'])) {
	$target_file = "images/" . $_FILES["image"]["name"];
	move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
	$alert = "The file ". $_FILES["image"]["name"] . " has been uploaded.";
// } else {
// 	$alert = "Sorry, there was an error uploading your file.";
}

$images = array_diff(scandir("images"), ['..', '.']);

include "body.php";

?>


<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$file_type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//Variable filtering
// $file_type_new = $_FILES['fileToUpload']['name']; //returns the mimetype
$allowed = array("jpeg", "gif", "png");

if(in_array($file_type, $allowed) && $_FILES["fileToUpload"]["size"][$i]<=10000000) {
  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
  echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded successfully.";
} else {
  echo 'Only jpg, gif, and pdf files are allowed.<br> Or you cannot upload size is above 10mb';
}

echo "<br><a href='" . $_SERVER['HTTP_REFERER'] . "'>Go back</a>";
?>
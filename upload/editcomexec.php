<?php
include('config.php');


if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);




			move_uploaded_file($_FILES["image"]["tmp_name"],"communication/" . $_FILES["image"]["name"]);

			$location="communication/" . $_FILES["image"]["name"];
			$category=$_POST['category'];
			$mnu=$_POST['mnu'];
			$date=$_POST['date'];
			$id=$_POST['id'];



			$update=mysql_query("UPDATE minute SET category='$category', mnu='$mnu', date='$date', content='$location' where com_id='$id'");


			header("location: commu.php");
			exit();


	}


?>

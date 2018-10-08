<?php

	$conn = mysqli_connect('localhost','root','','erastore');
	if($conn){
		echo 'Connected';
	}

	if(isset($_POST['submit'])){
		$target = 'images/uploaded/'.basename($_FILES['pimg']['name']);
		$name= $_POST['pname'];
		$des= $_POST['pdes'];
		$pprice= $_POST['pprice'];
		$type= $_POST['ctype'];
		$category = $_POST['category'];
		$image = $_FILES['pimg']['name'];
		$insert = "insert into product (pname,pdes,pprice,photopath,category,type) values ('$name', '$des', '$pprice', '$image','$category','$type')";
		mysqli_query($conn,$insert);
		if(move_uploaded_file($_FILES['pimg']['tmp_name'], $target)){
			echo 'Uploaded sucessfully';
		}else{
			echo 'Upload Failed';
		}
}
		
?>

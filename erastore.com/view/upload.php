<?php

	mysql_connect('localhost:8080','root','','');
	mysql_select_db('erastore');


	if(isset($_POST['submit'])){
		$name= $_POST['pname'];
		$des= $_POST['pdes'];
		$pprice= $_POST['pprice'];
		$image = $_FILES['pimg']['pname'];

		$insert = "insert into product (pname,pdes,pprice,photopath) values ('$name', '$des', '$pprice', '$image')";
		if(mysql_query($insert)){
			move_uploaded_file($FILES['pimg']['temp_name'], "images/$image");
			echo 'Successfully Uploaded.';
		}
		else{
			echo "Upload Failed.";
		}


		
?>
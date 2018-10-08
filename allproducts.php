<?php
$conn = mysqli_connect('localhost','root','','erastore');

$insert = "select * from product";
$result = mysqli_query($conn,$insert);

while($row = mysqli_fetch_array($result)){
	echo "<img src='images/".$row['photopath']."'>";
}
?>
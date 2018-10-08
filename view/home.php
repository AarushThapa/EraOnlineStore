
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>

<form method="POST" action="upload.php" enctype="multipart/form-data">

	<legend>Add a prodcut</legend>
	<input type='text' placeholder="Name of the product" name='pname'>
	<input type='text' placeholder="Description" name='pdes'>
	<input type='number' placeholder="Price" name='pprice'>
	<input type='text' placeholder="Category" name='category'>
	<input type='text' placeholder="Clothes type" name='ctype'>
	<input type='file' placeholder="Image" name='pimg'>
	<button name='submit' type='submit'>Upload</button> 

</form>

</body>
</html>
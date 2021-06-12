<?php

include 'data.php';

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$person=$_POST['person'];

	$insert = "insert into signup(Name,Person) values('$name','$person')";
	$res=mysqli_query($con,$insert);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
</head>
<body>
	<form method="POST">
	<div>
		<input type="text" name="name">
		<input type="text" name="person">
		<button name="submit">Submit</button>
	</div>
	</form>

</body>
</html>

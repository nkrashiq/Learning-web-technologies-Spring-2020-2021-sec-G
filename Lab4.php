<?php
	if(isset($_POST['submit'])){
	$name 	=$_POST['myname'];
	$password=$_POST['password'];
	if($name == ""|| $password =="" )
	{
		echo "Null Submission";}
	elseif(preg_match('/^[a-zA-Z]+[a-zA-Z-0-9.-_]+$/',$name)==1&& strlen($name)>=2 && strlen($password)>=8)
	
		{
			if(strpbrk($password,"@")!= false || strpbrk($password,"#")!= false || strpbrk($password,"$")!= false || strpbrk($password,"%")!= false)
			{echo "Success";}}
	else 
	{echo"wrong submission";}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title> NAME INPUT FIELD</title>
</head>
<body>
	<form method="POST" action="#">
	<fieldset>
		<legend>LOGIN</legend>
		User Name:		<input type="text" name="myname" value=""><br>
		Password:		<input type="password" name ="password" value=""><br>
	<label>
      <input type="checkbox" checked="" name="remember"> Remember me
	</label> <br>
						<input type="submit" name="submit" value="Submit">
					
	</fieldset>
	</form>
	</body>
	</html>
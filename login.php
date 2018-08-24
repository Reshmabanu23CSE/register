<?php
include_once 'resource/session.php';
include_once 'resource/database.php';
include_once 'resource/utilities.php';
if(isset($_POST['loginBtn'])){
	$form_errors =array();
$required_fields =array('username','password');
$form_errors =array_merge($form_errors, check_empty_fields($required_fields));
if(empty($form_errors))
{
	$user =$_POST['username'];
	$password =$_POST['password'];
	$sqlquery ="SELECT *FROM users WHERE username = :username";
	$statement =$db->prepare($sqlQuery);
	$statement->execute(array(':username' =>$user));
	while($row =$statement->fetch())
	{
		$id=$row['id']=$id;
		$hashed_password =$row['password'];
		$username=$row['username'];
		if(password_verify($password,$hashed_password))
		{
		$_SESSION['id']=$id;
$_SESSION['username']=$username;
header(	"location:index.php");
		}	else{
		$result="<p style='padding:20px; color:red; border:1px solid gray;''>invalid username or password</p>";
		}
		}
}
else
{
	if(count($form_errors)==1)
	{
		$result="<p style='color:red;'>there was one error in the form</p>";
	}
	else{
		$result ="<p style='color:red;'>there were" .count($form_errors)."error in the form</p>";
	}
}
}
	?>


<html>
<head lang="en">
<meta charset="UTF-8">
<title>loginpage</title>
</head>
<body>
<h2>user authentication system</h2>
<h3>login form</h3

<form method="post"action="">
<p><input type="text" name="username" placeholder="Enter Name" required="required"></p>

<p><input type="password" name="password" placeholder="*********" required="required"></p>
<p><input style="float:center;" name="loginBtn" type="submit" value="signin"></p>


</form>
<p> <a href="index.php">back</a></p>

</body>
</html>
<?php
include_once 'resource/database.php';
include_once 'resource/utilities.php';
if(isset($_POST['signupBtn']))
{
	{
$form_errors =array();
$required_fields =array('email','username','password');
$form_errors=array_merge($form_errors,check_empty_fields($required_fields));
$fields_to_check_length=array('username'=> 4,'password'=>6);
$form_errors=array_merge($form_errors,check_min_length($fields_to_check_length));
$form_errors=array_merge($form_errors,check_email($_POST));

if(empty($form_errors))
{
$email =$_POST['email'];
$username =$_POST['username'];
$password =$_POST['password'];
$hashed_password =password_hash($password,PASSWORD_DEFAULT);

try
{
	$sqlInsert ="INSERT INTO users(username,email,password,join_date)
            VALUES(:username, :email, :password, now())";
$statement =$db->prepare($sqlInsert);			
$statement->execute(array(':username'=>$username,':email'=>$email,':password'=>$hashed_password));

if($statement->rowCount() ==1)
{
	$result ="<p style='padding:20px;color:green;'>registration successful</p>";
	
}	
}
catch(PDOException $ex)
{
	$result ="<p style='padding:20px; color:red;'>an error occured:".$ex->getMessage()."</p>";
}
}
else
{
	if(count($form_errors)==1)
	{
		$result ="<p style='color:red;'>there was 1 error in the form<br>";

	}
else{
			$result ="<p style='color:red;'>there were" .count($form_errors)."errors in the form<br>";
		
	
	}

}

}
}
?>
<html>
<head lang="en">
<meta charset="UTF-8">
<title>register page</title>
</head>
<body>
<h2>user authentication system</h2>
<h3>registration form</h3>
<?php if(isset($result))echo $result;?>
<?php if(!empty($form_errors))echo show_errors($form_errors);?>
<form method="post"action="">
<p><input type="text" name="username" placeholder="Enter Name" required="required"></p>
<p><input type="text" name="email" placeholder="Enter Email" required="required"></p>

<p><input type="password" name="password" placeholder="*********" required="required"></p>
<p><input style="float:center;" name="signupBtn"type="submit" value="signup"></p>


</form>
<p> <a href="index.php">back</a></p>

</body>
</html>
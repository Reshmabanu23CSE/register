<?php include_once 'resource/session.php';?>
<html>
<head lang="en">

<meta charset="UTF-8">
<title>homepage</title>
</head>
<body>
<h2>user authentication system</h2>
<?php
if(!isset($_SESSION['username'])):?>
<p>you are not signin<a href="login.php">login</a>mot a member?<a href="signup.php">signup</a></p>

<?php else:?>
<p>logged in as <?php if(isset($_SESSION['username'])) echo $_SESSION['username'];?> <a href="logout.php">logout</a></p>
<?php endif ?>

</body>
</html>
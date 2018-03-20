<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
	session_start();
		
		$uname = $_POST['txtuser'];
		$pass  = $_POST['pass'];
	
	if($uname=="forex" && $pass=="123"){
		
		// create a session variable and store the username
		// session variable is accessible by any page
		$_SESSION['UNAME'] = "kamal";
		
		// redirect user to home page
		header("location: ../admin.php");
	}else{
		// redirect user to login page with error
		header("location: ../login.php?error");
	}
?>
</body>
</html>
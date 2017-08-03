<!-- Open the login.php page. If the correct username and password are sent, 
assign a session key called logged_in_user to the username of the logged in user.



Add a check to the login.php page to see if the user is logged in by checking the logged_in_user key. 
If they are, redirect to the authorized.php page instead of showing the login page.
Add a check to the authorized.php page to redirect to the login.php page if a user is not logged in. 
If they are, display their username after the authorized message.
Add a logout.php file. Use the clearSession() function from the examples in this lesson to perform a 
logout when that page is accessed and then redirect the user to the login page.
Add a link to the authorized.php page that goes to logout.php.
Test logging in, logging out, and accessing the authorized page without being logged in to make sure 
everything works as expected. -->


<?php
session_start();
require_once 'functions.php';



function pageController() 
{

	if (isset($_SESSION['logged_in_user'])){
		header("Location:authorized.php");
	}
	$data['error'] = null;



	if (inputHas('username') && inputHas('password')){

		$username = inputGet('username');
		$password = inputGet('password');


	} else {
		$username = '';
		$password = '';
	}

	if ($username == 'guest' && $password == 'password') {
		
		$sessionId = session_id();
		$_SESSION['logged_in_user'] = $username;
		$_SESSION['sessionID'] = $sessionId;
		var_dump($sessionId);
		header("Location:authorized.php");
		die();
	} elseif ($username !== '' && $password !== '') {
		$data['error'] = "Invalid username or password try again.";
	}




	return $data;

}

extract(pageController());

?>




<!DOCTYPE html>
<html>
<head>
	<title>Login!!!!</title>
</head>
<body>

	<h1><?=$error?></h1>

    <form method="POST" action="login.php">
        <label>Username</label>
        <input type="text" name="username"><br>
        <label>Password</label>
        <input type="text" name="password"><br>
        <input type="submit">
    </form>


</body>
</html>
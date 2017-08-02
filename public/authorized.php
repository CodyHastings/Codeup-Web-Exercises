<?PHP
	session_start();

function pageController() 
{


	var_dump($_SESSION);

	if (!isset($_SESSION['logged_in_user'])){
		header("Location:login.php");
		die();
	} 

	if (isset($_POST['logout'])) {
		logOut();
		var_dump($_POST['logout']);
		header("Location:login.php");
		die();
	}

}

function logOut()
{
    // clear $_SESSION array
    session_unset();

    // delete session data on the server
    session_destroy();

    // ensure client is sent a new session cookie
    session_regenerate_id();

    // start a new session - session_destroy() ended our previous session so
    // if we want to store any new data in $_SESSION we must start a new one
    session_start();

}

pageController();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Authorized</title>
</head>
<body>

<h1>Thank you for logging in <?= $_SESSION['logged_in_user']?></h1>

<form method="POST">
	<button name="logout" type="submit">Log out</button>
</form>


</body>
</html>
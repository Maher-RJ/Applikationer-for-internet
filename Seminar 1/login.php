
<html>
<head lang="sv">
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>Logga in</title>
</head>
<body>
<?php require_once("menu.php"); ?>
<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
	require_once("database.php");

	$_POST['username'] = mysqli_real_escape_string($conn, $_POST['username']);
	$_POST['password'] = mysqli_real_escape_string($conn, $_POST['password']);
	$sql = "SELECT * FROM users WHERE username = '" . $_POST['username'] . "' AND password = '" . $_POST['password'] . "'";
	$result = $conn->query($sql);

	if($result->num_rows > 0){
		$_SESSION['logged_in'] = true;

		$user = $result->fetch_assoc();
		$_SESSION['username'] = $user['username'];
	} else {
		echo 'Användarnamnet eller lösenordet är fel!';
	}
}

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)
	header('Location: index.php');

?>

<form class="formstyle" method="post">
	<div class="container">
		<label><b>Username</b></label>
		<input type="text" name="username" placeholder="Enter Username">
		<label><b>Password</b></label>
		<input type="password" name="password" placeholder="Enter Password">
		<button type="submit">Login</button>
	</div>
</form>
</body>
</html>
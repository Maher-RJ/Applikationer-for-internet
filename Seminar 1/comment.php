<?php
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
	if (isset($_POST['comment']) && $_POST['comment'] != '') {
		require_once("database.php");

		$_POST['comment'] = mysqli_real_escape_string($conn, $_POST['comment']);

		$sql = "INSERT INTO comments (username, comment, recipe) values ('".$_SESSION['username']."', '".$_POST['comment']."', '".$recipe."')";
		if ($conn->query($sql) == false)
			echo $conn->error;
	}
}
?>
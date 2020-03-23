<?php

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
	if (isset($_POST['commentid']) && $_POST['commentid'] != '') {
		require_once("database.php");

		$_POST['commentid'] = mysqli_real_escape_string($conn, $_POST['commentid']);

		$sql = "DELETE FROM comments WHERE username='".$_SESSION['username']."' AND id='".$_POST['commentid']."'";
		if ($conn->query($sql) == false)
			echo $conn->error;
	}
}

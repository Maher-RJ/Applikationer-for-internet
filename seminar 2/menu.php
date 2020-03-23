<?php 
session_start();
?>
	<div class="menu">
	<ul>
		<li class="menu"><a href="index.php">Home</a></li>
		<li class="menu"><a href="kalender.php">Kalender</a></li>
		<li class="menu"><a href="meatballs.php">Köttbullar</a></li>
		<li class="menu"><a href="pannkakor.php">Pannkakor</a></li>
		<?php
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
		?>
		<li class="menu"><a href="logout.php">Logga ut</a></li>
		<?php
		} else {
		?>
		<li class="menu"><a href="login.php">Logga in</a></li>
		<?php
		}
		?>
		
	</ul>
	</div>
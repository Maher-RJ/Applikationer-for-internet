<?php
require_once("database.php");
$sql = "SELECT * FROM comments WHERE recipe='".$recipe."'";
$result = $conn->query($sql);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
		echo '<div class="kommentar">';
		if ($row['username'] == $_SESSION['username']) {
			?>
			<form action="" method="post">
				<input type="hidden" value="<?php echo $row['id']; ?>" name="commentid">
				<div>
				<input class="tabort" type="submit" value="Ta bort">
				</div>
			</form>
			<?php
		}
			echo '<h6>'.$row['username'].'</h6>';
			echo '<p>'.$row['comment'].'</p>';
			echo '</div>';
	}
}
?>
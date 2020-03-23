<!DOCTYPE html>
<html lang="sv">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Köttbullar</title>

    <style>
                body  {
                    background-image: url("food.jpg");
                    background-color: #cccccc;
                }
        </style>
    </head>
<body>
	<h1>Köttbullar</h1>
	<?php require_once("menu.php"); ?>
	<img src="img/meat.jpg" alt="bild"/>
	<p class="tot">TOTAL TID: 45 min</p>

	<h2> Ingredients</h2>
 				<ul>
 					<li>1 package (32 ounces) frozen fully cooked Italian meatballs</li>
 					<li>1/2 cup chopped onion</li>
 					<li>1/4 cup packed brown sugar</li>
 					<li>1 envelope onion soup mix</li>
 					<li>1 can (12 ounces) beer or nonalcoholic beer</li>
 					<li>12 hoagie buns, split</li>
 					<li>3 cups (12 ounces) shredded Swiss cheese</li>
				</ul>	
				<h2>Directions</h2>
				<ol>
  					<li>In a 3-qt. slow cooker, combine the meatballs, onion, brown sugar, soup mix and beer. Cover and cook on low for 3 to 4 hours or until heated through.</li>
  					<li>Place six meatballs on each bun bottom. Sprinkle each sandwich with 1/4 cup cheese. Place on baking sheets. Broil 4-6 in. from the heat for 2-3 minutes or until cheese is melted. Replace bun tops. Yield: 12 servings.</li>
				</ol>
			
				<h2> Nutritional Facts</h2>	
				<p>643 calories: 1 each, 36g fat (18g saturated fat), 95mg cholesterol, 1302mg sodium, 49g carbohydrate (13g sugars, 4g fiber), 29g protein .</p>

	<div>
		<h5>Kommentarer:</h5>
	</div>

		<?php
			$recipe = 'meatballs';
			require_once('comment.php');
			require_once('deletecomment.php');
			require_once('recipeloader.php');
		?>
	<?php
	if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
		?>
		<textarea rows="4" cols="50" name="comment" form="commentform" placeholder="Skriv din kommentar här..."></textarea>
		<form action="" method="post" id="commentform">
			<input type="submit" name="" value="Kommentera">
		</form>
		<?php
	}
	?>

	
	
</body>
</html>
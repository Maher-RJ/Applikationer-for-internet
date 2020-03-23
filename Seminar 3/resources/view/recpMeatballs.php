<!DOCTYPE html>

<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="resources/css/foodcss.css">
        <title>Meatballs</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php include 'resources/fragments/menuMeatballs.php'; ?>
        <?php include 'resources/fragments/activeuser.php'; ?>
        <h1>Meatballs recipe</h1>
        <img src="resources/pictures/meat.jpg"
             alt="MEATBALLS"/>
        <h2>Ingredients</h2>
        <ul>
            <li>1 egg</li>
            <li>1 decilitres of milk</li>
            <li>500 grams of minced meat</li>
            <li>1 decilitre of breadcrums </li>
            <li>1 onion</li>
            <li>1 teaspoon of salt</li>
            <li>1 teaspoon of pepper</li>
            <li>Butter for frying</li>
        </ul>
        <h2>Todo</h2>
        <ul>
            <li>Starts with chopping up the onion and then mix all the ingredients to a mix.</li>
            <li>Take about one tablespoon and shape into a round ball, repeat untill the mix is gone.</li>
            <li>Melt some butter in a frying pan and toss in the meatballs.</li>
            <li>Serve the fryed meatballs with mashed potatoes and lingonberry jam</li>
        </ul>
        <h2>Nutritions</h2>
        <ul>
            <li>This meal is rich of proteins.</li>
        </ul>
        <h2>Comments</h2>
        <div class="comments">
            <form action="makeComment.php" method="post">
                <label for="name">Post a comment!<br></label>
                <input class="comments" type="text" name="comment"><br>
                <input type='hidden' name='dish' value='meatballs'>
                <input class="comments" type="submit" value="Send comment">
            </form>
        </div>
        <?php
       foreach ($comments as $kommentaren) {
        echo ("<p class='name'>" . $kommentaren->getName() . "</p>");
                    echo ("<div class='comment'>" . $kommentaren->getComment() . "</div>");
                    if($kommentaren->getName() == $_SESSION['name']){
                        $time = $kommentaren->getTime();
                        echo ("<form action='deleteComment.php' method='post'>");
                        echo ("<input type='hidden' name='id' value='".$kommentaren->getId()."'>");
                        echo ("<input class='delete' name='delete' type='submit' value='Delete comment'>");
                        echo("</form>");
                    }
       }
        ?>
    </body>
</html>

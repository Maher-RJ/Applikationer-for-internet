<!DOCTYPE html>

<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="resources/css/foodcss.css">
        <title>Pancakes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php include 'resources/fragments/menuPancakes.php'; ?>
        <?php include 'resources/fragments/activeuser.php'; ?>
        <h1>Pancakes</h1>
        <img src="resources/pictures/pancake.jpg"
             alt="pancakes">
        <h2>Ingredients</h2>
        <ul>
            <li> 6 deciliters milk </li>
            <li> 3 tablespoons of butter </li>
            <li> 2.5 deciliters flour </li>
            <li> 1/2 teaspoon of salt </li>
            <li> 3 eggs </li>
            <li> Ice cream </li>
        </ul>
        <h2> Todo </h2>
        <ul> 
            <li> Mix the salt, flour and milk in a bucket to a smoth mix. </li>
            <li> Melt the butter and mix it to the flour and milk mix. </li>
            <li> Take one deciliter of the mix to a frying pan and fry the pancakes on at the time. </li>
            <li> Serve with ice cream. </li>
        </ul>
        <h2>Nutritions</h2>
        <ul>
            <li>This meal contains no nutritions.</li>
        </ul>
        <h2>Comments</h2>
        <div class="comments">
        <form action="makeComment.php" method="post">
            <label for="name">Post a comment!<br></label>
            <input class="comments" type="text" name="comment"><br>
            <input type='hidden' name='dish' value='pancakes'>
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

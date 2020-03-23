<!DOCTYPE html>

<html lang="sv">
    <head>
        <link rel="stylesheet" type="text/css" href="resources/css/foodcss.css">
        <title>Meatballs</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
        <script src="jquery-3.1.1.js"></script>
        <script src="comments.js"></script>
    </head>
    <body onload="fetchComments('<?=$dish?>')">
        <?php include 'resources/fragments/menuMeatballs.php'; ?>
        <?php include 'resources/fragments/activeuser.php'; ?>
        <div id="usr" style="display: none" data-user="<?= $username ?>"></div>
        <h1>Meatballs recipe</h1>
        <img src="resources/pictures/kottbullar.jpg"
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
        <div class = "comments">
            <form id="publish" onsubmit="postComment(); return false;">
                <label for="name">Post a comment!<br></label>
                <input id="msg" class="comments" type="text" name="comment"><br>
                <input type='hidden' name='dish' value='meatballs'>
                <input type="submit" id="send" class="comments" value="send a comment">
            </form>
        </div>
        <div id ="comments"></div>
        
    </body>
</html>

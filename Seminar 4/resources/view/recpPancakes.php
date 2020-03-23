<!DOCTYPE html>

<html lang="sv">
    <head>
        <link rel="stylesheet" type="text/css" href="resources/css/foodcss.css">
        <title>Pancakes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">       
        
        <script src="jquery-3.1.1.js"></script>
        <script src="comments.js"></script>
    </head>
    <body onload="fetchComments('<?=$dish?>')">
        <?php include 'resources/fragments/menuPancakes.php'; ?>
        <?php include 'resources/fragments/activeuser.php'; ?>
        <div id="usr" style="display: none" data-user="<?= $username ?>"></div>
        <h1>Pancakes</h1>
        <img src="resources/pictures/pancakes.jpg"
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
<div class = "comments">
            <form id="publish" onsubmit="postComment(); return false;">
                <label for="name">Post a comment!<br></label>
                <input id="msg" class="comments" type="text" name="comment"><br>
                <input type='hidden' name='dish' value='pancakes'>
                <input type="submit" id="send" class="comments" value="send a comment">
            </div>
        </div>
        <div id = "comments"></div>

        
    </body>
</html>

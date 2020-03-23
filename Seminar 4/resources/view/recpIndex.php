<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="resources/css/foodcss.css">
        <title>Tasty recipies</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php include 'resources/fragments/menu.php'; ?>
        <?php include 'resources/fragments/activeuser.php'; ?>
        <h1 class="Index">Welcome to Tasty recipies!</h1>
        <h2 class="Index">
            <a href="calendar.php">Click here to visit the calendar for some tasty recipies!</a>
        </h2>
        <div class="Index">
            <a href="meatballs.php">
                <img src="resources/pictures/kottbullar.jpg" alt="Meatballs">
            </a>
        </div>
        <div class="Index">
            <a href="pancakes.php">
                <img src="resources/pictures/pancakes.jpg" alt="Pancakes">
            </a>
        </div>
    </body>
</html>

<!DOCTYPE html>


<html>
    <head>
        <link rel="stylesheet" type="text/css" href="resources/css/foodcss.css">
        <meta charset="UTF-8">
        <title></title>
        
    </head>
    <body>
        <?php include 'resources/fragments/menuLogin.php'; ?>
        <?php include 'resources/fragments/activeuser.php'; ?>
        <h1 class="reglog">Please enter nickname and password</h1>
        <div class="form">
            <form action="userLogin.php" method="post">
                <label for="name">Nick name</label>
                <input type="text" name="nameLogin"><br>
                <label for="password">Password</label>
                <input type="password" name="passwordLogin"><br>
                <input type="submit" value="Log in">
            </form>
        </div>
    </body>
</html>


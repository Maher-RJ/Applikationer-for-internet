
<div id="logged">
    <?php
        if(!empty($_SESSION['name'])){
            echo 'Logged in as: ' . $_SESSION['name'];
        }
        else{
            echo 'Not logged in';
        }
    ?>
</div>


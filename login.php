<!doctype html>

<html lang = "en">
    <head>
        <title>Fileshare login</title>
    </head>
    
    <body>
<!--        POSSiBle CHeesY IntRo-->
        Weird file share
    <?php
        if (isset($_GET['stat']) && $_GET['stat'] == false){
            printf("<span id = \"inv\"> Invalid username. Please try again. <br> <br>");
        }
    ?>

    <form action = "validator.php" method = "get">
        <label>Username:</label> <input type = "text" name = "USER_NAME" id = "USER"/>
        <input type = "submit" id = "sub"/>
    </form>
    </body>
</html>
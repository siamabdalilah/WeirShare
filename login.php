<!doctype html>

<html lang = "en">
    <head>
        <title>Fileshare login</title>
    </head>
    
    <body>
<!--        POSSiBle CHeesY IntRo-->
        Weird file share<br>
    <?php
        if (isset($_GET['stat']) && $_GET['stat'] == false){
            printf("<span id = \"inv\"> Invalid username. Please try again. <br> <br>");
        }
    ?>
    <form action = "validator.php" method = "get">
        <label>Username:</label> <input type = "text" name = "USER_NAME" id = "USER"/>
        <input type = "submit" id = "sub"/>
    </form>

    <br><br><br>
    <?php
        if (isset($_GET['stat2']) && $_GET['stat2'] == "false"){
            printf("<span id = \"invn\"> Username already exists <br>");
        }
    ?>
    Create a new user? Enter name here:<br>
    
    <form action = "newuser.php" method= "get">
        <input type = "text" name = "USR"/>
        <input type = "submit" id = "subb"/>
    </form>
    </body>
</html>
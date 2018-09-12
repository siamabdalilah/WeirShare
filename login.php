<!doctype html>

<html lang = "en">
    <head>
        <title>WeirShare</title>
        <link rel = "stylesheet" type = "text/css" href = "login.css"/>
    </head>
    
    <body>
    <div id = "top">
        WeirShare
    </div>

    <form action = "validator.php" method = "get" class = "log" form = "">
        <label class = "lab">Welcome to WeirShare. Enter username below to login
        	<?php
		        if (isset($_GET['stat']) && $_GET['stat'] == false){
		            printf("<br><span class = \"inv\"> Invalid username. Please try again");
		        }
		    ?>
        </label> <br><input placeholder="Username" type = "text" name = "USER_NAME" class = "textinput"/>
        <input type = "submit" id = "sub" value = "login" class = "button"/>
    </form>

    <br><br><br>
     
    <form action = "newuser.php" method= "get" class = "log">
    	<label> Create a new user? Enter name here<br> 
    		<?php
		        if (isset($_GET['stat2']) && $_GET['stat2'] == "false"){
		            printf("<span class = \"inv\"> Username already exists <br>");
		        }
		    ?>
    	</label>
        <input placeholder = "New User" class = "textinput" type = "text" name = "USR"/>
        <input  type = "submit" id = "subb" class = "button"/>
    </form>
    </body>
</html>
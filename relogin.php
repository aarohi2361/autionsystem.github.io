<html>
    <head></head>
    <body>
        <?php
        
        echo "<form action='check_login.php' class='relogin_form' method='POST'>";
        echo "<h4>The password you entered is incoreect <br>Please Login Again</h4>";
        echo "<label for='username'>Username</label>";
        echo "<input type='text' name='username' placeholder='Username'>";
        echo "<br>";
        echo "<label for='password'>Password</label>";
        echo "<input type='text' name='password' placeholder='Password'>";
        echo "<br>";
        
        echo "<input type='submit' value='Sign in'>";
        echo "</form>";
        ?>
    </body>
</html>
<html>
    <head>

        
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Aleo:wght@700&family=Lato:wght@900&display=swap" rel="stylesheet">
        
    <style>
    input[type=submit] {
                
    padding:5px 15px; 
    background:#ffff; 
    color: #D64933;
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
    width: 100px;
    margin-top: 1%;
    margin-bottom: 2%;
    height: 40px;
    }  
    </style>
    </head>
    <body >
        
        <div class="container-fluid">
            <div class="loginPage">
        <?php 
        echo "<form action='check_login.php' method='POST'>";
        echo "<h4 class='text'><u>Login Page</u></h4>"; echo "<br>"; 
        echo "<h2 class='text'>Enter your registered Username And Password</h2>";echo "<br>";  
        echo "<label for='username' class='text-p'>Username:-  </label>";
        echo "<input type='text' name='username' placeholder='Username'>";
        echo "<br>";
        echo "<label for='password'class='text-p'>Password:-  </label>";
        echo "<input type='password' name='password' placeholder='Password'>";
        echo "<br>";
        
        echo "<input type='submit' value='Sign in'>";
        echo "</form>";
        ?>
        </div>
        </div>
    </body>
</html>
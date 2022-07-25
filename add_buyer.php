<!DOCTYPE html>
<html>
<head>
    <title>
    Sign Up Page
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aleo:wght@700&family=Lato:wght@900&display=swap" rel="stylesheet">
        
    <style>
        input[type=submit] 
        {             
            padding:5px 15px; 
            background:#ffff; 
            color: #D64933;
            border:0 none;
            cursor:pointer;
            -webkit-border-radius: 5px;
            border-radius: 5px; 
            width: 100px;
            height: 40px;
            margin-top: 1%;
            margin-bottom: 2%;
            font-size: 15px;
        }  
    </style>
    </head>
    <body>
    <div class="container-fluid">
            
    <?php
    echo "<form action='check_buyer.php' method='POST'>";
    if(isset($_GET["buyer"]))
    {
        if($_GET["buyer"]=="successful")
        {
            echo "<h4 class='text'>Successfully added the user</h4>";
            header("Location:display_item.php");
        }
        else if($_GET["buyer"]=="duplicate")
        {
            echo "<h4 class='text'>Ahh...OH! Buyer already exists.<br> Please enter another username and password</h4>";

        }
    }
    else{
        echo"<h4 class='text'>Register Yourself To Bid Now!!</h4>";
    }
    echo "<h4 class='text'>Add buyer's Username and Password to Register</h4> <br>";
    echo "<label for='username' class='text-p'>Username:</label>";
    echo "<input type='text' name='username' placeholder='Username'>";
    echo "<br>";
    echo "<label for='password' class='text-p'>Password: </label>";
    echo "<input type='text' name='password' placeholder='Password'>";
    echo "<br>";
    echo "<input type='submit' value='Add Buyer'>";
    echo "</form";
    ?>
    </div>
    </div>
</body>
</html>
  
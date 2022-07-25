<html>
<head><title>Delete Buyer</title>
 <link rel="stylesheet" href="styles.css">
 <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Aleo:wght@700&family=Lato:wght@900&display=swap" rel="stylesheet">
       
    <style>
    </style></head>
<body >
    <div class="deleteUser">
<?php

echo "<form class='delete_buyer_form' action='check_delete_buyer.php' method='POST'>";
if(isset($_GET["buyer"]))
{
    if($_GET["buyer"]=="no_account")
    {
    echo"<h4>No Such User To Delete</h4>";
    echo"<br>";
    echo"<h4>Please Try Again</h4>";
    }
    else if($_GET["buyer"]=="deleted")
    {
    echo"<h4>Successfully Deleted User!</h4>";
    }
    else if($_GET["buyer"]=="wrong_password")
{
echo"<h4 >Wrong User And Password Combination";
echo"<br>";
echo"<h4 >Please Try Again</h4>";
}
}
else
{
echo"<h4 >To Delete An Account,Please Enter The Buyer's Username and Password</h4>";
}
echo"<label 'for='username'>Username:</label>";
echo"<input type='text'name='username'placeholder='Username'>";
echo "<br>";
echo"<label for='password'>Password:</label>";
echo"<input type='text'name='password' placeholder='Password'>";
echo "<br>";

echo "</form>";
?><br>
<a href='logout.php' class=logout button'> Delete User </a>
</div>

</body>
</html>

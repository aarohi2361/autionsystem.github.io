<html>
<head><title></title>
      <link rel="stylesheet"type="text/css"href="style.css">
</head>
<body>
<?php

if(!empty($_POST["username"]) && !empty($_POST["password"]))
{
    $dbhost= "localhost";
    $dbuser="root";
    $dbpwd="";
    $dbname="hi";
    $conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
    if($conn->connect_error)
    {
       die("Connection Failed!".$conn->connect_error);
    }

$username=$_POST["username"];
$password=$_POST["password"];
$statement="SELECT * FROM buyer WHERE username=?";
$stmt=$conn->prepare($statement);
$stmt->bind_param("s",$username);
$stmt->execute();
$result=$stmt->get_result();
$row=$result->fetch_assoc();
$hash=$row["password"];

if(password_verify($password, $hash))
{
     echo"Successful login";
     session_start();
     $_SESSION["username"]=$_POST["username"];
     header("Location:display_item.php");
}
else
{
header("Location:relogin.php");
}
}
else{
    header("Location:login.php");
}
?>
</body>
</html>
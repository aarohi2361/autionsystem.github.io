<html>
<head><title>Logged Out</title>
 <!-- google fonts -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Aleo:wght@700&family=Lato:wght@900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
session_start();
if(isset($_SESSION["username"]))
{
$_SESSION=array();
session_destroy();
echo "<h1 id='exit_title'>Thanks for Coming!<br>You have Successfully Logged out</h1>";
}
 else
{
header("Location:login.php");
 }
?>
</body>
</html>
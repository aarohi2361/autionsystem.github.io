<!DOCTYPE html>
<html>
<head><title>ITEM DISPLAY</title>
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
    height: 40px;
    margin-top: 1%;
    margin-bottom: 2%;
    font-size: 15px;
    }  
    </style>
</head>
<body>
    
    <!-- NAVIGATION BAR -->
    <nav class="navbar navbar-light" style="background-color: #D64933;" >
                <a class="navbar-brand" style="color: #ffff; font-size:33px; ">aucti<b>ON</b></a>
                </nav>
    <div class="login">
<?php
session_start();
if(!isset($_SESSION["username"])){
    header("Location:login.php");

}
else
{
$DBHOST="localhost";
$DBUSER="root";
$DBPWD="";
$DBNAME="hi";
$conn=new mysqli($DBHOST,$DBUSER,$DBPWD,$DBNAME);
 if($conn->connect_error)
{
 die("Connection failed!".$conn->connect_error);
 }

$statement="SELECT * FROM item";
$result=$conn->query($statement);
while($row=$result->fetch_assoc())
{
$iid=$row["item_id"];
$iname=$row["item_name"];
$ipic=$row["item_pic"];
$icurrentp=$row["current_bid"];
$iimg="item/";
$iimg = $iimg.$row["item_pic"];

$link="item_detail.php?item_id=";
$item_detail = $link.$iid;

echo"<div class='item'>";
echo"<div class='item_row'>Item Id: $iid</div>";
echo"<div class='item_row'>Item Name:$iname</div>"; 
echo"<img class='item_img' src='$iimg' alt='image'>";
echo"<div class='item_row'>Current Bid: $$icurrentp</div>";
echo"<div class='item_row'><a class='link' href=$item_detail style='color: blue'> Place Your Bid</a></div>";
echo"</div>";
}
$conn->close();
}
?>
<br>
<p class=" loginPage text" style=" padding: 1% 2%;">Done With bidding <br>Log out Anytime!<br>
<br>
<a href='logout.php' class='logout'> Logout </a>
</p>

</div>
</body>
</html>


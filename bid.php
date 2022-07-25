<html>
<head><title>BID RESULT</title> <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Aleo:wght@700&family=Lato:wght@900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php

echo"<br>";

$DBHOST="localhost";
$DBUSER="root";
$DBPWD="";
$DBNAME="hi";
$conn=new mysqli($DBHOST,$DBUSER,$DBPWD,$DBNAME);
if($conn->connect_error)
{
die("Connection failed!".$conn->connect_error);
}
if(!isset($_POST["item_id"]))
{
header("Location:display_item.php");
}
else{
    $item_id=$_POST["item_id"];
    session_start();
    $statement="SELECT*FROM bid WHERE item_id=?";
    $stmt=$conn->prepare($statement);
    $stmt->bind_param("s",$item_id);
    $stmt->execute();
    $result=$stmt->get_result();
    $row= $result->fetch_assoc();
    if($_SESSION["username"] == $row){
    echo"You are already the highest bidder";
    }/*checks if user is already highest bidder*/
    else
    {
    $statement="SELECT*FROM item WHERE item_id=?";
    $stmt=$conn->prepare($statement);
    $stmt->bind_param("s",$item_id);
    $stmt->execute();
    $result=$stmt->get_result();
    $row=$result->fetch_assoc();
    $bid=$_POST["bid"];
    $username=$_SESSION["username"];
    /*determine if user bid properly*/
        if($bid>$row["current_bid"])
        {
            $statement="UPDATE item SET current_bid=? WHERE item_id=?";
            $stmt=$conn->prepare($statement);
            $stmt->bind_param("dd",$bid,$item_id);
            $stmt->execute();
            /*updates the bid value*/
            $statement="UPDATE item SET bid_num=bid_num+1 WHERE item_id=?";
            $stmt=$conn->prepare($statement);
            $stmt->bind_param("d",$item_id);
            $stmt->execute();
            /*updates the number of bids*/
            $statement="INSERT INTO bid(username,item_id,bid_price)VALUES(?,?,?)";
            $stmt=$conn->prepare($statement);
            $stmt->bind_param("sid",$username,$item_id,$bid);
            $stmt->execute();
            $statement="DELETE FROM bid WHERE bid_price<=? AND item_id=?";
            $stmt=$conn->prepare($statement);
            $stmt->bind_param("dd",$bid,$item_id);
            $stmt->execute();
            echo"<p id='exit_title'>Congratulations,the current bid value is$</p>".$bid;
            
        }/*insertsanew bid into the BID table and deletes older ones*/
        else
        {
            echo" <p id='exit_title'>Sorry!<br>Your bid must be greater than the current bid price.<br>
            Head Back</p>";
        }/*check to see if you bid greater than current bid*/
    /*check to see if you are already the greatest bidder*/
$conn->close();
}
}/*prevent direct access by user*/
?>
<br>
<a href='logout.php' class=logout button' style="margin-left: 45%"> Logout </a>
</body>
</html>

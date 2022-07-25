<html>
<head><title>Delete Item</title>
<link rel="stylesheet" href="styles.css">
 <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Aleo:wght@700&family=Lato:wght@900&display=swap" rel="stylesheet">
       
   
    </head>
<body>
<div class="deleteUser">
<?php

echo"<form class='delete_item_form' action='check_delete_item.php'method='POST'>";
if(isset($_GET["item"]))
{
    if($_GET["item"]=="no_item"){
    echo"<h4>No such item exists</h4>";
    echo"<br>";
    echo"<h4>Please try again</h4>";
    }
    else if($_GET["item"]=="successful")
    {
    echo"<h4>Successfully deleted the item!</h4>";
    }
}
else
{
echo"<h4>To Delete An Item,Please Enter The Item Name</h4>";
}
echo "<label class='label'for='item_name'>Item Name:</label>";
echo"<input class='text' type='text'name='item_name'placeholder='Item name' </label>";
echo"<input class='submit' type='submit'value='Delete Item'/>";
echo"</form>";
?>
</div>
</body>
</html>

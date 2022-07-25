<html>
<head>
    <title> Add Item</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aleo:wght@700&family=Lato:wght@900&display=swap" rel="stylesheet">
        
</head>
<body style="background-color: #D64933; color: #ffff; text-align:justify; padding: 12% 0% 0% 35%">=
<?php

    echo "<form class='add_item_form' action='check_item.php' method='POST' enctype='multipart/form-data'>";
    if(isset($_GET["item"]))
    {
        if($_GET["item"]=="duplicate")
        {
        echo"<h4>Already entered this item</h4>";
        echo"<br>";
        echo"<h4>Please try again</h4>";
        }
        else if($_GET["item"]=="successful")
        {
            echo"<h4>Successfully added an item!</h4>";
        }
    }
        else
        {
            echo"<h4>Please add an item</h4><br>";
        }   
        echo"<label for='item_name'>Item Name:</label>";
        echo"<input class='text'type='text'name='item_name'/>";
        echo"<br>";
        echo"<label 'for='item_description'>Item Description:</label>";
        echo "<input class='text'type='text'name='item_description'/>";
        echo"<br>";
        echo"<label for='endtime'>Ending Bid Time:</label>";
        echo"<input class='text'type='text'name='endtime'/>";
        echo"<br>";
        echo"<label for='item_pic'>Item Picture:</label>";
        echo"<input class='text'type='file'value='item_pic'name='item_pic'/>";
        echo"<br>";
        echo"<input class='submit'type='submit'value='Add Item'/>";
        echo"</form>";
    ?>

</body>
</html>
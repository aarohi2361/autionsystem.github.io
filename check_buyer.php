<!DOCTYPE html>
<html>
    <head>

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
            $username= $_POST["username"];
            $password= $_POST["password"];
            //hashing password
            $hashed=password_hash($password, PASSWORD_DEFAULT);

            $statement="SELECT * FROM buyer WHERE username=?";
            $stmt=$conn->prepare($statement);
            $stmt->bind_param("s",$username);
            $stmt->execute();
            $result= $stmt->get_result();
            if($result->num_rows==1)
            {
                $value="duplicate";
                header("Location: add_buyer.php?buyer=$value");
            }
            else{
                $statement="INSERT INTO buyer(username, password) VALUES(?,?)";
                $stmt= $conn->prepare($statement);
                $stmt->bind_param("ss",$username, $hashed);
                $stmt->execute();
                $value="successful";
                header("Location: add_buyer.php?buyer=$value");

            }
            $conn->close();
        }//verify if there is a duplicate user
        else{
            header("Location: add_buyer.php");
        }
        ?>
    </body>
</html>
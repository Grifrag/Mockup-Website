<!DOCTYPE html>
<html lang='en'>
<link rel="stylesheet" href="style.css">
    <head></head>
    <style>
        table{
        border-collapse:collapse;
        padding: 8px;
        width:100%
        }
        tr,td{
            border: 1px solid #dddddd;
            text-align: left;
            padding: 5px;
        }
    
        </style>
    <body>
        <?php  include("navbar.php"); ?> <!--navbar-->
        <h1>
        <?php 
         $host = "localhost";
         $dbUsername = "root";
         $dbPassword = "";
         $dbName = "eventdb";
         $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
         if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $result=mysqli_query($conn,"SELECT * FROM users");
            echo"<h2>Εγγεγραμένοι χρήστες</h2>";
            echo "<table>";
            echo"<tr><td>Username</td><td>Name</td><td>Email</td></tr>";
            while($row = mysqli_fetch_array($result)){   //loop the results
                echo "<tr><td>" . $row['username'] . "</td><td>" . $row['name'] .
                 "</td><td>" . $row['email'] . "</td></tr>";  
                }
            echo "</table>";
            
            $conn->close();
            }
        ?></h1>
    </body>
    
</html>
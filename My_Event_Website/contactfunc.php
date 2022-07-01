<?php
$cookie_name = "user";
$cookie_value = "John Doe";
if (isset($_POST['submit'])) {
    if (isset($_POST['subject']) &&isset($_POST['message']) && isset($_POST['name']) &&
         isset($_POST['email'])) {
        
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        
        
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "eventdb";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM messages WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO messages(name,email,subject,message) values(?, ?, ?,?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssss",$name, $email,$subject,$message);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            
            
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>
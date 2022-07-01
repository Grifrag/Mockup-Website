<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['name']) &&
         isset($_POST['email'])) {
        
        $username = $_POST['username'];
        $cookie_username_name= "username";

        $name = $_POST['name'];
        $cookie_name_name= "name";

        $email = $_POST['email'];
        $cookie_email_name= "email";
        setcookie($cookie_username_name, $username, time() + (86400 * 10), "/");
        setcookie($cookie_name_name, $name, time() + (86400 * 10), "/");
        setcookie($cookie_email_name, $email, time() + (86400 * 10), "/");

        



        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "eventdb";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM users WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO users(username,name,email) values(?, ?, ?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sss",$username, $name, $email);
                if ($stmt->execute()) {
                    echo "Επιτυχής εγγραφή.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Υπάρχει ήδη χρήστης με το ίδιο email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
}

?>
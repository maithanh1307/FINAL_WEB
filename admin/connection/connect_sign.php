<?php 
$conn = new mysqli('localhost', 'root', '', 'finalweb'); //servername, username, password, database's name
if ($conn->connect_error) {
  die("Connection Failed : " . $conn->connect_error);
}
else {
    if (isset($_POST['userName']) && isset($_POST['email']) && isset($_POST['loginpassword'])) {
        // Process form data
        $userName = $_POST["userName"];
        $email = $_POST["email"];
        $loginpassword = $_POST["loginpassword"];

        $sql = "INSERT INTO login (userName, email, loginpassword) VALUES (?, ?, ?)";
        $stmt .= $conn->prepare($sql);
        $stmt->bind_param("sss", $userName, $email, $loginpassword);
        $result = $stmt->execute();

        if ($result === false) {
            echo "Error: " . $conn->error;
        }
        echo 'success';
        
    }
    else {
        echo 'failed';
    }
}
?>

<?php
    require_once 'connectData.php';
    if(isset($_GET['userID'])) {
        $userID= $_GET['userID'];
    }
    $sql = "DELETE FROM login WHERE userID=$userID";
    $query = mysqli_query($conn, $sql);
    header('Location: buttonMembers.php');
    
?>
<?php
    require_once 'connectData.php';
    if(isset($_GET['destinationID'])) {
        $destinationID= $_GET['destinationID'];
    }
    $sql = "DELETE FROM addinformation WHERE destinationID=$destinationID";
    $query = mysqli_query($conn, $sql);
    header('Location: buttons.php');
    
?>
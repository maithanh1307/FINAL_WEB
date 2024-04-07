<?php
    require_once 'connectData.php';
    if(isset($_GET['vnID'])) {
        $vnID= $_GET['vnID'];
    }
    $sql = "DELETE FROM addvietnam WHERE vnID=$vnID";
    $query = mysqli_query($conn, $sql);
    header('Location: buttonsVietnam.php');
    
?>
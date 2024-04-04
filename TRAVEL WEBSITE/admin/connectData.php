<?php
    $conn = mysqli_connect('localhost', 'root', '', 'finalweb');
    if ($conn) {
        mysqli_query($conn, "SET NAMES 'UTF8'");
    }
    else {
        echo 'failed connect';
    }
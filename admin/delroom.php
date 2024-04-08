<?php
require_once 'connectData.php';

if(isset($_GET['hotelID'])) {
    $hotelID = $_GET['hotelID'];
    $sql = "DELETE FROM addhotel WHERE hotelID=$hotelID";
    $query = mysqli_query($conn, $sql);
    header('Location: buttonHotel.php');
    exit(); // Đảm bảo không có mã HTML hoặc mã PHP nào được thực thi sau lệnh header
}
?>

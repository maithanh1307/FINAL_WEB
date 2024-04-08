<?php
// Kết nối đến cơ sở dữ liệu
$conn = new mysqli('localhost', 'root', '', 'finalweb');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Thực hiện truy vấn SQL
$sql = "SELECT * FROM addhotel";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <tr>
            <td>'.$row['hotelID'].'</td>
            <td>
                <img style="width: 200px;" src="../frontend/img_hoteldetails/'.$row['hotelImage'].'">
            </td>
            <td>'.$row['hotelName'].'</td>
            <td>'.$row['hotelType'].'</td> 
            <td>'.$row['hotelDescription'].'</td> 
            <td>'.$row['hotelGuest'].'</td>
            <td>'.$row['hotelPrice'].'</td>
            <td>
                <a class="edit-class" href="">Sửa</a>
                |
                <a class="delete-class" href="delroom.php?hotelID='.$row['hotelID'].'">Xoá</a>            
            </td>
        </tr>';
    }
}
?>
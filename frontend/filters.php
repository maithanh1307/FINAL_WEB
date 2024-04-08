<?php
// Kết nối đến cơ sở dữ liệu
$conn = new mysqli('localhost', 'root', '', 'finalweb');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Kiểm tra xem có dữ liệu được gửi từ trang HTML không
 
    // Lấy giá trị của propertyType từ yêu cầu POST
    $hotelType = $_POST['selectedValue'];
    
    // Thực hiện truy vấn SQL
    $sql = "SELECT * FROM addhotel WHERE hotelType='$hotelType'";
    $result = mysqli_query($conn, $sql);

    // Kiểm tra và xử lý kết quả
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Hiển thị thông tin của từng khách sạn
            echo '
                <tr>
                    <td>' . $row['hotelID'] . '</td>
                    <td>
                        <img style="width: 200px;" src="../frontend/img_hoteldetails/' . $row['hotelImage'] . '">
                    </td>
                    <td>' . $row['hotelName'] . '</td>
                    <td>' . $row['hotelType'] . '</td> 
                    <td>' . $row['hotelDescription'] . '</td> 
                    <td>' . $row['hotelGuest'] . '</td>
                    <td>' . $row['hotelPrice'] . '</td>
                    <td>
                        <a class="edit-class" href="">Sửa</a>
                        |
                        <a class="delete-class" href="delroom.php?hotelID=' . $row['hotelID'] . '">Xoá</a>            
                    </td>
                </tr>';
        }
    } else {
        echo "No hotels found for the selected property type.";
    }


// Đóng kết nối
$conn->close();
?>

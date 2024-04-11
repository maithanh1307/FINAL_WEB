<?php
// Kết nối đến cơ sở dữ liệu
$conn = new mysqli('localhost', 'root', '', 'finalweb');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Thực hiện truy vấn SQL
$sql = "SELECT * FROM traveler";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <tr>
            <td>'.$row['idTraveler'].'</td>
            <td>'.$row['title'].'</td>
            <td>'.$row['lastName'].'</td>
            <td>'.$row['firstName'].'</td>
            <td>'.$row['dateOfBirth'].'</td>
            <td>'.$row['nationality'].'</td>
            <td>
                <a class="edit-class" href="">Sửa</a>
                |
                <a class="delete-class" href="delMember.php?userID='.$row['idTraveler'].'">Xoá</a>            
            </td>
        </tr>';
    }
}
?>
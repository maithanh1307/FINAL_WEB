<?php
// Kết nối đến cơ sở dữ liệu
$conn = new mysqli('localhost', 'root', '', 'finalweb');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Thực hiện truy vấn SQL
$sql = "SELECT * FROM planning";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <tr>
                                        <td>'.$row['idPlan'].'</td>
                                        <td>'.$row['destination'].'</td>
                                        <td>'.$row['dateDepart'].'</td>
                                        <td>'.$row['dateReturn'].'</td>
                                        <td>'.$row['duration'].'</td>
                                        <td>
                                            <a class="edit-class" href="">Sửa</a>
                                            |
                                            <a class="delete-class" href="">Xoá</a>
                                        </td>
                                    </tr>';
    }
}
?>
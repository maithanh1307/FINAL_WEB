<?php
// Kết nối đến cơ sở dữ liệu
$conn = new mysqli('localhost', 'root', '', 'finalweb');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Thực hiện truy vấn SQL
$sql = "SELECT * FROM addinformation";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <tr>
            <td>'.$row['destinationID'].'</td>
            <td><img style="width: 200px ;" src="img_topdestination/'.$row['destinationImage'].'" alt=""></td>
            <td>'.$row['destinationName'].'</td>
            <td>'.$row['voteLike'].'</td>
            <td>'.$row['datePost'].'</td>
            <td>
                <a class="edit-class" href="edit1_post.php?destination_ID=' . $row['destinationID'] . '&destination_Image=' . $row['destinationImage'] . '&destination_Name=' . $row['destinationName'] .
                '&vote_Like=' . $row['voteLike'] . '&date_Post=' . $row['datePost'].'">Edit</a>
                |
                <a class="delete-class" href="delTopdestination.php?destinationID='.$row['destinationID'].'">Delete</a>
            </td>
        </tr>';
    }
}
?>
<?php
// // Kết nối đến cơ sở dữ liệu
// $conn = new mysqli('localhost', 'root', '', 'finalweb');
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Kiểm tra xem biến $_GET['destination_ID'] có tồn tại không
// if (isset($_GET['destination_ID'])) {
//     $destination_ID = $_GET['destination_ID'];
//     //print_r($_GET['destination_ID']);
//     $destination_Image = $_GET['destination_Image'];
//     $destination_Name = $_GET['destination_Name'];
//     $vote_Like = $_GET['vote_Like'];
//     $date_Post = $_GET['date_Post'];

//     // Thực hiện truy vấn SQL để lấy thông tin người dùng dựa trên ID
//     $sql = "SELECT * FROM addinformation WHERE destinationID = '$destination_ID' AND destinationImage = '$destination_Image' AND destinationName = '$destination_Name' AND voteLike = '$vote_Like' AND datePost = '$date_Post'";
//     $result = $conn->query($sql);

//     if ($result->num_rows > 0) {
//         while ($row = $result->fetch_assoc()) {
//             echo '
//         <div class="admin-main-content-right-image">
            
//             <input id="destinationID" name="destinationID" type="text" value="' . $row['destinationID'] . '" required/>
//         </div>
//         <div class="admin-main-content-right-image">
//             <img src="' . $row['destinationImage'] . '" alt="' . $row['destinationName'] . ' image" />
            
//         </div>
//         <div class="admin-main-content-right-image">
            
//             <input id="destinationName" name="destinationName" type="text" value="' . $row['destinationName'] . '" required/>
//         </div>
//         <div class="admin-main-content-right-image">
            
//             <input id="voteLike" name="voteLike" type="number" value="' . $row['voteLike'] . '" required/>
//         </div>
        
//         <div class="admin-main-content-right-image">
            
//             <input id="datePost" name="datePost" type="text" value="' . $row['datePost'] . '" required/>
//         </div>
//         ';
//         }
//     } else {
//         echo "Không có dữ liệu phù hợp.";
//     }
// } else {
//     echo "Thiếu thông tin đích đến.";
// }

// // Đóng kết nối đến cơ sở dữ liệu
// $conn->close();



// Kết nối đến cơ sở dữ liệu
$conn = new mysqli('localhost', 'root', '', 'finalweb');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Kiểm tra xem các biến trên URL đã được gửi đi đầy đủ hay không
if (isset($_GET['destination_ID']) && isset($_GET['destination_Image']) && isset($_GET['destination_Name']) && isset($_GET['vote_Like']) && isset($_GET['date_Post'])) {
    $destination_ID = $_GET['destination_ID'];
    $destination_Image = $_GET['destination_Image'];
    $destination_Name = $_GET['destination_Name'];
    $vote_Like = $_GET['vote_Like'];
    $date_Post = $_GET['date_Post'];

    

    // Thực hiện truy vấn SQL để lấy thông tin người dùng dựa trên ID
    $sql = "SELECT * FROM addinformation WHERE destinationID = '$destination_ID' AND destinationImage = '$destination_Image' AND destinationName = '$destination_Name' AND voteLike = '$vote_Like' AND datePost = '$date_Post'";
    $result = $conn->query($sql);

    // if ($result->num_rows > 0) {
    //     while ($row = $result->fetch_assoc()) {
    //         echo '
    //             <div class="admin-main-content"> 
    //                 <div class="admin-main-content-topdestination-add">
    //                     <div class="admin-main-content-left">
    //                         <div class="admin-main-content-two-input">
    //                             <input name="destinationName" type="text" value="' . $row['destinationName'] . '" required>';
                                
    //                             // Check if the destination name is 'Viet Nam'
    //                             if ($row['destinationName'] === 'Viet Nam') {
    //                                 echo '
    //                                     <div class="admin-main-content-right-image">
    //                                         <img style="width: 200px ;" src="img_topdestination/'.$row['destinationImage'].'" alt="">
    //                                     </div>';
    //                             }
    
    //                             // Continuation of the echoed HTML
    //                             echo '
    //                             <input name="voteLike" type="text" value="' . $row['voteLike'] . '" required>
    //                         </div>
    //                     </div>
    //                 </div>
    //             </div>';
    //     }
    // } else {
    //     echo "Không có dữ liệu phù hợp."; // No suitable data.
    // }

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '
                <div class="admin-main-content"> 
                    <div class="admin-main-content-topdestination-add">
                        <div class="admin-main-content-left">
                            <div class="admin-main-content-two-input">
                                <input name="destinationName" type="text" value="' . $row['destinationName'] . '" required>';
                                
            // Check if the destination name is 'Viet Nam'
            if ($row['destinationName'] === 'Viet Nam') {
                // Check if destinationImage column exists and is not empty
                if (!empty($row['destinationImage'])) {
                    echo '
                        <div class="admin-main-content-right-image">
                            <img style="width: 200px;" src="img_topdestination/' . $row['destinationImage'] . '" alt="">
                        </div>';
                } else {
                    // Handle case where no image is specified for Viet Nam
                    echo '<div class="admin-main-content-right-image">No Image Available</div>';
                }
            }
    
            // Continuation of the echoed HTML
            echo '
                <input name="voteLike" type="text" value="' . $row['voteLike'] . '" required>
            </div>
        </div>
    </div>
    </div>';
        }
    } else {
        echo "Không có dữ liệu phù hợp."; // No suitable data.
    }
    
    
} else {
    echo "Thiếu thông tin đích đến.";
}

// Đóng kết nối đến cơ sở dữ liệu
$conn->close();


?>

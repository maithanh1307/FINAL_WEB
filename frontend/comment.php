<?php
include_once("admin/connectData.php");

$status = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!empty($_POST["name"]) && !empty($_POST["comment"])){
        $insertComments = "INSERT INTO comment (parentID, comment, sender) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $insertComments);
        
        // Kiểm tra xem có lỗi không khi chuẩn bị truy vấn
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "iss", $_POST["parentID"], $_POST["comment"], $_POST["name"]);
            if (mysqli_stmt_execute($stmt)) {
                $message = 'Comment posted Successfully.';
                $status = array(
                    'error'  => 0,
                    'message' => $message
                ); 
            } else {
                $message = 'Error: Comment not posted.';
                $status = array(
                    'error'  => 1,
                    'message' => $message
                ); 
            }
            mysqli_stmt_close($stmt);
        } else {
            $message = 'Error: Unable to prepare the statement.';
            $status = array(
                'error'  => 1,
                'message' => $message
            );
        }
    } else {
        $message = '<label class="text-danger">Error: Name or Comment cannot be empty.</label>';
        $status = array(
            'error'  => 1,
            'message' => $message
        ); 
    }
    echo json_encode($status);
}
else {
    echo 'failed';
}
?>

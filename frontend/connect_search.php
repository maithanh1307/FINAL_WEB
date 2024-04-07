<?php

    // conn = new mysqli('localhost', 'root', '', 'finalweb'); //servername, username, password, database's name
    // if ($conn->connect_error) {
    // die("Connection Failed : " . $conn->connect_error);
    // }
    // else {
    //     if (isset($_POST['userName']) && isset($_POST['email']) && isset($_POST['loginpassword'])) {
    // // // Xử lý dữ liệu form
    // // $destination = $_POST['destination'];
    // // $departureDate = $_POST['departureDate'];
    // // $returnDate = $_POST['returnDate'];
    // // $duration = $_POST['duration'];

    // // // Kết nối với MySQL
    // // $servername = "localhost";
    // // $username = "your_username";
    // // $password = "your_password";
    // // $dbname = "your_database_name";

    // $conn = new mysqli($servername, $username, $password, $dbname);

    // // Truy vấn thông tin vé
    // $sql = "SELECT * FROM flights WHERE destination = '$destination' AND departureDate = '$departureDate' AND returnDate = '$returnDate' AND duration = '$duration'";

    // $result = $conn->query($sql);

    // // Chuyển hướng đến trang thanh toán
    // if ($result->num_rows > 0) {
    // $row = $result->fetch_assoc();
    // header("Location: payment.php?id=" . $row['id']);
    // } else {
    // echo "Lỗi: Không tìm thấy thông tin vé phù hợp!";
    // }

    // $conn->close();


    $destination = $_POST['destination'];
    $dateDepart = $_POST['dateDepart'];
    $dateReturn = $_POST['dateReturn'];
    $duration = $_POST['duration'];
    {if ($destination  === 'destination') {
        echo '<script>alert("PLease choose your destination"); window.location.href = "frontend/index.php";</script>';
    } else 
        // Database connection
        $conn = new mysqli('localhost', 'root', '', 'finalweb');

        $stmt_check = $conn->prepare("SELECT * FROM planning WHERE destination = ? AND dateDepart = ? AND dateReturn = ?");
        $stmt_check->bind_param("sss", $destination, $dateDepart, $dateReturn);
        $stmt_check->execute();
        $result = $stmt_check->get_result();

        if ($conn->connect_error) {
        echo "$conn->connect_error";
        die("Connection Failed : " . $conn->connect_error);
        } else {
        $stmt = $conn->prepare("insert into planning(destination, dateDepart, dateReturn, duration) values(?, ?, ?, ?)");
        $stmt->bind_param("ssss", $destination, $dateDepart, $dateReturn, $duration);
        $execval = $stmt->execute();
        echo $execval;
        header('Location: ticket_demo.php');
        $stmt->close();
        $conn->close();
        }
    }

?>

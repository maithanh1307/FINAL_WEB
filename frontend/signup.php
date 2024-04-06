<?php 
  $userName = $_POST['userName'];
  $email = $_POST['email'];
  $loginpassword = $_POST['loginpassword'];
  {if ($email  === 'admin123@gmail.com') {
    echo '<script>alert("Invalid email"); window.location.href = "register.php";</script>';
  } else 
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'finalweb');
    if ($conn->connect_error) {
      echo "$conn->connect_error";
      die("Connection Failed : " . $conn->connect_error);
    } else {
      $stmt = $conn->prepare("insert into login(userName, email, loginpassword) values(?, ?, ?)");
      $stmt->bind_param("sss", $userName, $email, $loginpassword);
      $execval = $stmt->execute();
      echo $execval;
      header('Location: register.php');
      $stmt->close();
      $conn->close();
    }
  }
  // if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //   // Kiểm tra xem các trường đã được điền đầy đủ hay không
  //   if (isset($_POST['userName']) && isset($_POST['email']) && isset($_POST['loginpassword'])) {
  //       // Kết nối đến cơ sở dữ liệu
  //       $conn = new mysqli('localhost', 'root', '', 'finalweb');
  //       if ($conn->connect_error) {
  //           die("Kết nối không thành công: " . $conn->connect_error);
  //       }

  //       // Lấy dữ liệu từ form
  //       $userName = $_POST['userName'];
  //       $email = $_POST['email'];
  //       $password = $_POST['loginpassword'];

  //       // Chuẩn bị truy vấn SQL để chèn dữ liệu
  //       $sql = "INSERT INTO login (userName, email, loginpassword) VALUES (?, ?, ?)";
  //       $stmt = $conn->prepare($sql);

  //       // Kiểm tra lỗi khi chuẩn bị truy vấn
  //       if ($stmt === false) {
  //           echo "Lỗi khi chuẩn bị truy vấn: " . $conn->error;
  //       } else {
  //           // Bind các tham số vào truy vấn
  //           $stmt->bind_param("sss", $userName, $email, $password);

  //           // Thực thi truy vấn
  //           $result = $stmt->execute();

  //           // Kiểm tra xem truy vấn có thành công hay không
  //           if ($result === false) {
  //               echo "Lỗi khi thực thi truy vấn: " . $conn->error;
  //           } else {
  //               echo "Đăng ký thành công!";
  //           }

  //           // Đóng kết nối và giải phóng tài nguyên
  //           $stmt->close();
  //       }

  //       // Đóng kết nối
  //       $conn->close();
  //   } else {
  //       echo "Vui lòng điền đầy đủ thông tin.";
  //   }
  
  // }
  // else {
  //   echo 'failed';
  // }

?>
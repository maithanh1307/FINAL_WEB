<?php
// Kết nối đến cơ sở dữ liệu và xử lý yêu cầu POST
if(isset($_POST['selectedValue'])) {
    $hotelType = $_POST['selectedValue'];

    // Thực hiện truy vấn SQL
    $conn = new mysqli('localhost', 'root', '', 'finalweb');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $output = '';

    $sql = "SELECT * FROM addhotel WHERE hotelType='$hotelType'";
    $result = $conn->query($sql);

    // Kiểm tra và xử lý kết quả
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Xây dựng nội dung HTML cho từng bản ghi
            $output .= '<div class="house">
                <div class="house-img">
                    <img src="img_hoteldetails/' . $row['hotelImage'] . '" alt="">
                </div>
                <div class="house-info">
                    <p>Private ' . $row['hotelType'] . ' in Viet Nam</p>
                    <h3>' . $row['hotelName'] . '</h3>
                    <p>' . $row['hotelDescription'] . '</p>
                    <i class="fa-solid fa-star fa-beat-fade"></i>
                    <i class="fa-solid fa-star fa-beat-fade"></i>
                    <i class="fa-solid fa-star fa-beat-fade"></i>
                    <i class="fa-solid fa-star fa-beat-fade"></i>
                    <i class="fa-solid fa-star fa-beat-fade"></i>
                    <div class="house-price">
                        <p>' . $row['hotelGuest'] . '</p>
                        <h4>' . $row['hotelPrice'] . '<span>/ day</span></h4>
                        <a href="hotel_detail.html" class="book-now-link">
                            <button class="btn btn-primary btn-block" style="width: 100%; font-size: 15px;"><b>Book Now</b></button>
                        </a>
                    </div>
                </div>
            </div>';
        }
        echo $output;
    } else {
        echo "No hotels found for the selected property type.";
    }
    $conn->close();
}
?>

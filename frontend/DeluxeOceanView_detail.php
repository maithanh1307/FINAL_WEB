<?php
require_once '../admin/connectData.php';
$sql = "SELECT * FROM addhotel";
$query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Reis-Explore the World</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v5.15.4/css/all.css">
    <!-- link icon -->
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome"
        href="/css/app-wa-8d95b745961f6b33ab3aa1b98a45291a.css?vsn=d">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-solid.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-regular.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-light.css">
    <!-- Favicon -->
    <link href="img/icon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/hotel_detail.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i><a href="mailto:reisadventurescontact@gmail.com"
                                style="color: #F4538A; text-decoration: none;">reisadventurescontact@gmail.com</a></p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i><a href="tel:+19223600"
                                style="color: #F4538A; text-decoration: none;">+1922 3600</a></p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-primary px-3" href="https://www.facebook.com/profile.php?id=61557250007525"
                            target="_blank" title="Visit the Reis Adventures fanpage.">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary px-3" href="https://twitter.com/reis_adventures" target="_blank"
                            title="Visit the Reis Adventures Twitter.">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-primary px-3" href="https://www.linkedin.com/in/reis-adventures-458144300/"
                            target="_blank" title="Visit the Reis Adventures Linkedin.">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-primary px-3"
                            href="https://www.instagram.com/reis_adventures2024?igsh=YTQwZjQ0NmI0OA%3D%3D&utm_source=qr"
                            target="_blank" title="Visit the Reis Adventures Instagram.">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-primary pl-3" href="https://www.youtube.com/channel/UCzpbRAodCMdAfjL9tjk4Gfw"
                            target="_blank" title="Visit the Reis Adventures Youtube Channel.">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <div class="data1">
                            <i class="fa-duotone fa-right-to-bracket fa-fade"></i>
                            <a href="register.html" class="btn2 btn-primary2 mt-1"><b>Login /</b></a>
                        </div>
                        <div class="data2">
                            <i class="fa-solid fa-registered fa-fade"></i>
                            <a href="register.html" class="btn2 btn-primary2 mt-1"><b>Register</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="index.php" class="navbar-brand">
                    <h1 class="m-0 text-primary1 mt-3 "><span class="text-dark"><img class="Imagealignment"
                                src="img/icon.png">&nbsp; RE</span>IS</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.html" class="nav-item nav-link">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Services</a>
                        <a href="package.html" class="nav-item nav-link">Tour Packages</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="blog.html" class="dropdown-item active">Blog Grid</a>
                                <a href="single.html" class="dropdown-item">Blog Detail</a>
                                <a href="destination.html" class="dropdown-item">Destination</a>
                                <a href="guide.html" class="dropdown-item">Travel Guides</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid page-headerHotel">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 style="color:#f7c1c6 ;"  class="display-4 text-uppercase">Hotel Details</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a style="color:#f7c1c6 ;"  href="">Home</a></p>
                    <i style="color:#f7c1c6;" class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p style="color: #fff;"  class="m-0 text-uppercase">Hotel Details</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- intro start -->

    <div class="text-center mb-3 pb-3 pt-5">
        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Hotel Details</h6>
        <h1>Discover Deluxe Ocean View</h1>
    </div>

    <!-- intro end -->

    <!-- Room Details Start -->

    <div class="container_hoteldetail">
        <div class="list-container-hoteldetail">
            <div class="left-col">
                <p>200+ Options</p>
                <h1>Recommended Places Deluxe Ocean View</h1>
                <div class="house Villa">
                    <div class="house-img">
                        <img src="img_hotel/room-1.jpg">
                    </div>
                    <div class="house-info">
                        <p>Private Villa in Viet Nam</p>
                        <h3>Deluxe Queen Room With Ocean View</h3>
                        <p>1 Bedroom / 1 Bathroom / Wifi / Kitchen</p>
                        <i class="fa-solid fa-star fa-beat-fade"></i>
                        <i class="fa-solid fa-star fa-beat-fade"></i>
                        <i class="fa-solid fa-star fa-beat-fade"></i>
                        <i class="fa-solid fa-star fa-beat-fade"></i>
                        <i class="fa-solid fa-star-half-stroke fa-beat-fade"></i>
                        <div class="house-price">
                            <p>2 Guest</p>
                            <h4>$100 <span>/ day</span></h4>
                            <a href="payment.php" class="book-now-link">
                                <button class="btn btn-primary btn-block" style="width: 100%; font-size: 15px;"><b>Book
                                        Now</b></button>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="house House">
                    <div class="house-img">
                        <img src="img_hoteldetails/image-s1.png">
                    </div>
                    <div class="house-info">
                        <p>Private House in Thailand</p>
                        <h3>Deluxe King Room With Ocean View</h3>
                        <p>3 Bedroom / 2 Bathroom / 1 Pool / Wifi / Kitchen</p>
                        <i class="fa-solid fa-star fa-beat-fade"></i>
                        <i class="fa-solid fa-star fa-beat-fade"></i>
                        <i class="fa-solid fa-star fa-beat-fade"></i>
                        <i class="fa-solid fa-star fa-beat-fade"></i>
                        <i class="fa-solid fa-star fa-beat-fade"></i>
                        <div class="house-price">
                            <p>5 Guest</p>
                            <h4>$250 <span>/ day</span></h4>
                            <a href="payment.php" class="book-now-link">
                                <button class="btn btn-primary btn-block" style="width: 100%; font-size: 15px;"><b>Book
                                        Now</b></button>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="house Flat">
                    <div class="house-img">
                        <img src="img_hoteldetails/image-s2.png">
                    </div>
                    <div class="house-info">
                        <p>Private Flat in Combodia</p>
                        <h3>Oceanfront Suite</h3>
                        <p>2 Bedroom / 2 Bathroom / 1 Pool / Wifi / Kitchen</p>
                        <i class="fa-solid fa-star fa-beat-fade"></i>
                        <i class="fa-solid fa-star fa-beat-fade"></i>
                        <i class="fa-solid fa-star fa-beat-fade"></i>
                        <i class="fa-solid fa-star fa-beat-fade"></i>
                        <i class="fa-solid fa-star-half-stroke fa-beat-fade"></i>
                        <div class="house-price">
                            <p>3 Guest</p>
                            <h4>$125 <span>/ day</span></h4>
                            <a href="payment.php" class="book-now-link">
                                <button class="btn btn-primary btn-block" style="width: 100%; font-size: 15px;"><b>Book
                                        Now</b></button>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="house GuestSuit">
                    <div class="house-img">
                        <img src="img_hoteldetails/image-s3.png">
                    </div>
                    <div class="house-info">
                        <p>Private Guest Suit in Philippines</p>
                        <h3>Family Ocean View Room</h3>
                        <p>5 Bedroom / 4 Bathroom / 1 Pool / Wifi / Kitchen</p>
                        <i class="fa-solid fa-star fa-beat-fade"></i>
                        <i class="fa-solid fa-star fa-beat-fade"></i>
                        <i class="fa-solid fa-star fa-beat-fade"></i>
                        <i class="fa-solid fa-star fa-beat-fade"></i>
                        <i class="fa-solid fa-star-half-stroke fa-beat-fade"></i>
                        <div class="house-price">
                            <p>8 Guest</p>
                            <h4>$380 <span>/ day</span></h4>
                            <a href="payment.php" class="book-now-link">
                                <button class="btn btn-primary btn-block" style="width: 100%; font-size: 15px;"><b>Book
                                        Now</b></button>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="house Hotel">
                    <div class="house-img">
                        <img src="img_hoteldetails/image-s4.png">
                    </div>
                    <div class="house-info">
                        <p>Private Hotel in Philippines</p>
                        <h3>Ocean View Bungalow</h3>
                        <p>1 Bedroom / 1 Bathroom / Wifi / Kitchen</p>
                        <i class="fa-solid fa-star fa-beat-fade"></i>
                        <i class="fa-solid fa-star fa-beat-fade"></i>
                        <i class="fa-solid fa-star fa-beat-fade"></i>
                        <i class="fa-solid fa-star fa-beat-fade"></i>
                        <i class="fa-solid fa-star fa-beat-fade"></i>
                        <div class="house-price">
                            <p>2 Guest</p>
                            <h4>$170 <span>/ day</span></h4>
                            <a href="payment.php" class="book-now-link">
                                <button class="btn btn-primary btn-block" style="width: 100%; font-size: 15px;"><b>Book
                                        Now</b></button>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="house Hotel">
                    <div class="house-img">
                        <img src="img_hoteldetails/image-s5.png">
                    </div>
                    <div class="house-info">
                        <p>Private Hotel in Viet Nam</p>
                        <h3>Ocean View Penthouse</h3>
                        <p>3 Bedroom / 3 Bathroom / 1 Pool / Wifi / Kitchen</p>
                        <i class="fa-solid fa-star fa-beat-fade"></i>
                        <i class="fa-solid fa-star fa-beat-fade"></i>
                        <i class="fa-solid fa-star fa-beat-fade"></i>
                        <i class="fa-solid fa-star fa-beat-fade"></i>
                        <i class="fa-solid fa-star fa-beat-fade"></i>
                        <div class="house-price">
                            <p>3 Guest</p>
                            <h4>$230 <span>/ day</span></h4>
                            <a href="payment.php" class="book-now-link">
                                <button class="btn btn-primary btn-block" style="width: 100%; font-size: 15px;"><b>Book
                                        Now</b></button>
                            </a>
                        </div>
                    </div>

                </div>
                <div>

                    <?php
                    // Thực hiện truy vấn và lặp qua kết quả
                    //$query = mysqli_query($conn, $sql);
                    while ($hotel = mysqli_fetch_assoc($query)) {

                        ?>
                        <div class="house <?php echo $hotel['hotelType']; ?>">
                            <div class="house-img">
                                <img src="img_hoteldetails/<?php echo $hotel['hotelImage']; ?>" alt="">
                            </div>
                            <div class="house-info">
                                <p>Private
                                    <?php echo $hotel['hotelType']; ?> in Viet Nam
                                </p>
                                <h3>
                                    <?php echo $hotel['hotelName']; ?>
                                </h3>
                                <p>
                                    <?php echo $hotel['hotelDescription']; ?>
                                </p>
                                <i class="fa-solid fa-star fa-beat-fade"></i>
                                <i class="fa-solid fa-star fa-beat-fade"></i>
                                <i class="fa-solid fa-star fa-beat-fade"></i>
                                <i class="fa-solid fa-star fa-beat-fade"></i>
                                <i class="fa-solid fa-star fa-beat-fade"></i>
                                <div class="house-price">
                                    <p>
                                        <?php echo $hotel['hotelGuest']; ?>
                                    </p>
                                    <h4>
                                        <?php echo $hotel['hotelPrice']; ?><span>/ day</span>
                                    </h4>
                                    <a href="payment.php" class="book-now-link">
                                        <button class="btn btn-primary btn-block"
                                            style="width: 100%; font-size: 15px;"><b>Book Now</b></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="right-col ">
                <div class="sidebar border-top6">
                    <h2>Select Filters</h2>
                    <h3>Property Type</h3>
                    <div class="filter">
                        <input type="radio" name="propertyType" value="House" onchange="getSelectedValue()">
                        <p>House</p><br>
                    </div>
                    <div class="filter">
                        <input type="radio" name="propertyType" value="Hotel" onchange="getSelectedValue()">
                        <p>Hotel</p> <br>
                    </div>
                    <div class="filter">
                        <input type="radio" name="propertyType" value="Flat" onchange="getSelectedValue()">
                        <p>Flat</p>
                    </div>
                    <div class="filter">
                        <input type="radio" name="propertyType" value="Villa" onchange="getSelectedValue()">
                        <p>Villa</p>
                    </div>
                    <div class="filter">
                        <input type="radio" name="propertyType" value="GuestSuit" onchange="getSelectedValue()">
                        <p>Guest Suit</p>
                    </div>
                    <h3>Amenities</h3>
                    <div class="filter">
                        <input type="checkbox">
                        <p>Air Conditioning</p>
                    </div>
                    <div class="filter">
                        <input type="checkbox">
                        <p>Wifi</p>
                    </div>
                    <div class="filter">
                        <input type="checkbox">
                        <p>Gym</p>
                    </div>
                    <div class="filter">
                        <input type="checkbox">
                        <p>Pool</p>
                    </div>
                    <div class="filter">
                        <input type="checkbox">
                        <p>Kitchen</p>
                    </div>
                </div>
                <div class="sidebar-link">
                    <a href="#">View More</a>
                </div>
            </div>
            
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <script>
                function getSelectedValue() {
                    // Lấy ra radio button được chọn
                    var selectedRadioButton = document.querySelector('input[name="propertyType"]:checked');
                    if (selectedRadioButton) {
                        var selectedValue = selectedRadioButton.value;
                        // Lấy tất cả các phần tử có class "house"
                        var allHouses = document.querySelectorAll('.house');
                        // Lặp qua từng phần tử
                        allHouses.forEach(function(house) {
                            // Kiểm tra nếu phần tử có class tương ứng với giá trị đã chọn
                            if (house.classList.contains(selectedValue)) {
                                house.style.display = 'block'; // Hiển thị phần tử này
                            } else {
                                house.style.display = 'none'; // Ẩn phần tử này
                            }
                        });
                    }
                }
            </script>



        </div>

    </div>

    <div class="col-12">
        <nav aria-label="Page navigation">
            <ul class="pagination pagination-lg justify-content-center bg-white mb-0"
                style="padding: 30px; border-radius: 15px;">
                <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>






    <!-- Room Details End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white">RE</span>IS</h1>
                </a>
                <p>Your perfect destination for travel experiences! Exploring the world has never been easier with
                    enticing destinations and diverse experiences. Explore the world with Reis today!</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-2" href="https://twitter.com/reis_adventures"
                        target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2"
                        href="https://www.facebook.com/profile.php?id=61557250007525" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2"
                        href="https://www.linkedin.com/in/reis-adventures-458144300/" target="_blank"><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary btn-square"
                        href="https://www.instagram.com/reis_adventures2024?igsh=YTQwZjQ0NmI0OA%3D%3D&utm_source=qr"
                        target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Our Services</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Destination</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Packages</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Guides</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Testimonial</a>
                    <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Blog</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Usefull Links</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Destination</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Packages</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Guides</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Testimonial</a>
                    <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Blog</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Nguyen Huu Tho Street, District 7, Ho Chi Minh City</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+1922 3600</p>
                <p><i class="fa fa-envelope mr-2"></i>reis@gmail.com</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Newsletter</h6>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;"
                            placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
        style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">Copyright &copy; <a href="#">Domain</a>. All Rights Reserved.</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
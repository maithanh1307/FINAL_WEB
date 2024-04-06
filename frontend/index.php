<!--php--> 
<?php

    require_once '../admin/connectData.php';
    $sql = "SELECT * FROM addinformation";
    $query = mysqli_query($conn, $sql);



    // session_start();
    // if (isset($_SESSION['user'])){
    //    header('Location: ../frontend/register.php');
    //    die();
    // }

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
    <link
      rel="stylesheet"
      data-purpose="Layout StyleSheet"
      title="Web Awesome"

      href="/css/app-wa-8d95b745961f6b33ab3aa1b98a45291a.css?vsn=d"
    >

      <link
        rel="stylesheet"

        href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css"
      >

      <link
        rel="stylesheet"

        href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-solid.css"
      >

      <link
        rel="stylesheet"

        href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-regular.css"
      >

      <link
        rel="stylesheet"

        href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-light.css"
      >
    <!-- Favicon -->
    <link href="img/icon.png" rel="icon" >

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
</head>

<body class="">
    <!-- Topbar Start -->
    <div class="container-fluid pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p style="color: #F4538A"><i class="fa fa-envelope mr-2"></i><a href="mailto:reisadventurescontact@gmail.com" style="color: #F4538A; text-decoration: none;">reisadventurescontact@gmail.com</a></p>
                        <p class="text-body px-3">|</p>
                        <p style="color: #F4538A"><i class="fa fa-phone-alt mr-2"></i><a href="tel:+19223600" style="color: #F4538A; text-decoration: none;">+1922 3600</a></p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <button id="switch-mode">
                            <i style="font-size: 23px; color: #f10d5b;" class="fa-duotone fa-moon-stars"></i>
                        </button>
                        <a class="text-primary px-3" href="https://www.facebook.com/profile.php?id=61557250007525" target="_blank"  title="Visit the Reis Adventures fanpage.">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary px-3" href="https://twitter.com/reis_adventures" target="_blank"  title="Visit the Reis Adventures Twitter.">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-primary px-3" href="https://www.linkedin.com/in/reis-adventures-458144300/" target="_blank"  title="Visit the Reis Adventures Linkedin.">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-primary px-3" href="https://www.instagram.com/reis_adventures2024?igsh=YTQwZjQ0NmI0OA%3D%3D&utm_source=qr" target="_blank"  title="Visit the Reis Adventures Instagram.">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-primary pl-3" href="https://www.youtube.com/channel/UCzpbRAodCMdAfjL9tjk4Gfw" target="_blank"  title="Visit the Reis Adventures Youtube Channel.">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <div class="data1">
                            <i class="fa-duotone fa-right-to-bracket fa-fade"></i>
                            <a href="logout.php" class="btn2 btn-primary2 mt-1"><b>Logout /</b></a>
                        </div>
                        <div class="data2">
                            <i class="fa-solid fa-registered fa-fade"></i>
                            <a href="signup.php" class="btn2 btn-primary2 mt-1"><b>Register</b></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0  ">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 text-primary1 mt-3 "><span class="text-dark"><img class="Imagealignment" src="img/icon.png">&nbsp; RE</span>IS</h1>

                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Services</a>
                        <a href="package.html" class="nav-item nav-link">Tour Packages</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="blog.html" class="dropdown-item">Blog Grid</a>
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


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 style="color:#F4538A ;" class=" text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 style="color:#f7c1c6 ;" class="display-3  mb-md-4">Let's Discover The World Together</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 style="color:#F4538A;" class=" text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 style="color:#f7c1c6;" class="display-3 mb-md-4">Discover Amazing Places With Us</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-3.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 style="color:#F4538A ;" class=" text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 style="color:#f7c1c6 ;" class="display-3  mb-md-4">Uncover Nature's Beauty</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-4.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 style="color:#F4538A ;" class=" text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 style="color:#f7c1c6 ;" class="display-3 mb-md-4">Connect With Nature</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-5.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 style="color:#F4538A ;" class="text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 style="color:#f7c1c6 ;" class="display-3 mb-md-4">Explore Many Famous Destinations</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Booking Start -->
    <div class="container-fluid booking mt-5 pb-5">
        <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px;">
                <div class="row align-items-center" style="min-height: 60px;">
                    <div class="col-md-10">
                        <h4>Make Your Plan</h4>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Destination</option>
                                        <option value="1">Destination 1</option>
                                        <option value="2">Destination 1</option>
                                        <option value="3">Destination 1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Depart Date" data-target="#date1" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Return Date" data-target="#date2" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Duration</option>
                                        <option value="1">Duration 1</option>
                                        <option value="2">Duration 1</option>
                                        <option value="3">Duration 1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary btn-block" type="submit" style="height: 47px; margin-top: 30px;"><b>Submit</b></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h6>
                        <h1 class="mb-3">We Provide Best Tour Packages In Your Budget</h1>
                        <p>Embark on your dream vacation with confidence, knowing that you're getting the best tour packages at the most competitive prices. Let us handle the details while you focus on creating lasting memories. Discover the world without compromising on quality or budget with Reis-Adventures."</p>
                        <div class="row mb-4">
                            <div class="col-6">
                                <img class="img-fluid" src="img/about-1.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="img/about-2.jpg" alt="">
                            </div>
                        </div>
                        <a href="" class="btn btn-primary mt-1">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-money-check-alt text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Competitive Pricing</h5>
                            <p class="m-0">We guarantee that our room service prices will always have the best incentives for customers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-award text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Best Services</h5>
                            <p class="m-0">The best service we have is to introduce to you famous spots in the countries you want to travel to.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-globe text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Social Media</h5>
                            <p class="m-0">Our website is present on social media to help you contact us extremely easily and conveniently.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Destination Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Destination</h6>
                <h1>Explore Top Destination</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid5" src="img/vietnam1.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="vietnam.html">
                            <h5 class="text-white">Viet Nam</h5><!--hello-->
                            <div class="analytics">
                                <div class="data">
                                    <i class="fa-solid fa-heart-circle-check fa-beat"></i>
                                    <span class="number">1748 interests</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid5" src="img/cambodia1.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="cambodia.html">
                            <h5 class="text-white">Cambodia</h5>
                            <div class="analytics">
                                <div class="data">
                                    <i class="fa-solid fa-heart-circle-check fa-beat"></i>
                                    <span class="number">2789 interests</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid5" src="img/aoPhraNangBeach.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="thailand.html">
                            <h5 class="text-white">ThaiLand</h5>
                            <div class="analytics">
                                <div class="data">
                                    <i class="fa-solid fa-heart-circle-check fa-beat"></i>
                                    <span class="number">1789 interests</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid5" src="img/padarIsland.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="indonesia.html">
                            <h5 class="text-white">Indonesia</h5>
                            <div class="analytics">
                                <div class="data">
                                    <i class="fa-solid fa-heart-circle-check fa-beat"></i>
                                    <span class="number">1609 interests</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid5" src="img/xiengthongWat.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="laos.html">
                            <h5 class="text-white">Laos</h5>
                            <div class="analytics">
                                <div class="data">
                                    <i class="fa-solid fa-heart-circle-check fa-beat"></i>
                                    <span class="number">1209 interests</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid5" src="img/marinaBaySands.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="singapore.html">
                            <h5 class="text-white">Singapore</h5>
                            <div class="analytics">
                                <div class="data">
                                    <i class="fa-solid fa-heart-circle-check fa-beat"></i>
                                    <span class="number">1307 interests</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid5" src="img/myanmar_des.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="myanmar.html">
                            <h5 class="text-white">Myanmar</h5>
                            <div class="analytics">
                                <div class="data">
                                    <i class="fa-solid fa-heart-circle-check fa-beat"></i>
                                    <span class="number">1238 interests</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid5" src="img/malaysia_des.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="malaysia.html">
                            <h5 class="text-white">Malaysia</h5>
                            <div class="analytics">
                                <div class="data">
                                    <i class="fa-solid fa-heart-circle-check fa-beat"></i>
                                    <span class="number">1372 interests</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid5" src="img/philippines_des.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="philippines.html">
                            <h5 class="text-white">Philippines</h5>
                            <div class="analytics">
                                <div class="data">
                                    <i class="fa-solid fa-heart-circle-check fa-beat"></i>
                                    <span class="number">1832 interests</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <?php
                    // Thực hiện truy vấn và lặp qua kết quả
                    $query = mysqli_query($conn, $sql);
                    while ($destination = mysqli_fetch_assoc($query)) {?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="destination-item position-relative overflow-hidden mb-2">
                                <img class="img-fluid5" src="img/<?php echo $destination['destinationImage'];?>" alt="">
                                <a class="destination-overlay text-white text-decoration-none" href="#">
                                    <h5 class="text-white"><?php echo $destination['destinationName'];?></h5>
                                    <div class="analytics">
                                        <div class="data">
                                            <i class="fa-solid fa-heart-circle-check fa-beat"></i>
                                            <span class="number"><?php echo $destination['voteLike'];?></span>
                                        </div>
                                    </div>
                                </a> <!-- Thẻ anchor đóng -->
                            </div>
                        </div>
                <?php }?>

            </div>
        </div>
    </div>
    <!-- Destination Start -->


    <!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Services</h6>
                <h1>Tours & Travel Services</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <a href="guide.html">
                            <i class="fa-duotone fa-person-hiking fa-2xl mx-auto mb-4"></i>
                        </a>
                        <h5 class="mb-2 ">Travel Guide</h5>
                        <p class="m-0">Experts on a specific destination will give you extremely useful suggestions and advice. They help you plan your trip, book activities, accommodation and find your way around your destination.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <a href="ticket_demo.html">
                            <i class="fa-duotone fa-ticket fa-2xl mx-auto mb-4"></i>
                        </a>
                        <h5 class="mb-2">Ticket Booking</h5>
                        <p class="m-0">Allows you to buy tickets for events, transportation, and attractions in advance. This can help you save time and money as well as secure your spot at an event or famous place you visit.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <a href="hotelbooking.html">
                            <i class="fa-duotone fa-hotel fa-2xl mx-auto mb-4"></i>
                        </a>
                        <h5 class="mb-2">Hotel Booking</h5>
                        <p class="m-0">Allows you to research and book hotels online. This can be a convenient way for you to find the best deal on a hotel room right where you want to go, and especially if you're traveling to a popular location.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Packages Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages</h6>
                <h1>Perfect Tour Packages</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid1" src="img/VietNam.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa-solid fa-map-location-dot fa-fade text-primary mr-2"></i>VietNam</small>
                                <small class="m-0"><i class="fa-solid fa-calendar-heart fa-fade text-primary mr-2"></i>3 days</small>
                                <small class="m-0"><i class="fa-solid fa-people-dress-simple fa-fade fa-bounce text-primary mr-2"></i>2 People</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">Bach Dang Wharf</a>
                            <div class="border-top mt-4 pt-4 ">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.8 <small>(300)</small></h6>
                                    <h5 class="m-0">$200</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid1" src="img/thailand.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa-solid fa-map-location-dot fa-fade text-primary mr-2"></i>Thailand</small>
                                <small class="m-0"><i class="fa-solid fa-calendar-heart fa-fade text-primary mr-2"></i>4 days</small>
                                <small class="m-0"><i class="fa-solid fa-people-dress-simple fa-fade fa-bounce text-primary mr-2"></i>5 People</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">Wat Pho Pagoda (วัดโพธิ์)</a>
                            <div class="border-top mt-4 pt-4 ">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.3 <small>(150)</small></h6>
                                    <h5 class="m-0">$400</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid1" src="img/singapore.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa-solid fa-map-location-dot fa-fade text-primary mr-2"></i>Singapore</small>
                                <small class="m-0"><i class="fa-solid fa-calendar-heart fa-fade text-primary mr-2"></i>3 days</small>
                                <small class="m-0"><i class="fa-solid fa-people-dress-simple fa-fade fa-bounce text-primary mr-2"></i>1 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">Merlion Park</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(200)</small></h6>
                                    <h5 class="m-0">$350</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid1" src="img/indo.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa-solid fa-map-location-dot fa-fade text-primary mr-2"></i>Indonesia</small>
                                <small class="m-0"><i class="fa-solid fa-calendar-heart fa-fade text-primary mr-2"></i>4 days</small>
                                <small class="m-0"><i class="fa-solid fa-people-group fa-fade text-primary mr-2"></i>1-3 People</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">Jatiluwih Rice Terrace</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(300)</small></h6>
                                    <h5 class="m-0">$400</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid1" src="img/campuchia.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa-solid fa-map-location-dot fa-fade text-primary mr-2"></i>Cambodia</small>
                                <small class="m-0"><i class="fa-solid fa-calendar-heart fa-fade text-primary mr-2"></i>2 days</small>
                                <small class="m-0"><i class="fa-solid fa-people-dress-simple fa-fade fa-bounce text-primary mr-2"></i>2 People</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">Angkor Wat (អង្គរវត្ត)</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.3 <small>(180)</small></h6>
                                    <h5 class="m-0">$300</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid1" src="img/lao.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa-solid fa-map-location-dot fa-fade text-primary mr-2"></i>Laos</small>
                                <small class="m-0"><i class="fa-solid fa-calendar-heart fa-fade text-primary mr-2"></i>5 days</small>
                                <small class="m-0"><i class="fa-solid fa-person-simple fa-fade text-primary mr-2"></i>2-4 People</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">Kuang Si Waterfall</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.7 <small>(450)</small></h6>
                                    <h5 class="m-0">$200</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Packages End -->
    
    <!--  popular -->
    <div class="container-fluid py-5">
        <div class="container pt-3 pb-3 mt-2 mb-2">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Destination</h6>
                <h1>Popular festivals in Southeast Asia</h1>
            </div>
            <div class="row">
                <div class="container1 pt-2 pb-3">
                    <div class="card__container1">
                       <article class="card__article1">
                          <img src="img/ChiangMai.jpg" alt="image" class="img-fluid5">
            
                          <div class="card__data1">
                            <h4 class="m-0 "><i class="fa fa-map-marker-alt text-primary mt-2"></i>Thailand</h4>
                            <h2 class="card__title1">ChiangMai</h2>
                            <a href="ChiangMai_blog1.html" class="card__button1">Read More</a>
                          </div>
                       </article>
            
                       <article class="card__article1">
                          <img src="img/Thaipusam4.jpg" alt="image" class="img-fluid5">
            
                          <div class="card__data1">
                            <h4 class="m-0 "><i class="fa fa-map-marker-alt text-primary mt-2"></i>Singapore</h4>
                            <h2 class="card__title1">Thaipusam</h2>
                            <a href="#" class="card__button1">Read More</a>
                          </div>
                       </article>
            
                       <article class="card__article1">
                        <img src="img/Boun Suang Heua.jpg" alt="image" class="img-fluid5">
            
                        <div class="card__data1">
                            <h4 class="m-0 "><i class="fa fa-map-marker-alt text-primary mt-2"></i>Laos</h4>
                            <h2 class="card__title1">Boun Suang Heua</h2>
                           <a href="#" class="card__button1">Read More</a>
                        </div>
                        </article>
            
                        <article class="card__article1">
                         <img src="img/Thadingyut-1.jpg" alt="image" class="img-fluid5">
            
                        <div class="card__data1">
                           <h4 class="m-0 "><i class="fa fa-map-marker-alt text-primary mt-2"></i>Myanmar</h4>
                           <h2 class="card__title1">Thadingyut</h2>
                           <a href="#" class="card__button1">Read More</a>
                        </div>
                     </article>
            
                     <article class="card__article1">
                        <img src="img/Bom Chaul Chnam.jpg" alt="image" class="img-fluid5">
            
                        <div class="card__data1">
                            <h4 class="m-0 "><i class="fa fa-map-marker-alt text-primary mt-2"></i>Campuchia</h4>
                            <h2 class="card__title1">Bom Chaul</h2>
                            <a href="#" class="card__button1">Read More</a>
                        </div>
                     </article>

                     <article class="card__article1">
                        <img src="img/Ati-Atihan.jpg" alt="image" class="img-fluid5">
            
                        <div class="card__data1">
                           <h4 class="m-0 "><i class="fa fa-map-marker-alt text-primary mt-2"></i>Philippines</h4>
                           <h2 class="card__title1">Ati-Atihan</h2>
                           <a href="#" class="card__button1">Read More</a>
                        </div>
                     </article>
                    </div>
                 </div>
            </div>
        </div>
    </div>

<!--  popular -->


    <!-- Registration Start -->
    <div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Mega Offer</h6>
                        <h1 class="text-white"><span class="text-primary">30% OFF</span> For Honeymoon</h1>
                    </div>
                    <p class="text-white">Save 30% on your dream honeymoon! From captivating beaches to thrilling adventures, discover the perfect destination without breaking the bank. 
                        Book now and create unforgettable memories together!</p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Benefit from substantial savings.</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Choose from diverse destinations.</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Create unforgettable honeymoon experiences.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Guides</h6>
                <h1>Our Travel Guides</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid3 w-100" src="img/team-1.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href="https://twitter.com/Ralph_Leng03"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="https://twitter.com/Ralph_Leng03"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="https://www.instagram.com/ralphleng/"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="https://www.instagram.com/ralphleng/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Ralph Leng</h5>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p class="language"><i class="fa-duotone fa-language fa-lg mr-1"></i>Language: English, Spanish</p>
                            <p style="color: #f10d5b; font-size: 19px; text-align: center;"><i class="fa-duotone fa-pen-nib fa-lg mr-2"></i>2423 Reviews</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid3 w-100" src="img/team-2.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href="https://twitter.com/nickgalitzine"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="https://twitter.com/nickgalitzine"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="https://www.instagram.com/nicholasgalitzine/"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="https://www.instagram.com/nicholasgalitzine/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Nicholas Galitzine</h5>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p class="language"><i class="fa-duotone fa-language fa-lg mr-1"></i>Language: French, Russian</p>
                            <p style="color: #f10d5b; font-size: 19px; text-align: center;"><i class="fa-duotone fa-pen-nib fa-lg mr-2"></i>2300 Reviews</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid3 w-100" src="img/team-3.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href="https://www.youtube.com/@camhangle"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="https://www.youtube.com/@camhangle"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="https://www.instagram.com/l.c.hang_/"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="https://www.instagram.com/l.c.hang_/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Lee Hang</h5>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p class="language"><i class="fa-duotone fa-language fa-lg mr-1"></i>Language: Vietnamese</p>
                            <p style="color: #f10d5b; font-size: 19px; text-align: center;"><i class="fa-duotone fa-pen-nib fa-lg mr-2"></i>2470 Reviews</p>                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid3 w-100" src="img/team-4.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href="https://www.instagram.com/petermkle/"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="https://www.instagram.com/petermkle/"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="https://www.instagram.com/petermkle/"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="https://www.instagram.com/petermkle/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Peter Le</h5>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p class="language"><i class="fa-duotone fa-language fa-lg mr-1"></i>Language: Korean, Chinese</p>
                            <p style="color: #f10d5b; font-size: 19px; text-align: center;"><i class="fa-duotone fa-pen-nib fa-lg mr-2"></i>2570 Reviews</p>                           </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h6>
                <h1>What Say Our Clients</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="text-center pb-4">
                    <img class="feed-back img-fluid mx-auto" src="img/testimonial-1.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">
                            The travel and tour website is very convenient and user-friendly.
                        </p>
                        <h5 class="text-truncate">Lucas Bergvall</h5>
                        <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                        </div>
                        
                        <span>Blogger & Influencer</span>
                        <div class="analytics">
                            <div class="data">
                                <i class="far fa-heart"></i>
                                <span class="number">60k</span>
                            </div>
                            <div class="data">
                                <i class="far fa-comments"></i>
                                <span class="number">20k</span>
                            </div>
                            <div class="data">
                                <i class="fas fa-share"></i>
                                <span class="number">12k</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <img class="feed-back img-fluid mx-auto" src="img/testimonial-2.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">I'm impressed with the detailed tour information provided.
                        </p>
                        <h5 class="text-truncate">Leen Dong</h5>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <span>Doctor</span>
                        <div class="analytics">
                            <div class="data">
                                <i class="far fa-heart"></i>
                                <span class="number">58k</span>
                            </div>
                            <div class="data">
                                <i class="far fa-comments"></i>
                                <span class="number">22k</span>
                            </div>
                            <div class="data">
                                <i class="fas fa-share"></i>
                                <span class="number">19k</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <img class="feed-back img-fluid mx-auto" src="img/testimonial-3.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">The travel and tour website outstanding customer assistance.
                        </p>
                        <h5 class="text-truncate">Aiden Kroll</h5>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span>Teacher</span>
                        <div class="analytics">
                            <div class="data">
                                <i class="far fa-heart"></i>
                                <span class="number">77k</span>
                            </div>
                            <div class="data">
                                <i class="far fa-comments"></i>
                                <span class="number">17k</span>
                            </div>
                            <div class="data">
                                <i class="fas fa-share"></i>
                                <span class="number">9k</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <img class="feed-back img-fluid mx-auto" src="img/testimonial-4.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">Tour website is remarkable, boasting intuitive features.
                        </p>
                        <h5 class="text-truncate">Johnny Huynh</h5>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <span>Dentist</span>
                        <div class="analytics">
                            <div class="data">
                                <i class="far fa-heart"></i>
                                <span class="number">89k</span>
                            </div>
                            <div class="data">
                                <i class="far fa-comments"></i>
                                <span class="number">33k</span>
                            </div>
                            <div class="data">
                                <i class="fas fa-share"></i>
                                <span class="number">9k</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white">RE</span>IS</h1>
                </a>
                <p>Your perfect destination for travel experiences! Exploring the world has never been easier with enticing destinations and diverse experiences. Explore the world with Reis today!</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-2" href="https://twitter.com/reis_adventures" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="https://www.facebook.com/profile.php?id=61557250007525" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="https://www.linkedin.com/in/reis-adventures-458144300/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="https://www.instagram.com/reis_adventures2024?igsh=YTQwZjQ0NmI0OA%3D%3D&utm_source=qr" target="_blank"><i class="fab fa-instagram"></i></a>
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
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
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
    <script src="js/dark.js"></script>
    
</body>

</html>
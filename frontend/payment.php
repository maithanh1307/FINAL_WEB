<?php
    require_once '../admin/connectData.php';
    
    $sql = "SELECT * FROM planning order by idPLan desc";
    $query = mysqli_query($conn, $sql);

    $sql1 = "SELECT * FROM addhotel order by hotelID desc";
    $query1 = mysqli_query($conn, $sql1);

    // them 
    if(isset($_POST['sbm'])) {
        // echo "Test1<br>";
        $title = $_POST['title'];
        $lastName = $_POST['lastName'];
        $firstName = $_POST['firstName'];
        $dateOfBirth = $_POST['dateOfBirth'];
        $nationality = $_POST['nationality'];
        //$date = date("Y/m/d"); //thay sua

        //echo "Test3<br>";
        $sql2 = "INSERT INTO traveler (title, lastName, firstName, dateOfBirth, nationality) 
        VALUES ('$title', '$lastName', '$firstName', '$dateOfBirth', '$nationality')"; //thay sua them thuoc tính date
        //echo "Test4<br>"; //met moi 
        //thay them try catch
        try 
        {
            $query2 = mysqli_query($conn, $sql2);
        }
        catch(Exception $e)
        {
            var_dump($e);
        }
        //echo "Test5<br>";
        //move_uploaded_file($destinationImage_tmp, 'img_topdestination/'. $destinationImage);
        //echo "Test6<br>";
        //header('Location: buttons.php');
        //echo "Test7<br>";
        //die();
    }
    // xoa 
    
    //else echo "Test2<br>";

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
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i><a href="mailto:reisadventurescontact@gmail.com" style="color: #F4538A; text-decoration: none;">reisadventurescontact@gmail.com</a></p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i><a href="tel:+19223600" style="color: #F4538A; text-decoration: none;">+1922 3600</a></p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
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
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 text-primary1 mt-3 "><span class="text-dark"><img class="Imagealignment" src="img/icon.png">&nbsp; RE</span>IS</h1>

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
                                <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                <a href="single.html" class="dropdown-item">Blog Detail</a>
                                <a href="destination.html" class="dropdown-item active">Destination</a>
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
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 style="color:#f7c1c6 ;"  class="display-4 text-uppercase">Payment</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a style="color:#f7c1c6 ;" href="index.html">Home</a></p>
                    <i style="color:#f7c1c6;" class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p style="color: #fff;" class="m-0 text-uppercase">Payment</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Payment Start -->
    <div class="container">
        <h4 style="margin: 10px 0;font-size: 30px; padding-top: 25px;">Your Booking</h4>
        <p style="font-size: 20px;color: #000;">Fill in your details and review your booking.</p>
        <form method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-8">
                    <!-- <div class="block1">
                        <div class="row">
                            <div class="col-lg-2">
                                <img importance="low" loading="lazy"
                                    src="https://d1785e74lyxkqq.cloudfront.net/_next/static/v2/3/334a43706b543daaa27995a60d895f2a.png"
                                    decoding="async" style="object-fit: fill; object-position: 50% 50%;">
                            </div>
                            <div class="col-lg-10">
                                <h5>Log In or register to enjoy this member-only benefit</h5>
                                <div class="block1-1-1">
                                    <img importance="low" loading="lazy"
                                        src="https://d1785e74lyxkqq.cloudfront.net/_next/static/v2/5/513ab8104dcf3ae7a42419cba432351d.svg"
                                        decoding="async" width="32" height="32" class="r-1kb76zh"
                                        style="object-fit: fill; object-position: 50% 50%;">
                                    <p>Book faster and easier with Passenger Quick Pick</p>
                                </h5>
                                </div>
                                <div class="block1-1-2">
                                    <a href="register.html">Log In or Register</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <h4 style="font-size: 30px;margin: 10px 0;">Contact Details</h4>
                    <div class="block1-1">
                        <div class="row">
                            <div class="col-lg-8 block1-1-3">
                                <h5>Contact Details (for E-ticket/Voucher)</h5>
                            </div>
                            <div class="col-lg-4">
                                <div class="luu">
                                    <a href="#">Save</a>
                                </div>
                            </div>

                        </div>
                        <hr>
                        <div class="row block2-1-1">
                            <div class="col-lg-6">
                                <label>First / Given Name & Middle Name(ex: Nguyen)*</label><br>
                                <input type="text" id="username" name="username">
                                <label>As on ID card(without punctuation)</label>
                            </div>
                            <div class="col-lg-6">
                                <label>Family Name & Last Name(ex: Thi Ngoc Anh)*</label><br>
                                <input type="text" id="username" name="username">
                                <label>As on ID card(without punctuation)</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 block2-1-2">
                                <label>Mobile Number*</label><br>
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <select name="cars" id="cars">
                                            <option value="Afghanistan (+93)">+93</option>
                                            <option value="Afghanistan (+93)">+84</option>
                                            <option value="Afghanistan (+93)">+633</option>
                                            <option value="Afghanistan (+93)">+355</option>
                                        </select>
                                        <input type="text" id="phone" name="phone">
                                        <label>e.g. +84 901234567 for Country Code (+84) and Mobile No. 901234567 

                                        </label>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 block2-1-3">
                                <label>Email*</label><br>
                                <input type="email" id="email" name="email">
                                <label>e.g. email@example.com</label>
                            </div>
                        </div>

                    </div> -->
                    <h4 style="font-size: 30px;margin: 10px 0;">Traveler Details</h4>
                    <div class="block1-2">
                        <div class="row">
                            <div class="col-lg-8 block1-2-3">
                                <h5>Adult 1</h5>
                            </div>
                            <div class="col-lg-4">
                                <div class="luu">
                                    <button name="sbm" class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </div>
                        <div class="block1-2-1">
                            <div class="block1-3">
                                <i class="fa-solid fa-triangle-exclamation fa-bounce" style="color: #f10e5a; padding-top: 5px;"></i>
                                <p>Important:</p>
                            </div>
                            <div class="block1-4">
                                <h5>Make sure that the passenger's name is exactly as written in the government issued ID/Passport/Driving License. 
                                    Avoid any mistake, because some airlines don't allow name corrections after booking.</h5>
                            </div>
                            <div class="block1-5">
                                <a href="#">Learn More</a>
                            </div>
                        </div>
                        <div class="block2-1">
                            <label>Title*</label><br>
                            <select name="title" id="cars">
                                <option value=""></option>
                                <option value="ong">Mr.</option>
                                <option value="ba">Mrs.</option>
                                <option value="co">Ms.</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 block2-1-4">
                                <label>Family Name / Last Name (e.g. Nguyen)*</label><br>
                                <input type="text" id="username" name="lastName">
                                <!-- <label>As on ID card(without punctuation)</label> -->
                            </div>
                            <div class="col-lg-6 block2-1-5">
                                <label>First / Given Name & Middle Name (e.g. Thi Ngoc Anh)*</label><br>
                                <input type="text" id="username" name="firstName">
                                <!-- <label>As on ID card(without punctuation)</label> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 block2-1-5">
                                <label style="font-size: 18px;padding: 5px 0;">Date of Birth* (e.g. date-month-year)</label><br>
                                <input type="text" id="birth" name="dateOfBirth">
                                <!-- <div class="row">
                                    <div class="col-lg-2 block2-1-6">
                                        <select name="dateOfBirth" id="cars">
                                            <option value=""></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>  
                                        </select>
                                    </div>
                                    <div class="col-lg-4 block2-1-7">
                                        <select name="dateOfBirth" id="cars">
                                            <option value=""></option>
                                            <option value="thang1">January</option>
                                            <option value="thang2">February</option>
                                            <option value="thang3">March</option>
                                            <option value="thang4">April</option>
                                            <option value="thang5">May</option>
                                            <option value="thang6">June</option>
                                            <option value="thang7">July</option>
                                            <option value="thang8">August</option>
                                            <option value="thang9">September</option>
                                            <option value="thang10">October</option>
                                            <option value="thang11">November</option>
                                            <option value="thang12">December</option>

                                        </select>
                                    </div>
                                    <div class="col-lg-1 block2-1-6">
                                        <select name="dateOfBirth" id="cars">
                                            <option value=""></option>
                                            <option value="2024">2024</option>
                                            <option value="2000">2000</option>
                                            <option value="1999">1999</option>
                                            <option value="1980">1980</option>
                                        </select>
                                    </div>
                                    <label style="font-size: 18px;padding: 5px 0;margin: 0 15px;">Adult Passenger (Age 12 and older)</label>
                                </div> -->
                            </div>
                            <div class="col-lg-6 block2-1-8">
                                <label style="font-size: 18px;padding: 5px 0;">Nationality*</label><br>
                                <select name="nationality" id="quoctich">
                                    <option value=""></option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Thai Lan">Thai Lan</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cambodia">Myanmar</option>
                                    <option value="Cambodia">Phillipines</option>
                                    <option value="Cambodia">Indonesia</option>
                                    <option value="Cambodia">Laos</option>
                                    <option value="Cambodia">Singapore</option>
                                    <option value="Cambodia">Malaysia</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="tieptuc btn btn-primary mt-1">
                        <a href="#"><b>Book now</b></a>
                    </div>
                    
                </div>
            

                <?php $query = mysqli_query($conn, $sql); 
                $ticket = mysqli_fetch_assoc($query);?>
                <div class="col-lg-4">
                    <div class="khoi-phai">
                        <div class="row">
                            <div class="block2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" data-id="IcProductFlightFill">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.24315 18.6216C4.14242 19.2724 4.72762 19.8576 5.37843 19.7569L6.5885 22.177C6.82109 22.6422 7.37143 22.8515 7.85432 22.6583L8.06676 22.5733C8.91113 22.2356 9.42133 21.3707 9.30853 20.4683L9 18L13.2857 14.4286L18.5103 22.2655C18.7901 22.6851 19.3385 22.8308 19.7896 22.6052L20.2243 22.3879C20.6694 22.1653 20.8831 21.6494 20.7257 21.1772L19 16L19.7929 15.2071C20.1834 14.8166 20.1834 14.1834 19.7929 13.7929L19.2071 13.2071C18.8837 12.8838 18.394 12.8282 18.0134 13.0403L17.1493 10.4478L21.8613 4.85221C22.5053 4.08744 22.457 2.95701 21.75 2.25003C21.043 1.54305 19.9126 1.49469 19.1478 2.13871L13.5522 6.85077L10.9597 5.9866C11.1719 5.60602 11.1163 5.11629 10.7929 4.79292L10.2071 4.20713C9.81658 3.81661 9.18342 3.81661 8.79289 4.20713L8 5.00003L2.82279 3.27429C2.35068 3.11692 1.83469 3.33065 1.61213 3.77576L1.39479 4.21044C1.16925 4.66152 1.3149 5.20996 1.73452 5.48971L9.57143 10.7143L6 15L3.53173 14.6915C2.62934 14.5787 1.76445 15.0889 1.4267 15.9333L1.34173 16.1457C1.14857 16.6286 1.35781 17.1789 1.82299 17.4115L4.24315 18.6216Z"
                                        fill="#30C5F7"></path>
                                </svg>
                                <p style="margin:0 0 0 5px;font-size: 20px;color: #000;" name="destination">TP HCM → <?php echo $ticket['destination'];?></p>
                            </div>
                            <!-- <div class="col-lg-4 block2-2-1">
                                <a href="#">Details</a>
                            </div> -->
                        </div>
                        <hr>
                        <h5 name="dateDepart">Departure <?php echo $ticket['dateDepart'];?></h5>
                        <div class="block3">
                            <div class="row">
                                <div class="col-lg-2">
                                    <img importance="low" loading="lazy"
                                        src="https://ik.imagekit.io/tvlk/image/imageResource/2021/03/08/1615183128719-eb20dcaed13e5b74629b222345995b7a.png?tr=h-20,q-75"
                                        srcset="https://ik.imagekit.io/tvlk/image/imageResource/2021/03/08/1615183128719-eb20dcaed13e5b74629b222345995b7a.png?tr=h-20,q-75 1x, https://ik.imagekit.io/tvlk/image/imageResource/2021/03/08/1615183128719-eb20dcaed13e5b74629b222345995b7a.png?tr=dpr-2,h-20,q-75 2x, https://ik.imagekit.io/tvlk/image/imageResource/2021/03/08/1615183128719-eb20dcaed13e5b74629b222345995b7a.png?tr=dpr-3,h-20,q-75 3x"
                                        decoding="async" height="20" style="object-fit: fill; object-position: 50% 50%;">
                                </div>
                                <div class="col-lg-12 block2-2-2">
                                    <p>Vietravel Airlines</p>
                                    <label >Economy </label>
                                </div>
                            </div>
                        </div>
                        <div class="block4">
                            <div class="block4-1">
                                <h5 name="duration"><?php echo $ticket['duration'];?></h5>
                                <label>SGN</label>
                            </div>
                            <div class="block4-2">
                                <i class="fa-regular fa-circle"></i>
                                <i class="fa-solid fa-minus"></i>
                                <i class="fa-solid fa-circle"></i>
                            </div>
                            <div class="block4-3">
                                <h5 name="duration"><?php echo $ticket['duration'];?></h5>
                                <label>BKK</label>
                            </div>
                        </div>
                        <div class="block5">
                            <div class="block5-1">
                                <img src="https://d1785e74lyxkqq.cloudfront.net/_next/static/v2/0/0451207408e414bb8a1664153973b3c8.svg"
                                    width="12" height="12" style="margin-right: 8px; flex-shrink: 0;">
                                <p>Tickets can be completed</p>
                            </div>
                            <div class="block5-2">
                                <img src="https://d1785e74lyxkqq.cloudfront.net/_next/static/v2/0/0451207408e414bb8a1664153973b3c8.svg"
                                    width="12" height="12" style="margin-right: 8px; flex-shrink: 0;">
                                <p>Flight rescheduling applies</p>
                            </div>
                        </div>
                        <hr>

                        <?php $query1 = mysqli_query($conn, $sql1); 
                        $hotel = mysqli_fetch_assoc($query1);?>
                        <h5 style="color: #ff0066;"><b><?php echo $hotel['hotelName'];?></b></h5>
                        <!-- <div class="block3">
                            <div class="row">
                                <div class="col-lg-2">
                                    <img importance="low" loading="lazy"
                                        src="https://ik.imagekit.io/tvlk/image/imageResource/2022/11/29/1669692919958-81f0c812fcaa9551ef47319232a413c0.png?tr=h-20,q-75" 
                                        srcset="https://ik.imagekit.io/tvlk/image/imageResource/2022/11/29/1669692919958-81f0c812fcaa9551ef47319232a413c0.png?tr=h-20,q-75 1x, https://ik.imagekit.io/tvlk/image/imageResource/2022/11/29/1669692919958-81f0c812fcaa9551ef47319232a413c0.png?tr=dpr-2,h-20,q-75 2x, https://ik.imagekit.io/tvlk/image/imageResource/2022/11/29/1669692919958-81f0c812fcaa9551ef47319232a413c0.png?tr=dpr-3,h-20,q-75 3x" 
                                        decoding="async" height="20" style="object-fit: fill; object-position: 50% 50%;">
                                </div>
                                <div class="col-lg-8 block2-2-2">
                                    <p>VietJet Air</p>
                                    <label >Promo </label>
                                </div>
                            </div>
                        </div> -->
                        <div>
                            <img style='width:200px;' src="img_hoteldetails/<?php echo $hotel['hotelImage'];?>">
                        </div>
                        <div>
                            <!-- <div class="block4-1">
                                <h5>11:30</h5>
                                <label>BKK</label>
                            </div> -->
                            <div class="block4-2">
                                <h5 style="color: #ff0066;" class='mt-3'><b><?php echo $hotel['hotelPrice'];?></b></h5>
                            </div>
                            <!-- <div class="block4-3">
                                <h5>13:00</h5>
                                <label>SGN</label>
                            </div> -->
                        </div>
                        <div class="block5">
                            <div class="block5-1">
                                <img src="https://d1785e74lyxkqq.cloudfront.net/_next/static/v2/0/0451207408e414bb8a1664153973b3c8.svg"
                                    width="12" height="12" style="margin-right: 8px; flex-shrink: 0;">
                                <p>Room can be completed</p>
                            </div>
                            <!-- <div class="block5-2">
                                <img src="https://d1785e74lyxkqq.cloudfront.net/_next/static/v2/0/0451207408e414bb8a1664153973b3c8.svg"
                                    width="12" height="12" style="margin-right: 8px; flex-shrink: 0;">
                                <p>Flight rescheduling applies</p>
                            </div> -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </form>
    </div>
    <!-- Payment Start -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white">RE</span>IS</h1>
                </a>
                <p>Sed ipsum clita tempor ipsum ipsum amet sit ipsum lorem amet labore rebum lorem ipsum dolor. No sed vero lorem dolor dolor</p>
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

</body>

</html>
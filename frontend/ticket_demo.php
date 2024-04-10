<?php
    require_once '../admin/connectData.php';
    $sql = "SELECT * FROM planning order by idPlan desc";
    $query = mysqli_query($conn, $sql);
    if(isset($_POST['sbm'])) {
        // $destination = $_POST['destination'];
        // $dateDepart = $_POST['dateDepart'];
        // $dateReturn = $_POST['dateReturn'];
        // $duration = $_POST['duration'];
        // $sql = "SELECT * FROM planning where destination=?, duration=?, dateDepart=?, dateReturn=?";
        // $stmt_check->bind_param("ssss", $destination, $dateDepart, $dateReturn, $duration);
        // $stmt_check->execute();
        // $result = $stmt_check->get_result();
        header('location: payment.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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


    <!-- Header Start -->
    <div class="container-fluid page-headerBT">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 style="color:#f7c1c6 ;" class="display-4 text-uppercase">Ticket</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a style="color:#f7c1c6 ;"  href="index.html">Home</a></p>
                    <i style="color:#f7c1c6;" class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p style="color: #fff;" class="m-0 text-uppercase">Blog Detail</p>
                </div>
            </div>
        </div>
    </div>

    <!--demo ticket-->
    <div class=" container mt-3">
        <form method="post">
            <input  style="padding:3px; "  type="text" placeholder="search" name="search">
            <button class=" btn btn-sm btn-outline-primary ml-2" style="padding:3px;" name="submit">Search</button>
        </form>
    </div>
    

    
    <div class="container">
       
        <?php
            include('searchData.php');
            // Thực hiện truy vấn và lặp qua kết quả
            $query = mysqli_query($conn, $sql);
            while ($ticket = mysqli_fetch_assoc($query)) {
                if ($ticket['destination'] === 'Viet Nam') {?> 
                    <form method="POST" enctype="multipart/form-data">
                        <div class="list-group pt-3 pb-3">
                            <div class="list-group-item bg-white">
                                <div class="row">
                                    <div class=" col-lg-3"><img src="img/VietNam.jpg" class="img-fluidBT"></div>
                                    <div class="row col-lg-4 col-md-7 col-sm-12 ml-auto mr-auto">
                                        <p class="ml-4">
                                            <i class="fas fa-map-marker-alt fa-lg" style="color: #ff0066;"></i><b><?php echo $ticket['destination']; ?></b>
                                        </p>
                                        <p><i class="fas fa-clock fa-lg fa-shake fa-lg ml-4 mr-1 mt-1" style="color: #ff0066;"></i><b><?php echo $ticket['duration']; ?></b></p>
                                        <p>
                                            <i class="fas fa-calendar-alt fa-lg ml-4 mr-1" style="color: #ff0066;"></i><b><?php echo $ticket['dateDepart']; ?></b>
                                            <i class="fa-duotone fa-horizontal-rule fa-md" style="color: #ff0066;"></i>
                                            <i class="fas fa-calendar-alt fa-lg mr-1" style="color: #ff0066;"></i><b><?php echo $ticket['dateReturn']; ?></b>
                                        </p>
                                        <div class="row">
                                            <div class="row ml-0 pb-2 mr-2 ml-4 mr-2 benthanh_detail" style="width: 100px; height: 30px;">
                                                <i class="fas fa-utensils fa-sm" style="color: #ff0066;"><i class="fad fa-tree-palm fa-md ml-2" style="--fa-primary-color: #ff0066; --fa-secondary-color: #ff0066;"></i>
                                            </i>
                                            </div>
                                            <div class="row ml-0 pt-2 pb-2 mr-2 benthanh_detail" style="width: 100px; height: 30px;">
                                                <i class="fas fa-users ml-3" style="color: #ff0066;"></i>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 ml-auto mr-auto">
                                        <div class=""><p class="fontPrice headcomment2"><i class="fas fa-tags fa-lg tagPrice mr-auto ml-auto" style="color: #ff0066;"></i>$80/<i class="fas fa-user fa-lg" style="color: #ff0066;"></i>
                                            </p> </div>
                                        <!-- <a href="payment.php" class="book-now-link1"> -->
                                        <button name="sbm" class="btn btn-primary btn-block tagPrice mr-auto ml-auto " type="submit" style="width: 50%; font-size: 15px;"><b>Book Now</b></button>
                                        <!-- </a> -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                <?php } else if ($ticket['destination'] === 'Cambodia') { ?>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="list-group pt-3 pb-3">
                            <div class="list-group-item bg-white">
                                <div class="row">
                                    <div class=" col-lg-3"><img src="img/campuchia.jpg" class="img-fluidBT"></div>
                                    <div class="row col-lg-4 col-md-7 col-sm-12 ml-auto mr-auto">
                                        <p class="ml-4">
                                            <i class="fas fa-map-marker-alt fa-lg" style="color: #ff0066;"></i><b><?php echo $ticket['destination']; ?></b>
                                        </p>
                                        <p><i class="fas fa-clock fa-lg fa-shake fa-lg ml-4 mr-1 mt-1" style="color: #ff0066;"></i><b><?php echo $ticket['duration']; ?></b></p>
                                        <p>
                                            <i class="fas fa-calendar-alt fa-lg ml-4 mr-1" style="color: #ff0066;"></i><b><?php echo $ticket['dateDepart']; ?></b>
                                            <i class="fa-duotone fa-horizontal-rule fa-md" style="color: #ff0066;"></i>
                                            <i class="fas fa-calendar-alt fa-lg mr-1" style="color: #ff0066;"></i><b><?php echo $ticket['dateReturn']; ?></b>
                                        </p>
                                        <div class="row">
                                            <div class="row ml-0 pb-2 mr-2 ml-4 mr-2 benthanh_detail" style="width: 100px; height: 30px;">
                                                <i class="fas fa-utensils fa-sm" style="color: #ff0066;"><i class="fad fa-tree-palm fa-md ml-2" style="--fa-primary-color: #ff0066; --fa-secondary-color: #ff0066;"></i>
                                            </i>
                                            </div>
                                            <div class="row ml-0 pt-2 pb-2 mr-2 benthanh_detail" style="width: 100px; height: 30px;">
                                                <i class="fas fa-users ml-3" style="color: #ff0066;"></i>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 ml-auto mr-auto">
                                        <div class=""><p class="fontPrice headcomment2"><i class="fas fa-tags fa-lg tagPrice mr-auto ml-auto" style="color: #ff0066;"></i>$100/<i class="fas fa-user fa-lg" style="color: #ff0066;"></i>
                                            </p> </div>
                                        <!-- <a href="#" class="book-now-link1"> -->
                                        <button name="sbm" class="btn btn-primary btn-block tagPrice mr-auto ml-auto" style="width: 50%; font-size: 15px;"><b>Book Now</b></button>
                                        <!-- </a> -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>

                <?php } else if ($ticket['destination'] === 'Thai Lan') { ?>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="list-group pt-3 pb-3">
                            <div class="list-group-item bg-white">
                                <div class="row">
                                    <div class=" col-lg-3"><img src="img/thailan3.jpg" class="img-fluidBT"></div>
                                    <div class="row col-lg-4 col-md-7 col-sm-12 ml-auto mr-auto">
                                        <p class="ml-4">
                                            <i class="fas fa-map-marker-alt fa-lg" style="color: #ff0066;"></i><b><?php echo $ticket['destination']; ?></b>
                                        </p>
                                        <p><i class="fas fa-clock fa-lg fa-shake fa-lg ml-4 mr-1 mt-1" style="color: #ff0066;"></i><b><?php echo $ticket['duration']; ?></b></p>
                                        <p>
                                            <i class="fas fa-calendar-alt fa-lg ml-4 mr-1" style="color: #ff0066;"></i><b><?php echo $ticket['dateDepart']; ?></b>
                                            <i class="fa-duotone fa-horizontal-rule fa-md" style="color: #ff0066;"></i>
                                            <i class="fas fa-calendar-alt fa-lg mr-1" style="color: #ff0066;"></i><b><?php echo $ticket['dateReturn']; ?></b>
                                        </p>
                                        <div class="row">
                                            <div class="row ml-0 pb-2 mr-2 ml-4 mr-2 benthanh_detail" style="width: 100px; height: 30px;">
                                                <i class="fas fa-utensils fa-sm" style="color: #ff0066;"><i class="fad fa-tree-palm fa-md ml-2" style="--fa-primary-color: #ff0066; --fa-secondary-color: #ff0066;"></i>
                                            </i>
                                            </div>
                                            <div class="row ml-0 pt-2 pb-2 mr-2 benthanh_detail" style="width: 100px; height: 30px;">
                                                <i class="fas fa-users ml-3" style="color: #ff0066;"></i>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 ml-auto mr-auto">
                                        <div class=""><p class="fontPrice headcomment2"><i class="fas fa-tags fa-lg tagPrice mr-auto ml-auto" style="color: #ff0066;"></i>$200/<i class="fas fa-user fa-lg" style="color: #ff0066;"></i>
                                            </p> </div>
                                        <!-- <a href="#" class="book-now-link1"> -->
                                        <button name="sbm" class="btn btn-primary btn-block tagPrice mr-auto ml-auto" style="width: 50%; font-size: 15px;"><b>Book Now</b></button>
                                        <!-- </a> -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>

                <?php } else if ($ticket['destination'] === 'Indonesia') { ?>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="list-group pt-3 pb-3">
                            <div class="list-group-item bg-white">
                                <div class="row">
                                    <div class=" col-lg-3"><img src="img/indo.jpg" class="img-fluidBT"></div>
                                    <div class="row col-lg-4 col-md-7 col-sm-12 ml-auto mr-auto">
                                        <p class="ml-4">
                                            <i class="fas fa-map-marker-alt fa-lg" style="color: #ff0066;"></i><b><?php echo $ticket['destination']; ?></b>
                                        </p>
                                        <p><i class="fas fa-clock fa-lg fa-shake fa-lg ml-4 mr-1 mt-1" style="color: #ff0066;"></i><b><?php echo $ticket['duration']; ?></b></p>
                                        <p>
                                            <i class="fas fa-calendar-alt fa-lg ml-4 mr-1" style="color: #ff0066;"></i><b><?php echo $ticket['dateDepart']; ?></b>
                                            <i class="fa-duotone fa-horizontal-rule fa-md" style="color: #ff0066;"></i>
                                            <i class="fas fa-calendar-alt fa-lg mr-1" style="color: #ff0066;"></i><b><?php echo $ticket['dateReturn']; ?></b>
                                        </p>
                                        <div class="row">
                                            <div class="row ml-0 pb-2 mr-2 ml-4 mr-2 benthanh_detail" style="width: 100px; height: 30px;">
                                                <i class="fas fa-utensils fa-sm" style="color: #ff0066;"><i class="fad fa-tree-palm fa-md ml-2" style="--fa-primary-color: #ff0066; --fa-secondary-color: #ff0066;"></i>
                                            </i>
                                            </div>
                                            <div class="row ml-0 pt-2 pb-2 mr-2 benthanh_detail" style="width: 100px; height: 30px;">
                                                <i class="fas fa-users ml-3" style="color: #ff0066;"></i>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 ml-auto mr-auto">
                                        <div class=""><p class="fontPrice headcomment2"><i class="fas fa-tags fa-lg tagPrice mr-auto ml-auto" style="color: #ff0066;"></i>$90/<i class="fas fa-user fa-lg" style="color: #ff0066;"></i>
                                            </p> </div>
                                        <!-- <a href="#" class="book-now-link1"> -->
                                        <button name="sbm" class="btn btn-primary btn-block tagPrice mr-auto ml-auto" style="width: 50%; font-size: 15px;"><b>Book Now</b></button>
                                        <!-- </a> -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>

                <?php } else if ($ticket['destination'] === 'Laos') { ?>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="list-group pt-3 pb-3">
                            <div class="list-group-item bg-white">
                                <div class="row">
                                    <div class=" col-lg-3"><img src="img/lao.jpg" class="img-fluidBT"></div>
                                    <div class="row col-lg-4 col-md-7 col-sm-12 ml-auto mr-auto">
                                        <p class="ml-4">
                                            <i class="fas fa-map-marker-alt fa-lg" style="color: #ff0066;"></i><b><?php echo $ticket['destination']; ?></b>
                                        </p>
                                        <p><i class="fas fa-clock fa-lg fa-shake fa-lg ml-4 mr-1 mt-1" style="color: #ff0066;"></i><b><?php echo $ticket['duration']; ?></b></p>
                                        <p>
                                            <i class="fas fa-calendar-alt fa-lg ml-4 mr-1" style="color: #ff0066;"></i><b><?php echo $ticket['dateDepart']; ?></b>
                                            <i class="fa-duotone fa-horizontal-rule fa-md" style="color: #ff0066;"></i>
                                            <i class="fas fa-calendar-alt fa-lg mr-1" style="color: #ff0066;"></i><b><?php echo $ticket['dateReturn']; ?></b>
                                        </p>
                                        <div class="row">
                                            <div class="row ml-0 pb-2 mr-2 ml-4 mr-2 benthanh_detail" style="width: 100px; height: 30px;">
                                                <i class="fas fa-utensils fa-sm" style="color: #ff0066;"><i class="fad fa-tree-palm fa-md ml-2" style="--fa-primary-color: #ff0066; --fa-secondary-color: #ff0066;"></i>
                                            </i>
                                            </div>
                                            <div class="row ml-0 pt-2 pb-2 mr-2 benthanh_detail" style="width: 100px; height: 30px;">
                                                <i class="fas fa-users ml-3" style="color: #ff0066;"></i>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 ml-auto mr-auto">
                                        <div class=""><p class="fontPrice headcomment2"><i class="fas fa-tags fa-lg tagPrice mr-auto ml-auto" style="color: #ff0066;"></i>$120/<i class="fas fa-user fa-lg" style="color: #ff0066;"></i>
                                            </p> </div>
                                        <!-- <a href="#" class="book-now-link1"> -->
                                        <button name="sbm" class="btn btn-primary btn-block tagPrice mr-auto ml-auto" style="width: 50%; font-size: 15px;"><b>Book Now</b></button>
                                        <!-- </a> -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>

                <?php } else if ($ticket['destination'] === 'Singapore') { ?>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="list-group pt-3 pb-3">
                            <div class="list-group-item bg-white">
                                <div class="row">
                                    <div class=" col-lg-3"><img src="img/singapore.jpg" class="img-fluidBT"></div>
                                    <div class="row col-lg-4 col-md-7 col-sm-12 ml-auto mr-auto">
                                        <p class="ml-4">
                                            <i class="fas fa-map-marker-alt fa-lg" style="color: #ff0066;"></i><b><?php echo $ticket['destination']; ?></b>
                                        </p>
                                        <p><i class="fas fa-clock fa-lg fa-shake fa-lg ml-4 mr-1 mt-1" style="color: #ff0066;"></i><b><?php echo $ticket['duration']; ?></b></p>
                                        <p>
                                            <i class="fas fa-calendar-alt fa-lg ml-4 mr-1" style="color: #ff0066;"></i><b><?php echo $ticket['dateDepart']; ?></b>
                                            <i class="fa-duotone fa-horizontal-rule fa-md" style="color: #ff0066;"></i>
                                            <i class="fas fa-calendar-alt fa-lg mr-1" style="color: #ff0066;"></i><b><?php echo $ticket['dateReturn']; ?></b>
                                        </p>
                                        <div class="row">
                                            <div class="row ml-0 pb-2 mr-2 ml-4 mr-2 benthanh_detail" style="width: 100px; height: 30px;">
                                                <i class="fas fa-utensils fa-sm" style="color: #ff0066;"><i class="fad fa-tree-palm fa-md ml-2" style="--fa-primary-color: #ff0066; --fa-secondary-color: #ff0066;"></i>
                                            </i>
                                            </div>
                                            <div class="row ml-0 pt-2 pb-2 mr-2 benthanh_detail" style="width: 100px; height: 30px;">
                                                <i class="fas fa-users ml-3" style="color: #ff0066;"></i>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 ml-auto mr-auto">
                                        <div class=""><p class="fontPrice headcomment2"><i class="fas fa-tags fa-lg tagPrice mr-auto ml-auto" style="color: #ff0066;"></i>$150/<i class="fas fa-user fa-lg" style="color: #ff0066;"></i>
                                            </p> </div>
                                        <!-- <a href="#" class="book-now-link1"> -->
                                        <button name="sbm" class="btn btn-primary btn-block tagPrice mr-auto ml-auto" style="width: 50%; font-size: 15px;"><b>Book Now</b></button>
                                        <!-- </a> -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>

                <?php } else if ($ticket['destination'] === 'Myanmar') { ?>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="list-group pt-3 pb-3">
                            <div class="list-group-item bg-white">
                                <div class="row">
                                    <div class=" col-lg-3"><img src="img/myanmar_des.jpg" class="img-fluidBT"></div>
                                    <div class="row col-lg-4 col-md-7 col-sm-12 ml-auto mr-auto">
                                        <p class="ml-4">
                                            <i class="fas fa-map-marker-alt fa-lg" style="color: #ff0066;"></i><b><?php echo $ticket['destination']; ?></b>
                                        </p>
                                        <p><i class="fas fa-clock fa-lg fa-shake fa-lg ml-4 mr-1 mt-1" style="color: #ff0066;"></i><b><?php echo $ticket['duration']; ?></b></p>
                                        <p>
                                            <i class="fas fa-calendar-alt fa-lg ml-4 mr-1" style="color: #ff0066;"></i><b><?php echo $ticket['dateDepart']; ?></b>
                                            <i class="fa-duotone fa-horizontal-rule fa-md" style="color: #ff0066;"></i>
                                            <i class="fas fa-calendar-alt fa-lg mr-1" style="color: #ff0066;"></i><b><?php echo $ticket['dateReturn']; ?></b>
                                        </p>
                                        <div class="row">
                                            <div class="row ml-0 pb-2 mr-2 ml-4 mr-2 benthanh_detail" style="width: 100px; height: 30px;">
                                                <i class="fas fa-utensils fa-sm" style="color: #ff0066;"><i class="fad fa-tree-palm fa-md ml-2" style="--fa-primary-color: #ff0066; --fa-secondary-color: #ff0066;"></i>
                                            </i>
                                            </div>
                                            <div class="row ml-0 pt-2 pb-2 mr-2 benthanh_detail" style="width: 100px; height: 30px;">
                                                <i class="fas fa-users ml-3" style="color: #ff0066;"></i>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 ml-auto mr-auto">
                                        <div class=""><p class="fontPrice headcomment2"><i class="fas fa-tags fa-lg tagPrice mr-auto ml-auto" style="color: #ff0066;"></i>$120/<i class="fas fa-user fa-lg" style="color: #ff0066;"></i>
                                            </p> </div>
                                        <!-- <a href="#" class="book-now-link1"> -->
                                        <button name="sbm" class="btn btn-primary btn-block tagPrice mr-auto ml-auto" style="width: 50%; font-size: 15px;"><b>Book Now</b></button>
                                        <!-- </a> -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>

                <?php } else if ($ticket['destination'] === 'Malaysia') { ?>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="list-group pt-3 pb-3">
                            <div class="list-group-item bg-white">
                                <div class="row">
                                    <div class=" col-lg-3"><img src="img/malaysia_des.jpg" class="img-fluidBT"></div>
                                    <div class="row col-lg-4 col-md-7 col-sm-12 ml-auto mr-auto">
                                        <p class="ml-4">
                                            <i class="fas fa-map-marker-alt fa-lg" style="color: #ff0066;"></i><b><?php echo $ticket['destination']; ?></b>
                                        </p>
                                        <p><i class="fas fa-clock fa-lg fa-shake fa-lg ml-4 mr-1 mt-1" style="color: #ff0066;"></i><b><?php echo $ticket['duration']; ?></b></p>
                                        <p>
                                            <i class="fas fa-calendar-alt fa-lg ml-4 mr-1" style="color: #ff0066;"></i><b><?php echo $ticket['dateDepart']; ?></b>
                                            <i class="fa-duotone fa-horizontal-rule fa-md" style="color: #ff0066;"></i>
                                            <i class="fas fa-calendar-alt fa-lg mr-1" style="color: #ff0066;"></i><b><?php echo $ticket['dateReturn']; ?></b>
                                        </p>
                                        <div class="row">
                                            <div class="row ml-0 pb-2 mr-2 ml-4 mr-2 benthanh_detail" style="width: 100px; height: 30px;">
                                                <i class="fas fa-utensils fa-sm" style="color: #ff0066;"><i class="fad fa-tree-palm fa-md ml-2" style="--fa-primary-color: #ff0066; --fa-secondary-color: #ff0066;"></i>
                                            </i>
                                            </div>
                                            <div class="row ml-0 pt-2 pb-2 mr-2 benthanh_detail" style="width: 100px; height: 30px;">
                                                <i class="fas fa-users ml-3" style="color: #ff0066;"></i>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 ml-auto mr-auto">
                                        <div class=""><p class="fontPrice headcomment2"><i class="fas fa-tags fa-lg tagPrice mr-auto ml-auto" style="color: #ff0066;"></i>$200/<i class="fas fa-user fa-lg" style="color: #ff0066;"></i>
                                            </p> </div>
                                        <!-- <a href="#" class="book-now-link1"> -->
                                        <button name="sbm" class="btn btn-primary btn-block tagPrice mr-auto ml-auto" style="width: 50%; font-size: 15px;"><b>Book Now</b></button>
                                        <!-- </a> -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>

                <?php } else if ($ticket['destination'] === 'Philippinese') { ?>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="list-group pt-3 pb-3">
                            <div class="list-group-item bg-white">
                                <div class="row">
                                    <div class=" col-lg-3"><img src="img/philippines_des.jpg" class="img-fluidBT"></div>
                                    <div class="row col-lg-4 col-md-7 col-sm-12 ml-auto mr-auto">
                                        <p class="ml-4">
                                            <i class="fas fa-map-marker-alt fa-lg" style="color: #ff0066;"></i><b><?php echo $ticket['destination']; ?></b>
                                        </p>
                                        <p><i class="fas fa-clock fa-lg fa-shake fa-lg ml-4 mr-1 mt-1" style="color: #ff0066;"></i><b><?php echo $ticket['duration']; ?></b></p>
                                        <p>
                                            <i class="fas fa-calendar-alt fa-lg ml-4 mr-1" style="color: #ff0066;"></i><b><?php echo $ticket['dateDepart']; ?></b>
                                            <i class="fa-duotone fa-horizontal-rule fa-md" style="color: #ff0066;"></i>
                                            <i class="fas fa-calendar-alt fa-lg mr-1" style="color: #ff0066;"></i><b><?php echo $ticket['dateReturn']; ?></b>
                                        </p>
                                        <div class="row">
                                            <div class="row ml-0 pb-2 mr-2 ml-4 mr-2 benthanh_detail" style="width: 100px; height: 30px;">
                                                <i class="fas fa-utensils fa-sm" style="color: #ff0066;"><i class="fad fa-tree-palm fa-md ml-2" style="--fa-primary-color: #ff0066; --fa-secondary-color: #ff0066;"></i>
                                            </i>
                                            </div>
                                            <div class="row ml-0 pt-2 pb-2 mr-2 benthanh_detail" style="width: 100px; height: 30px;">
                                                <i class="fas fa-users ml-3" style="color: #ff0066;"></i>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 ml-auto mr-auto">
                                        <div class=""><p class="fontPrice headcomment2"><i class="fas fa-tags fa-lg tagPrice mr-auto ml-auto" style="color: #ff0066;"></i>$300/<i class="fas fa-user fa-lg" style="color: #ff0066;"></i>
                                            </p> </div>
                                        <!-- <a href="#" class="book-now-link1"> -->
                                        <button name="sbm" class="btn btn-primary btn-block tagPrice mr-auto ml-auto" style="width: 50%; font-size: 15px;"><b>Book Now</b></button>
                                        <!-- </a> -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                <?php } ?>
            <?php } ?>



        <!--<div class="list-group pt-3 pb-3">
            <div class="list-group-item bg-white">
                <div class="row">
                    <div class=" col-lg-3"><img src="img/aoPhraNangBeach.jpg" class="img-fluidBT"></div>
                    <div class="row col-lg-4 col-md-7 col-sm-12 ml-auto mr-auto">
                        <p class="ml-4">
                            <i class="fas fa-map-marker-alt fa-lg" style="color: #ff0066;"></i><b>Ao Phra Nang Beach</b>
                        </p>
                        <p><i class="fas fa-calendar-alt fa-lg ml-4 mr-1 mt-1" style="color: #ff0066;"></i><b>1/5/2024</b></p>
                        <p>
                            <i class="fas fa-clock fa-lg fa-shake ml-4 mr-1" style="color: #ff0066;"></i><b>14:00pm</b>
                            <i class="fa-duotone fa-horizontal-rule fa-md" style="color: #ff0066;"></i>
                            <i class="fas fa-clock fa-lg fa-shake mr-1" style="color: #ff0066;"></i><b>18:00pm</b>
                        </p>
                        <div class="row">
                            <div class="row ml-0 pb-2 mr-2 ml-4 mr-2 benthanh_detail" style="width: 100px; height: 30px;">
                                <i class="fas fa-utensils fa-sm" style="color: #ff0066;"><i class="fas fa-shopping-bag fa-sm ml-1" style="color: #ff0066;"></i><i class="fas fa-umbrella-beach ml-1" style="color: #ff0066;"></i>                            </i>
                            </div>
                            <div class="row ml-0 pt-2 pb-2 mr-2 benthanh_detail" style="width: 100px; height: 30px;">
                                <i class="fas fa-users ml-3" style="color: #ff0066;"></i>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 ml-auto mr-auto">
                        <div class=""><p class="fontPrice headcomment2"><i class="fas fa-tags fa-lg tagPrice mr-auto ml-auto" style="color: #ff0066;"></i>$150/<i class="fas fa-user fa-lg" style="color: #ff0066;"></i>
                        </p> </div>   
                        <a href="#" class="book-now-link1">
                            <button class="btn btn-primary btn-block tagPrice mr-auto ml-auto" style="width: 50%; font-size: 15px;"><b>Book Now</b></button>
                        </a> 
                    </div>
                </div>
                
            </div>
        </div>

        <div class="list-group pt-3 pb-3">
            <div class="list-group-item bg-white">
                <div class="row">
                    <div class=" col-lg-3"><img src="img/Bali-indonesia.jpg" class="img-fluidBT"></div>
                    <div class="row col-lg-4 col-md-7 col-sm-12 ml-auto mr-auto">
                        <p class="ml-4">
                            <i class="fas fa-map-marker-alt fa-lg" style="color: #ff0066;"></i><b>Bali</b>
                        </p>
                        <p><i class="fas fa-calendar-alt fa-lg ml-4 mr-1 mt-1" style="color: #ff0066;"></i><b>1/4/2024</b></p>
                        <p>
                            <i class="fas fa-clock fa-lg fa-shake ml-4 mr-1" style="color: #ff0066;"></i><b>8:am</b>
                            <i class="fa-duotone fa-horizontal-rule fa-md" style="color: #ff0066;"></i>
                            <i class="fas fa-clock fa-lg fa-shake mr-1" style="color: #ff0066;"></i><b>10:00am</b>
                        </p>
                        <div class="row">
                            <div class="row ml-0 pb-2 mr-2 ml-4 mr-2 benthanh_detail" style="width: 100px; height: 30px;">
                                <i class="fas fa-utensils fa-sm" style="color: #ff0066;"><i class="fad fa-tree-palm fa-md ml-2" style="--fa-primary-color: #ff0066; --fa-secondary-color: #ff0066;"></i>
                            </i>
                            </div>
                            <div class="row ml-0 pt-2 pb-2 mr-2 benthanh_detail" style="width: 100px; height: 30px;">
                                <i class="fas fa-users ml-3" style="color: #ff0066;"></i>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 ml-auto mr-auto">
                        <div class=""><p class="fontPrice headcomment2"><i class="fas fa-tags fa-lg tagPrice mr-auto ml-auto" style="color: #ff0066;"></i>$90/<i class="fas fa-user fa-lg" style="color: #ff0066;"></i>
                        </p> </div>   
                        <a href="#" class="book-now-link1">
                            <button class="btn btn-primary btn-block tagPrice mr-auto ml-auto" style="width: 50%; font-size: 15px;"><b>Book Now</b></button>
                        </a> 
                    </div>
                </div>
                
            </div>
        </div>

        <div class="list-group pt-3 pb-3">
            <div class="list-group-item bg-white">
                <div class="row">
                    <div class=" col-lg-3"><img src="img/phnomPenh.jpg" class="img-fluidBT"></div>
                    <div class="row col-lg-4 col-md-7 col-sm-12 ml-auto mr-auto">
                        <p class="ml-4">
                            <i class="fas fa-map-marker-alt fa-lg" style="color: #ff0066;"></i><b>Phnom Penh</b>
                        </p>
                        <p><i class="fas fa-calendar-alt fa-lg ml-4 mr-1 mt-1" style="color: #ff0066;"></i><b>10/5/2024</b></p>
                        <p>
                            <i class="fas fa-clock fa-lg fa-shake ml-4 mr-1" style="color: #ff0066;"></i><b>6:am</b>
                            <i class="fa-duotone fa-horizontal-rule fa-md" style="color: #ff0066;"></i>
                            <i class="fas fa-clock fa-lg fa-shake mr-1" style="color: #ff0066;"></i><b>15:00pm</b>
                        </p>
                        <div class="row">
                            <div class="row ml-0 pb-2 mr-2 ml-4 mr-2 benthanh_detail" style="width: 100px; height: 30px;">
                                <i class="fas fa-utensils fa-sm" style="color: #ff0066;"><i class="fas fa-shopping-bag fa-sm ml-1" style="color: #ff0066;"></i><i class="far fa-money-bill-alt fa-sm ml-1" style="color: #3e7e6b;"></i></i>
                            </div>
                            <div class="row ml-0 pt-2 pb-2 mr-2 benthanh_detail" style="width: 100px; height: 30px;">
                                <i class="fas fa-user fa-sm ml-2" style="color: #ff0066;"><i class="fas fa-bus fa-sm ml-1" style="color: #ff0066;"></i></i>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 ml-auto mr-auto">
                        <div class=""><p class="fontPrice headcomment2"><i class="fas fa-tags fa-lg tagPrice mr-auto ml-auto" style="color: #ff0066;"></i>$90/<i class="fas fa-user fa-lg" style="color: #ff0066;"></i>
                        </p> </div>   
                        <a href="#" class="book-now-link1">
                            <button class="btn btn-primary btn-block tagPrice mr-auto ml-auto" style="width: 50%; font-size: 15px;"><b>Book Now</b></button>
                        </a> 
                    </div>
                </div>
                
            </div>
        </div>

        <div class="list-group pt-3 pb-3">
            <div class="list-group-item bg-white">
                <div class="row">
                    <div class=" col-lg-3"><img src="img/phetChaBun.jpg" class="img-fluidBT"></div>
                    <div class="row col-lg-4 col-md-7 col-sm-12 ml-auto mr-auto">
                        <p class="ml-4">
                            <i class="fas fa-map-marker-alt fa-lg" style="color: #ff0066;"></i><b>Phet Cha Bun</b>
                        </p>
                        <p><i class="fas fa-calendar-alt fa-lg ml-4 mr-1 mt-1" style="color: #ff0066;"></i><b>06/04/2024</b></p>
                        <p>
                            <i class="fas fa-clock fa-lg fa-shake ml-4 mr-1" style="color: #ff0066;"></i><b>10:00am</b>
                            <i class="fa-duotone fa-horizontal-rule fa-md" style="color: #ff0066;"></i>
                            <i class="fas fa-clock fa-lg fa-shake mr-1" style="color: #ff0066;"></i><b>19:00pm</b>
                        </p>
                        <div class="row">
                            <div class="row ml-0 pb-2 mr-2 ml-4 mr-2 benthanh_detail" style="width: 100px; height: 30px;">
                                <i class="fas fa-utensils fa-sm" style="color: #ff0066;"><i class="fas fa-shopping-bag fa-sm ml-1" style="color: #ff0066;"></i><i class="far fa-money-bill-alt fa-sm ml-1" style="color: #3e7e6b;"></i></i>
                            </div>
                            <div class="row ml-0 pt-2 pb-2 mr-2 benthanh_detail" style="width: 100px; height: 30px;">
                                <i class="fas fa-user fa-sm ml-2" style="color: #ff0066;"><i class="fas fa-bus fa-sm ml-1" style="color: #ff0066;"></i></i>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 ml-auto mr-auto">
                        <div class=""><p class="fontPrice headcomment2"><i class="fas fa-tags fa-lg tagPrice mr-auto ml-auto" style="color: #ff0066;"></i>$150/<i class="fas fa-user fa-lg" style="color: #ff0066;"></i>
                        </p> </div>   
                        <a href="#" class="book-now-link1">
                            <button class="btn btn-primary btn-block tagPrice mr-auto ml-auto" style="width: 50%; font-size: 15px;"><b>Book Now</b></button>
                        </a> 
                    </div>
                </div>
                
            </div>
        </div>

        <div class="list-group pt-3 pb-3">
            <div class="list-group-item bg-white">
                <div class="row">
                    <div class=" col-lg-3"><img src="img/Bangkok.jpg" class="img-fluidBT"></div>
                    <div class="row col-lg-4 col-md-7 col-sm-12 ml-auto mr-auto">
                        <p class="ml-4">
                            <i class="fas fa-map-marker-alt fa-lg" style="color: #ff0066;"></i><b>Bangkok</b>
                        </p>
                        <p><i class="fas fa-calendar-alt fa-lg ml-4 mr-1 mt-1" style="color: #ff0066;"></i><b>20/5/2024</b></p>
                        <p>
                            <i class="fas fa-clock fa-lg fa-shake ml-4 mr-1" style="color: #ff0066;"></i><b>9:00am</b>
                            <i class="fa-duotone fa-horizontal-rule fa-md" style="color: #ff0066;"></i>
                            <i class="fas fa-clock fa-lg fa-shake mr-1" style="color: #ff0066;"></i><b>15:00pm</b>
                        </p>
                        <div class="row">
                            <div class="row ml-0 pb-2 mr-2 ml-4 mr-2 benthanh_detail" style="width: 100px; height: 30px;">
                                <i class="fas fa-utensils fa-sm" style="color: #ff0066;"><i class="fas fa-shopping-bag fa-sm ml-1" style="color: #ff0066;"></i><i class="fad fa-cocktail ml-1" style="--fa-primary-color: #ff0066; --fa-secondary-color: #ff0066;"></i>                            </i>
                            </div>
                            <div class="row ml-0 pt-2 pb-2 mr-2 benthanh_detail" style="width: 100px; height: 30px;">
                                <i class="fas fa-user fa-sm ml-3" style="color: #ff0066;"></i>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 ml-auto mr-auto">
                        <div class=""><p class="fontPrice headcomment2"><i class="fas fa-tags fa-lg tagPrice mr-auto ml-auto" style="color: #ff0066;"></i>$180/<i class="fas fa-user fa-lg" style="color: #ff0066;"></i>
                        </p> </div>   
                        <a href="#" class="book-now-link1">
                            <button class="btn btn-primary btn-block tagPrice mr-auto ml-auto" style="width: 50%; font-size: 15px;"><b>Book Now</b></button>
                        </a> 
                    </div>
                </div>
                
            </div>
        </div> -->
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-fUuOJuJueS0CZ9FPvWV/iGNE9R4MnVNjNs7aYVw1qcmO8zWEiDO2suRWPFNIlXZ" crossorigin="anonymous"></script>
</body>
</html>
</head>
<body>
    
</body>
</html>
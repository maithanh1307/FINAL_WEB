<?php
session_start();

$destinationID= '';
$destinationImage = '';
$destinationName = '';
$voteLike = '';
$datePost = '';


$get_destinationID = '';
$get_destinationImage = '';
$get_destinationName = '';
$get_voteLike = '';
$get_datePost = '';


$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $destinationID = $_POST['destinationID'];


    $destinationImage = $_POST['destinationImage'];
    $destinationName = $_POST['destinationName'];
    $voteLike = $_POST['voteLike'];
    $datePost = date("Y/m/d"); 

    $conn = new mysqli('localhost', 'root', '', 'finalweb');
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    } else {
        if ($_SESSION['user'] == 'admin') {
            $get_destinationID = $_GET['destination_ID'];
            $get_destinationImage = $_GET['destination_Image'];
            $get_destinationName = $_GET['destination_Name'];
            $get_voteLike = $_GET['vote_Like'];
            $get_datePost = $_GET['date_Post'];
            
            

        $sql = "UPDATE addinformation SET destinationName=?, voteLike=?, datePost=?
        WHERE destinationID=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $destinationName, $voteLike, $datePost, $get_destinationID);
        
        $stmt->execute(); 
        
    

            // Close statement and connection
            $stmt->close();

            $conn->close();

            header('Location: buttons.php');
            exit();
        } else {
            if ($_GET['user_email'] ===  $_SESSION['user']) {
                $get_destinationID = $_GET['destination_ID'];
                $get_destinationImage = $_GET['destination_Image'];
                $get_destinationName = $_GET['destination_Name'];
                $get_voteLike = $_GET['vote_Like'];
                $get_datePost = $_GET['date_Post'];


        $sql = "UPDATE addinformation SET destinationName=?, voteLike=?, datePost=?
        WHERE destinationID=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $destinationName, $voteLike, $datePost, $get_destinationID);
    
            // Bind parameters
            // $stmt->bind_param("ssssssssss", $destinationID, $destinationImage, $destinationName, $voteLike, $datePost, $get_destinationID, $get_destinationImage, $get_destinationName, $get_voteLike, $get_datePost);

            $stmt->execute();
            

            // Close statement and connection
            $stmt->close();

            $conn->close();
            }
            header('Location: buttons.php');
            exit();
        }

    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reis-Admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/sb-admin-2.css" rel="stylesheet">


</head>

<body id="page-top">


                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <form method="POST" enctype="multipart/form-data">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Edit top destination</h1>
                        </div>
                        <div class="admin-main-content">
                            <div class="admin-main-content-topdestination-add">
                                <div class="admin-main-content-left">
                                    <form action="#" method="post">
                                        <div class="admin-main-content-two-input">
                                            <div class="admin-main-content">
                                                <?php
                                                include('connection/connection_editpost.php');
                                                ?>
                                                <div class="admin-main-content-right-image">
                                                    <label for="file">Image top destination</label>
                                                    
                                                    <input name="destinationImage" id="file" type="file" style="width: 200px;" src="img/<?php echo $row['destinationImage'];?>">
                                                    <!-- <img style="width: 200px;" src="img/"> -->
                                                    <!-- <button name="sbm" class="btn btn-primary" type="submit">submit</button> -->
                                                    <button name="sbm" class="btn btn-primary" type="submit">Edit</button>
                                                    <div class="image-show">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                </div>
                            </div>
                        </div>
                    </form>


                </div>


                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
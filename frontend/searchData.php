<?php
// Kết nối đến cơ sở dữ liệu
$conn = new mysqli('localhost', 'root', '', 'finalweb');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Thực hiện truy vấn SQL
    if (isset($_POST['submit'])) {
        $search = $_POST['search'];
        
        $sql1 = "SELECT * FROM planning WHERE destination='$search'";
        $result = mysqli_query($conn, $sql1);
        if ($result) {
            echo'<p style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">---------Your Result---------</p>            ';
            while($row = mysqli_fetch_assoc($result)) {
                if($row['destination'] === 'Viet Nam') {
                    echo '
                        <form method="POST" enctype="multipart/form-data">
                            <div class="list-group pt-3 pb-3">
                                <div class="list-group-item bg-white">
                                    <div class="row">
                                        <div class=" col-lg-3"><img src="img/VietNam.jpg" class="img-fluidBT"></div>
                                        <div class="row col-lg-4 col-md-7 col-sm-12 ml-auto mr-auto">
                                            <p class="ml-4">
                                                <i class="fas fa-map-marker-alt fa-lg" style="color: #ff0066;"></i><b>'.$row['destination'].'</b>
                                            </p>
                                            <p><i class="fas fa-clock fa-lg fa-shake fa-lg ml-4 mr-1 mt-1" style="color: #ff0066;"></i><b>'.$row['duration'].'</b></p>
                                            <p>
                                                <i class="fas fa-calendar-alt fa-lg ml-4 mr-1" style="color: #ff0066;"></i><b>'.$row['dateDepart'].'</b>
                                                <i class="fa-duotone fa-horizontal-rule fa-md" style="color: #ff0066;"></i>
                                                <i class="fas fa-calendar-alt fa-lg mr-1" style="color: #ff0066;"></i><b>'.$row['dateReturn'].'</b>
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
                    ';
                }
            
            

                
                else if($row['destination'] === 'Thai Lan') {
                    echo '
                        <form method="POST" enctype="multipart/form-data">
                            <div class="list-group pt-3 pb-3">
                                <div class="list-group-item bg-white">
                                    <div class="row">
                                        <div class=" col-lg-3"><img src="img/thailan3.jpg" class="img-fluidBT"></div>
                                        <div class="row col-lg-4 col-md-7 col-sm-12 ml-auto mr-auto">
                                            <p class="ml-4">
                                                <i class="fas fa-map-marker-alt fa-lg" style="color: #ff0066;"></i><b>'.$row['destination'].'</b>
                                            </p>
                                            <p><i class="fas fa-clock fa-lg fa-shake fa-lg ml-4 mr-1 mt-1" style="color: #ff0066;"></i><b>'.$row['duration'].'</b></p>
                                            <p>
                                                <i class="fas fa-calendar-alt fa-lg ml-4 mr-1" style="color: #ff0066;"></i><b>'.$row['dateDepart'].'</b>
                                                <i class="fa-duotone fa-horizontal-rule fa-md" style="color: #ff0066;"></i>
                                                <i class="fas fa-calendar-alt fa-lg mr-1" style="color: #ff0066;"></i><b>'.$row['dateReturn'].'</b>
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
                    ';
                }
            

                else if($row['destination'] === 'Cambodia') {
                    echo '
                        <form method="POST" enctype="multipart/form-data">
                            <div class="list-group pt-3 pb-3">
                                <div class="list-group-item bg-white">
                                    <div class="row">
                                        <div class=" col-lg-3"><img src="img/campuchia.jpg" class="img-fluidBT"></div>
                                        <div class="row col-lg-4 col-md-7 col-sm-12 ml-auto mr-auto">
                                            <p class="ml-4">
                                                <i class="fas fa-map-marker-alt fa-lg" style="color: #ff0066;"></i><b>'.$row['destination'].'</b>
                                            </p>
                                            <p><i class="fas fa-clock fa-lg fa-shake fa-lg ml-4 mr-1 mt-1" style="color: #ff0066;"></i><b>'.$row['duration'].'</b></p>
                                            <p>
                                                <i class="fas fa-calendar-alt fa-lg ml-4 mr-1" style="color: #ff0066;"></i><b>'.$row['dateDepart'].'</b>
                                                <i class="fa-duotone fa-horizontal-rule fa-md" style="color: #ff0066;"></i>
                                                <i class="fas fa-calendar-alt fa-lg mr-1" style="color: #ff0066;"></i><b>'.$row['dateReturn'].'</b>
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
                    ';
                }
                else if($row['destination'] === 'Indonesia') {
                    echo '
                        <form method="POST" enctype="multipart/form-data">
                            <div class="list-group pt-3 pb-3">
                                <div class="list-group-item bg-white">
                                    <div class="row">
                                        <div class=" col-lg-3"><img src="img/indo.jpg" class="img-fluidBT"></div>
                                        <div class="row col-lg-4 col-md-7 col-sm-12 ml-auto mr-auto">
                                            <p class="ml-4">
                                                <i class="fas fa-map-marker-alt fa-lg" style="color: #ff0066;"></i><b>'.$row['destination'].'</b>
                                            </p>
                                            <p><i class="fas fa-clock fa-lg fa-shake fa-lg ml-4 mr-1 mt-1" style="color: #ff0066;"></i><b>'.$row['duration'].'</b></p>
                                            <p>
                                                <i class="fas fa-calendar-alt fa-lg ml-4 mr-1" style="color: #ff0066;"></i><b>'.$row['dateDepart'].'</b>
                                                <i class="fa-duotone fa-horizontal-rule fa-md" style="color: #ff0066;"></i>
                                                <i class="fas fa-calendar-alt fa-lg mr-1" style="color: #ff0066;"></i><b>'.$row['dateReturn'].'</b>
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
                    ';
                }

                else if($row['destination'] === 'Singapore') {
                    echo '
                        <form method="POST" enctype="multipart/form-data">
                            <div class="list-group pt-3 pb-3">
                                <div class="list-group-item bg-white">
                                    <div class="row">
                                        <div class=" col-lg-3"><img src="img/singapore.jpg" class="img-fluidBT"></div>
                                        <div class="row col-lg-4 col-md-7 col-sm-12 ml-auto mr-auto">
                                            <p class="ml-4">
                                                <i class="fas fa-map-marker-alt fa-lg" style="color: #ff0066;"></i><b>'.$row['destination'].'</b>
                                            </p>
                                            <p><i class="fas fa-clock fa-lg fa-shake fa-lg ml-4 mr-1 mt-1" style="color: #ff0066;"></i><b>'.$row['duration'].'</b></p>
                                            <p>
                                                <i class="fas fa-calendar-alt fa-lg ml-4 mr-1" style="color: #ff0066;"></i><b>'.$row['dateDepart'].'</b>
                                                <i class="fa-duotone fa-horizontal-rule fa-md" style="color: #ff0066;"></i>
                                                <i class="fas fa-calendar-alt fa-lg mr-1" style="color: #ff0066;"></i><b>'.$row['dateReturn'].'</b>
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
                    ';
                }


                else if($row['destination'] === 'Laos') {
                    echo '
                        <form method="POST" enctype="multipart/form-data">
                            <div class="list-group pt-3 pb-3">
                                <div class="list-group-item bg-white">
                                    <div class="row">
                                        <div class=" col-lg-3"><img src="img/lao.jpg" class="img-fluidBT"></div>
                                        <div class="row col-lg-4 col-md-7 col-sm-12 ml-auto mr-auto">
                                            <p class="ml-4">
                                                <i class="fas fa-map-marker-alt fa-lg" style="color: #ff0066;"></i><b>'.$row['destination'].'</b>
                                            </p>
                                            <p><i class="fas fa-clock fa-lg fa-shake fa-lg ml-4 mr-1 mt-1" style="color: #ff0066;"></i><b>'.$row['duration'].'</b></p>
                                            <p>
                                                <i class="fas fa-calendar-alt fa-lg ml-4 mr-1" style="color: #ff0066;"></i><b>'.$row['dateDepart'].'</b>
                                                <i class="fa-duotone fa-horizontal-rule fa-md" style="color: #ff0066;"></i>
                                                <i class="fas fa-calendar-alt fa-lg mr-1" style="color: #ff0066;"></i><b>'.$row['dateReturn'].'</b>
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
                    ';
                }
                else if($row['destination'] === 'Myanmar') {
                    echo '
                        <form method="POST" enctype="multipart/form-data">
                            <div class="list-group pt-3 pb-3">
                                <div class="list-group-item bg-white">
                                    <div class="row">
                                        <div class=" col-lg-3"><img src="img/myanmar_des.jpg" class="img-fluidBT"></div>
                                        <div class="row col-lg-4 col-md-7 col-sm-12 ml-auto mr-auto">
                                            <p class="ml-4">
                                                <i class="fas fa-map-marker-alt fa-lg" style="color: #ff0066;"></i><b>'.$row['destination'].'</b>
                                            </p>
                                            <p><i class="fas fa-clock fa-lg fa-shake fa-lg ml-4 mr-1 mt-1" style="color: #ff0066;"></i><b>'.$row['duration'].'</b></p>
                                            <p>
                                                <i class="fas fa-calendar-alt fa-lg ml-4 mr-1" style="color: #ff0066;"></i><b>'.$row['dateDepart'].'</b>
                                                <i class="fa-duotone fa-horizontal-rule fa-md" style="color: #ff0066;"></i>
                                                <i class="fas fa-calendar-alt fa-lg mr-1" style="color: #ff0066;"></i><b>'.$row['dateReturn'].'</b>
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

                    ';
                }


                else if($row['destination'] === 'Malaysia') {
                    echo '
                        <form method="POST" enctype="multipart/form-data">
                            <div class="list-group pt-3 pb-3">
                                <div class="list-group-item bg-white">
                                    <div class="row">
                                        <div class=" col-lg-3"><img src="img/malaysia_des.jpg" class="img-fluidBT"></div>
                                        <div class="row col-lg-4 col-md-7 col-sm-12 ml-auto mr-auto">
                                            <p class="ml-4">
                                                <i class="fas fa-map-marker-alt fa-lg" style="color: #ff0066;"></i><b>'.$row['destination'].'</b>
                                            </p>
                                            <p><i class="fas fa-clock fa-lg fa-shake fa-lg ml-4 mr-1 mt-1" style="color: #ff0066;"></i><b>'.$row['duration'].'</b></p>
                                            <p>
                                                <i class="fas fa-calendar-alt fa-lg ml-4 mr-1" style="color: #ff0066;"></i><b>'.$row['dateDepart'].'</b>
                                                <i class="fa-duotone fa-horizontal-rule fa-md" style="color: #ff0066;"></i>
                                                <i class="fas fa-calendar-alt fa-lg mr-1" style="color: #ff0066;"></i><b>'.$row['dateReturn'].'</b>
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
                    ';
                }

                
                else if($row['destination'] === 'Philippinese') {
                    echo '
                        <form method="POST" enctype="multipart/form-data">
                            <div class="list-group pt-3 pb-3">
                                <div class="list-group-item bg-white">
                                    <div class="row">
                                        <div class=" col-lg-3"><img src="img/philippines_des.jpg" class="img-fluidBT"></div>
                                        <div class="row col-lg-4 col-md-7 col-sm-12 ml-auto mr-auto">
                                            <p class="ml-4">
                                                <i class="fas fa-map-marker-alt fa-lg" style="color: #ff0066;"></i><b>'.$row['destination'].'</b>
                                            </p>
                                            <p><i class="fas fa-clock fa-lg fa-shake fa-lg ml-4 mr-1 mt-1" style="color: #ff0066;"></i><b>'.$row['duration'].'</b></p>
                                            <p>
                                                <i class="fas fa-calendar-alt fa-lg ml-4 mr-1" style="color: #ff0066;"></i><b>'.$row['dateDepart'].'</b>
                                                <i class="fa-duotone fa-horizontal-rule fa-md" style="color: #ff0066;"></i>
                                                <i class="fas fa-calendar-alt fa-lg mr-1" style="color: #ff0066;"></i><b>'.$row['dateReturn'].'</b>
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
                    ';
                }


            }
                
                
            
            echo '<p style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">-----------------------------</p>';
            
        }
    }
?>
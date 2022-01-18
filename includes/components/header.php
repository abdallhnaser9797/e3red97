<?php 

ob_start();
require_once "init.php";

// if (isset($_SESSION['uid'])) {
//     $user_id = $_SESSION['uid'];
// }
$count = 0;
if (isset($_SESSION['uid'])) {
    $user_id = $_SESSION['uid'];

    $stmt = $con->prepare("SELECT *  
                            FROM 
                                cart_item 
                            WHERE
                                user_id = ? ");
    $stmt->execute(array($user_id));
    $row = $stmt->fetch(); // جلب البيانات  
    $count=$stmt->rowCount();   
}

?>


<!DOCTYPE html>

<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>E3RD SHOP</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <link rel="stylesheet" href="<?php echo $css; ?>jquery-ui.css" />


    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo $images;?>logooo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo $images;?>apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $css; ?>bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo $css; ?>style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo $css; ?>responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo $css; ?>custom.css">





</head>

<body>

    



        <!-- <div class="upper-bar">


            <div class="container">
                
                <?php 
                    if(isset($_SESSION['user'])){ ?>

                        <div class="dropdown my-info text-right float-end">
                            <?php 
                                $stmt = $con->prepare("SELECT 
                                                            avatar
                                                    FROM 
                                                            users 
                                                    WHERE
                                                        userID = ?
                                            ");

                                $stmt->execute(array($_SESSION['uid']));

                                $userInfo = $stmt->fetch();

                                if ($userInfo['avatar']) {
                                    echo "<img src='images/". $userInfo['avatar']."' alt='Item Thumbnail' class='product-thumbnail' width='40px'>";
                                }else {
                                    echo "<img src='images/no_avatar.png' alt='Item Thumbnail' class='product-thumbnail'>";
                                }

                                
                            ?>
                            <button class="btn btn-info dropdown-toggle text-light" type="button" id="nav-toggle" data-bs-toggle="dropdown" >
                                <?php echo $session_user; ?>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="nav-toggle">
                                <li><a class="dropdown-item" href="profile.php">My Profile</a></li> 
                                <li><a class="dropdown-item" href="newad.php">New Product</a></li>
                                <li><a class="dropdown-item" href="profile.php#my-ads">My Products</a></li>
                                <li><a class="dropdown-item" href="profile.php#my-coms">My Comments</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </div>

                    
                        <?php

                        
                        // $userStatus = checkUserStatus($session_user);
                        
                        // if($userStatus == 1){
                        //     echo 'Your memebership need To activate By Admin';
                        // }
                        
                    } else {
                        echo '<a href="login.php" class="float-end">';
                            echo '<span>Login | Signup</span>';
                        echo '</a>'; 
                    }
                ?>
            </div>   
        </div> -->

        <!-- -------- -->
        <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				
                    <div class="our-link">
                        <ul>
                            <?php if (isset($_SESSION['uid'])) { ?>
                                <li><a href="profile.php"><i class="fa fa-user s_color"></i> My Account</a></li>
                                <li><a href="logout.php">Log Out</a></li>
                            <?php }else{ ?>
                                <li><a href="aboutus.php"><i class="fas fa-headset"></i> About Us</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="login-box">
                        <?php if (isset($_SESSION['uid'])) { 

                                $stmt = $con->prepare("SELECT 
                                                            avatar,
                                                            UserName
                                                    FROM 
                                                            users 
                                                    WHERE
                                                        userID = ?
                                            ");

                                $stmt->execute(array($_SESSION['uid']));

                                $userInfo = $stmt->fetch();

                                if ($userInfo['avatar']) {
                                    echo "<img src='images/". $userInfo['avatar']."' alt='Item Thumbnail' class='product-thumbnail rounded-circle' width='40px'>";
                                }else {
                                    echo "<img src='images/no_avatar.png' alt='Item Thumbnail' class='product-thumbnail'>";
                                } 
                                echo "<p class='loginkh'><a href='#'>".$userInfo['UserName']."</a></p>";
                            ?>
                            
                        <?php }else { ?>
                            <p class="loginkh"><a href="login.php">Register \ Login</a></p> 
                        <?php } ?>
					</div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Main Top -->

    

        <!-- Start Main Top -->
        <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.php"> <strong> <p class="e3rd" style="color:green">E3RD</p> </strong></a>
                </div>
                <!-- End Header Navigation -->


                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>

                        <?php
                            $categories = getAllFrom("*", "categories" ,"WHERE parent = 0", "", "ID", "ASC");
                            foreach ($categories as $key => $cat) { ?>
                                <li class="dropdown">
                                    <a href="categories.php?pageid=<?=$cat['ID']?>" class="nav-link dropdown-toggle arrow" data-toggle="dropdown"><?=$cat['name']?></a>
                                    <?php 
                                        $categoriesSUP = getAllFrom("*", "categories" ,"WHERE parent =".$cat['ID']."", "", "ID", "ASC");
                                        foreach ($categoriesSUP as $key => $value) { ?>
                                            <ul class="dropdown-menu">
                                                <li><a href="categories.php?pageid=<?=$value['ID']?>"><?=$value['name']?></a></li>
                                            </ul>
                                        <?php } ?>
                                </li>
                            <?php }?>
                
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            

                <!-- start cart -->
                <li class="nav-item ">
                    <div class="cart-container">
                        <a class="nav-link" href="cart.php" class="cart-link">
                            <i class="fas fa-shopping-cart cart-icon"></i>
                            <span id="cart" class="cart-counter">
                                <?php
                                    if ($count != 0) echo $count;
                                ?>
                            </span>
                        </a>
                    <div>
                </li>
                <!-- end cart -->
            </div>

                                                <!-- <div class="attr-nav">
                                                        <ul>
                                                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                                                            <li class="side-menu">
                                                        
                                                        </ul>
                                                    </div> -->




        </nav>
        <!-- End Navigation -->
        
    </header>
    <!-- End Main Top -->
                                            <!-- Start Top Search -->
                                            <!-- <div class="top-search">
                                                <div class="container">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                                        <input type="text" class="form-control" placeholder="Search">
                                                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- End Top Search -->
    

    

        <!-- ------- -->






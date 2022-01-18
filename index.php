<?php 
    
    ob_start();
    session_start();

    $pageTitle = "Hompepage";
    
    include 'init.php';
?>

<!--  -->
<!--  -->
<!--  -->
    

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="maindesign/images/3.jpeg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> E3rd Shop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="maindesign/images/4.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> E3rd Shop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="maindesign/images/crafts.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> E3rd Shop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->




    <!-- Start Categories  -->
    <!-- ********** محدش يشطبها لفجرو  -->
    <!-- <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="maindesign/images/categories_img_01.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Lorem ipsum dolor</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="maindesign/images/categories_img_02.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Lorem ipsum dolor</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="maindesign/images/categories_img_03.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Lorem ipsum dolor</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Categories -->


<!-- &&&&&&&&&& -->
<!--  -->

 <!-- Start Products  -->
 <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>ALL Prodect</h1>
                    </div>
                </div>
            </div>

            
                <div class="row special-list">

                <?php
        $items = getAllFrom('*','items','WHERE approve = 1','','item_ID'); 

        foreach($items as $item){

            $dirname = "imageItems/".$item['image'];
            if (is_dir($dirname)) {
                $images = glob($dirname ."/*");
            } 

        ?>
                <div class="col-lg-3 col-md-6 special-grid ">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">New</p>
                            </div>
                            <img src="<?php echo $images[0]; ?>" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                            
                    
                            </div>
                        </div>
                        <div class="why-text">
                        <?php  echo '<a href="item.php?itemid=' . $item['item_ID'] .'"><h4>'. $item['name'] .'</h4></a>'; ?>

                            <h5> <?php echo $item['price'] ;?> </h5>
                        </div>
                    </div>
                </div>
                

                <?php } ?>


            </div>
        </div>
        </div>
    
    <!-- End Products  -->


<?php
    
    require_once $comp . "footer.php"; 
    ob_end_flush();
?>
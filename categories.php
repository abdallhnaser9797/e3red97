<?php

session_start();
include 'init.php'; 

?>


   <!-- Start All Title Box -->
   <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Shop</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<!-- End All Title Box -->


<!-- ******* -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">

            <?php 
                    if(isset($_GET['pageid']) && is_numeric($_GET['pageid'])){
                        $pageid = intval($_GET['pageid']);

                        $SubCat = getAllFrom("ID","categories", "WHERE parent = {$pageid}","","ID");
                        $newarray = [];
                        foreach ($SubCat as $key => $value) {
                            $newarray = (int)$value['ID'] ;
                        }
                        if (! empty($newarray)) {
                            $items = getAllFrom("*","items", "WHERE cat_ID = {$pageid}","AND approve = 1 OR cat_ID IN ($newarray)","item_ID");
                        }else{
                            $items = getAllFrom("*","items", "WHERE cat_ID = {$pageid}","AND approve = 1","item_ID");
                        }
                        
                        foreach($items as $item){
        
                            $dirname = "imageItems/".$item['image'];
                            if (is_dir($dirname)) {
                                $images = glob($dirname ."/*");
                            } 
                        
                            echo '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">';
                            echo '<div class="shop-cat-box">';
                            echo' <div class="type-lb">';
                            echo'   <p class="sale">'.$item['price'].' $</p>';
                            echo '   </div>';
                            echo '<img class="img-fluid" src="'.$images[0].'" alt="" />'; 
                            echo '<a class="btn hvr-hover" href="item.php?itemid=' . $item['item_ID'] .'">'. $item['name'] .'</a>';
                            echo '</div>';
                            echo '</div>';

                            
                        } 
                    }
                        else {
                            $pageid = 0;
                            echo '<div class="alert alert-danger">Palese Select Category or Go back to Home Page</div>';
                        }
                            ?>

            </div>
        </div>
    </div>
    <!-- End Categories -->

<!-- ******* -->



<?php  include $comp . 'footer.php';?>


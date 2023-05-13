<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<link rel="canonical" href="https://www.mekarkprefab.com/gallery" />
<meta name="viewport" content=" width=device-width, initial-scale=1, maximum-scale=2" >
<link rel="shortcut icon" href="images/favicon.png" >

<title>Gallery</title>

<?php include_once 'templates/head.php'?>


</head>

<body>

    <!--page start-->
    <div class="page ttm-bgcolor-grey">

        <!--header start-->
        <?php include_once 'templates/header.php'?>
        <!--header end-->

          <div class="ttm-page-title-row gallery-cover-page">
                <div class="ttm-page-title-row-inner">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="seprate-service-page">
                                    <h1 class="title">Gallery</h1>
                                </div>
                                <div class="breadcrumb-wrapper">
                                    <div class="container">
                                        <div class="breadcrumb-wrapper-inner">
                                            <span>
                                                <a title="Go to Delmont." href="https://www.mekarkprefab.com" class="home"><i class="themifyicon ti-home"></i>&nbsp;&nbsp;Home</a>
                                            </span>
                                            <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                                            <span>Gallery</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                    
            </div>


        <!--site-main start-->
        <div class="site-main">

            <!--Gallery-section-->
            <div class="container pt-90 pb-40">
                <div class="row">
                    <div class="col-md-12">
                        <!-- section title -->
                        <div class="section-title">
                            <div class="text-center">
                                <h2 class="title">Gallery</h2>
                            </div>
                        </div><!-- section title end -->
                    </div>
                </div>
                <div class="row">
                <?php
                        
                    $images = glob("images/projects/gallery/gallery" . "/*.png");
                    foreach($images as $image)
                    {?>
                    <div class="col-md-4">
                        <div id="gallery-2" class="gallery-wrapper">
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a class="ttm_prettyphoto" href=<?php echo $image ?> rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                    <img  width="380" height="330" src=<?php echo $image ?> alt="gellary_img"></a>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <?php
                        }
                    ?>

                </div>
            </div>
            <!--Gallery-section end-->

        </div><!--site-main end-->


    <!--footer start-->
    <?php include_once 'templates/footer.php'?>

    <!--footer end-->
    

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

</div><!-- page end -->


    <!-- Javascript -->

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-1.4.1.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery.easing.js"></script>    
    <script src="js/jquery-waypoints.js"></script>    
   <script src="js/jquery-validate.js"></script> 
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/numinate.min.js"></script>
    <script src="js/imagesloaded.min.js"></script>
    <script src="js/jquery-isotope.js"></script>
    <script src="js/jquery.event.move.js"></script>
    <script src="js/jquery.twentytwenty.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Revolution Slider -->
    <script src="revolution/js/slider.js"></script>
    <script  src='revolution/js/revolution.tools.min.js'></script>
    <script  src='revolution/js/rs6.min.js'></script>
    <!-- Javascript end-->

</body>
</html>

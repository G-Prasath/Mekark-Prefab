<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" >
<meta name="description" content="Inoterior - Architecture HTML Template" >
<meta name="keywords" content="interior service wordpress theme, Architecture & Interior Designer Html5 Template, Architecture & Interior Designer, wordpress theme, premium wordpress theme, responsive wordpress theme, decoration theme, wordpress, themeforest, envato, interior design, interior designers, interior designer websites, interior, interior decorator services, decorators wordpress theme, unlimited colors available, ui/ux, ui/ix designs, best wordpress theme, html template, html, javascript, best css theme, css3, elementor theme, latest premium themes">
<meta name="author" content="https://www.themetechmount.com/" >
<meta name="viewport" content=" width=device-width, initial-scale=1, maximum-scale=2" >
<title>Inoterior - Architecture Html for Interior Designer</title>

<?php include_once 'templates/head.php'?>


</head>

<body>

    <!--page start-->
    <div class="page ttm-bgcolor-grey">

        <!--header start-->
        <?php include_once 'templates/header.php'?>
        <!--header end-->

          <div class="ttm-page-title-row sample-flat">
                <div class="ttm-page-title-row-inner">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="seprate-service-page">
                                    <h1 class="title">Sample Flat</h1>
                                </div>
                                <div class="breadcrumb-wrapper">
                                    <div class="container">
                                        <div class="breadcrumb-wrapper-inner">
                                            <span>
                                                <a title="Go to Delmont." href="index.php" class="home"><i class="themifyicon ti-home"></i>&nbsp;&nbsp;Home</a>
                                            </span>
                                            <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                                            <span><a href="products.php">Products</a></span>
                                            <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                                            <span>Sample Flat</span>
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

            <!-- About welcome-section-->
            <section class="py-5 welcome-section clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- section title -->
                            <div class="section-title">
                                <div class="title-header">
                                    <h2 class="h2-bold">Prefab Sample Flat Structures - Fast, Efficient, and Customizable</h2>
                                </div>
                            </div><!-- section title end -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="res-991-pt-0">
                                <p class="service-para">Prefab sample flat structures are small, modular buildings that are pre-manufactured in a factory and then transported to a site for assembly. These structures are commonly used as sample flats, which are model apartments or homes that are used to showcase the design and features of a larger housing project.</p>
                                <p>Mekark Prefab is a leading manufacturer and supplier of prefab sample flats, using lightweight, high-strength materials such as steel and aluminum, and are often designed to be energy-efficient and environmentally friendly. Our sample flat structures constructed can be customized to fit specific design requirements, and can be easily transported and assembled on-site, reducing construction time and costs. Prefab sample flat structures provide a cost-effective and efficient way for housing developers to showcase their projects and provide potential buyers with a tangible example of the design and features of their homes.</p>
                               
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-8">
                            <!-- ttm_single_image-wrapper -->
                            <div class="ttm_single_image-wrapper">
                                <img width="570" height="471" class="img-fluid" src="images/products/LGSF/sample-flat/lgsfprefab-sampleflat-scrool.jpg" alt="single_02">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Exploring the World of Prefab sample flat structures by Mekark</h2>
                            <ul>
                                <li>Mekark Prefab sample flats can be customized with LGSF technology, are made from light gauge steel framing that strong and easy to install projects.</li>
                                <li>Mekark model sample flats in different sizes to enable its customers to use more space.</li>
                                <li>Mekark Prefab sample flats structure can be designed to be energy-efficient and environmentally friendly, using materials and technologies that reduce energy consumption and carbon emissions. It can be easily transported and assembled on-site, making them a flexible and versatile option for showcasing housing projects in different locations.</li>
                                <li>Mekark prefab sample flat structures provide a cost-effective, customizable, and sustainable solution for showcasing housing projects and helping potential buyers envision their future homes.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--About welcome-section end-->


            <!--Gallery-section-->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- section title -->
                        <div class="section-title">
                            <div class="text-center">
                                <h2 class="h2-bold pb-3">Sample Flat Projects</h2>
                            </div>
                        </div><!-- section title end -->
                    </div>
                </div>
                <div class="row">
                    <?php
                        
                        $images = glob("images/products/LGSF/sample-flat/gallery" . "/*.jpg");
                        foreach($images as $image)
                        {?>
                            <div class="col-md-4">
                                <div id="gallery-2" class="gallery-wrapper">
                                    <figure class="gallery-item">
                                        <div class="gallery-icon landscape">
                                            <a class="ttm_prettyphoto" href=<?php echo $image ?> rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                            <img width="380" height="330" src=<?php echo $image ?> alt="gellary_img"></a>
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

            <!--- conatact-section -->
            <section class="ttm-row conatact-section bg-layer-equal-height mt_15 clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <iframe width="424" height="538" src="https://www.youtube.com/embed/Vvh51EPUtfs" title="Roofing Price| Cost of Roofing Sheets| Dhanam Roofings| Ph- 9384833383 | Roofing Contractors" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            <!-- col-img-bg-img-eight end-->
                        </div>
                        <div class="col-lg-6">
                            <!-- col-img-img-eight -->
                            <div class="ttm-bg ttm-col-bgcolor-yes ttm-right-span spacing-12">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                <div class="layer-content">
                                    
                                    <div class="section-title">
                                        <div class="service-title-header title-header">
                                            <p class="title">Send Your Message To Us</p>
                                        </div>
                                    </div>
                                    <div class="padding_top30">

                                        <form id="page_form" class="page_form wrap-form clearfix">
                                            <div class="row ttm-boxes-spacing-20px">
                                                <div class="col-md-6">
                                                    <label>
                                                        <span class="text-input"><input name="name" type="text" placeholder="Name" required></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>
                                                        <span class="text-input"><input name="phone" type="text" placeholder="Phone" required></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-12">
                                                    <label>
                                                        <span class="text-input"><input name="email" type="text" placeholder="Email" required></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-12">
                                                    <label>
                                                        <span class="text-input"><textarea name="msg" cols="50" rows="3" placeholder="Enter Message Here..." required></textarea></span>
                                                    </label>
                                                </div>
                                                
                                                <div class="col-lg-12">
                                                    <div class="g-recaptcha mb-3" data-sitekey="6LcTHColAAAAAIBASPM5TRAOFTor9TOYYaCDQsPp"></div>

                                                </div>
                                                <button type="submit" class="btn ttm-btn ttm-btn-style-border" name="submit">Submit</button>

                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div><!-- col-img-bg-img-two end-->
                        </div>
                    </div><!-- row end -->                
                </div>
            </section>
            <!-- conatact-section end -->


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

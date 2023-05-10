<footer class="footer ttm-bg ttm-bgcolor-darkgrey widget-footer clearfix">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <div class="second-footer">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_text clearfix">
                            <div class="footer-logo">
                                <img width="205" height="65" id="footer-logo-img" class="img-fluid" src="images/logo-2.png" alt="image">
                            </div>
                            <div class="textwidget widget-text">
                                <p>Inoterior design consultancy firm that brings sensitivity to the design top restaurants, hotels, offices & homes around the world</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_nav_menu clearfix">
                           <h3 class="widget-title">Quick Links</h3>
                            <ul id="menu-footer-service-link" class="menu">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Testimonial</a></li>
                                <li><a href="#">Latest News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_nav_menu clearfix">
                           <h3 class="widget-title">Usefull Links</h3>
                            <ul id="menu-footer-service-link" class="menu">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Testimonial</a></li>
                                <li><a href="#">Latest News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget-timing clearfix">
                            <h3 class="widget-title">Gallery</h3>
                            <div id="gallery-2" class="gallery-wrapper">
                            <?php
                                $images = glob("images/home/footer-gallery" . "/*.jpg");
                                foreach($images as $image)
                                {?>
                                    <figure class="gallery-item">
                                        <div class="gallery-icon landscape">
                                            <a class="ttm_prettyphoto" href=<?php echo $image ?> rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                            <img width="150" height="150" class="img-fluid" src=<?php echo $image ?> alt="gellary_img"></a>
                                        </div>
                                    </figure>
                                <?php
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="first-footer">
                <div class="footer-border">
                    <div class="row">
                        <div class="widget-area col-xs-12 col-sm-12 col-md-6 col-lg-4">
                            <aside class="widget widget-text">
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-before-content">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-size-sm ttm-icon_element-style-square">
                                            <img width="28" height="28" class="img-fluid" src="images/icon-1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>Call Us Now</h3>
                                            <p>+91 97909 24754</p>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </aside>
                        </div>
                        <div class="widget-area col-xs-12 col-sm-12 col-md-6 col-lg-4">
                            <aside class="widget widget-text">
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-before-content">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-size-sm ttm-icon_element-style-square">
                                            <img width="28" height="28" class="img-fluid" src="images/icon-2.png" alt="">
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>Office Location</h3>
                                            <p>15,62nd street, Ashok Nagar, <br/>Chennai-600083</p>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </aside>
                        </div>
                        <div class="widget-area col-xs-12 col-sm-12 col-md-6 col-lg-4">
                            <aside class="widget widget-text">
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-before-content">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-size-sm ttm-icon_element-style-square">
                                            <img width="28" height="28" class="img-fluid" src="images/icon-3.png" alt="">
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>Email Address</h3>
                                            <p>admin@mekark.com</p>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer-text">
                <div class="row copyright">
                    <div class="col-md-12">
                        <div class="">
                            <span>Copyright © 2023&nbsp;<a href="#" class="ttm-textcolor-white">Mekark-Prefabirication All rights reserved.</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <ul id="menu-footer-menu" class="footer-nav-menu">
                            <li><a href="javascript:;">Terms & Condition</a></li>
                            <li><a href="javascript:;">Privacy Policy</a></li>
                            <li><a href="javascript:;">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

        <!--back-to-top start-->
        <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->
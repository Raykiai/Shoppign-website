<!doctype html>
<html lang="zxx">



<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-11">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="<?=base_url();?>assets/img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                                <li class="nav-item"> 
                                
                                <a class="nav-link" href="<?php echo base_url('Home/index'); ?>">Home</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('Home/about'); ?>">About Us</a>
                                    
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('Home/sneakers'); ?>">Sneakers</a>
                                   
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('Home/official'); ?>">Official</a>
                                    
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('Home/clothing'); ?>">Clothing</a>
                                   
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('Home/accessories'); ?>">Accessories</a>
                                  
                                </li>
                           
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex">
                            <div class="dropdown cart">
                                <a   href="<?php echo base_url('Home/cart'); ?>" id="navbarDropdown3" role="button"
                                   >
                                    <i class="ti-bag"></i>
                                </a>
                            
                            </div>
                           
                        </div>
                    </nav>
                </div>
            </div>
        </div>
       
    </header>
     <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner_slider">
                        <div class="single_banner_slider">
                            <div class="banner_text">
                                <div class="banner_text_iner">
                                    <h5>WETU ONLINE SHOPPING </h5>
                                    <h1>Retail and Wholesale.</h1>
                                    <a href="sneakers.html" class="btn_1">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- free shipping here -->
    <section class="shipping_details section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="img/icon/icon_1.png" alt="">
                        <h4>Delivery</h4>
                        <p>We offer delivery services to any location in Kenya.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="img/icon/icon_2.png" alt="">
                        <h4>Great quality</h4>
                        <p>Guaranteed great product quality. Items are exactly as presented.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="img/icon/icon_3.png" alt="">
                        <h4>Reliable Transactions</h4>
                        <p>Fast money payments and great cashback services.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="img/icon/icon_4.png" alt="">
                        <h4>Customer service</h4>
                        <p>Reliable and fast customer service. Available from mon-sat</p>
                    </div>
                </div>
            </div>
        </div>
    
    </section>
    <!-- free shipping end -->

    <!-- subscribe_area part start-->
    <section class="instagram_photo">
        <div class="container-fluid>
            <div class="row">
                <div class="col-lg-12">
                    <div class="instagram_photo_iner">
                        <div class="single_instgram_photo">
                            <img src="img/instagram/inst_1.png" alt="">
                            <a href="#"><i class="ti-instagram"></i></a> 
                        </div>
                        <div class="single_instgram_photo">
                            <img src="img/instagram/inst_2.png" alt="">
                            <a href="#"><i class="ti-instagram"></i></a> 
                        </div>
                        <div class="single_instgram_photo">
                            <img src="img/instagram/inst_3.png" alt="">
                            <a href="#"><i class="ti-instagram"></i></a> 
                        </div>
                        <div class="single_instgram_photo">
                            <img src="img/instagram/inst_4.png" alt="">
                            <a href="#"><i class="ti-instagram"></i></a> 
                        </div>
                        <div class="single_instgram_photo">
                            <img src="img/instagram/inst_5.png" alt="">
                            <a href="#"><i class="ti-instagram"></i></a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::subscribe_area part end::-- >
     <img src="<?php echo base_url('images/test.jpg'); ?>" />  
</body>

</html>
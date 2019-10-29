    
    <body class="bg-white">
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
        
        <!-- breadcrumb start-->
        <section class="breadcrumb breadcrumb_bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="breadcrumb_iner">
                            <div class="breadcrumb_iner_item">
                                <p>Home / About</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb start-->
    
        <!-- about part here -->
        <section class="about_part section_padding">
            <div class="container">
               
                <div class="row">
                  
                    <div class="col-md-6">
                        <div class="single_about_part">
                            <img  src="<?=base_url();?>assets/img/about_img_2.png" alt="#">
                            <h4>About Business</h4>
                            <p><b>Wetu Shopping</b> is a local business that deals in Clothing retail and wholesale.  </p>
							<p>Now recently upgraded to an online platform.</p>
							<br>
							<p>We have branches in:</p>
							<li>Moi Avenue, Leader Building. Retail</li>
							<li>Ngara, warehouse. Wholesale</li>
							<li>Thika, Wetu Trends. Retail</li>
							
							
							<p></p>
                        </div>
                    </div>
                     <div class="col-md-6">
                    <div class="single_about_part">
                        <img src="<?=base_url();?>assets/img/about_img_1.png" alt="#">
                        <h4>Activities</h4>
                    <p>We are only open from Mon-Sat. Business hours from 9AM-7Pm.<br>
                        Deliveries are only done Within Kenya. We will announce if we expand our services.<br>
                        Please Contact +254 720 633085 or +254 790 983024 Incase of any problems </p>   
                  
                   
                    </div>
                </div>
                </div>

               
            </div>
            
        </section>
        <!-- about part end -->
    
        <!-- free shipping here -->
        <section class="shipping_details section_padding border_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_shopping_details">
                            <img src="<?=base_url();?>assets/img/icon/icon_1.png" alt="">
                            <h4>Delivery</h4>
                            <p>We offer delivery services to any location in Kenya.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_shopping_details">
                            <img src="<?=base_url();?>assets/img/icon/icon_2.png" alt="">
                            <h4>Great quality</h4>
                            <p>Guaranteed great product quality. Items are exactly as presented.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_shopping_details">
                            <img src="<?=base_url();?>assets/img/icon/icon_3.png" alt="">
                            <h4>Reliable Transactions</h4>
                            <p>Fast money payments and great cashback services.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_shopping_details">
                            <img src="<?=base_url();?>assets/img/icon/icon_4.png" alt="">
                            <h4>Customer service</h4>
                            <p>Reliable and fast customer service. Available from mon-sat</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- free shipping end -->
        
       
        <!--::footer_part start::-->
        <footer class="footer_part">
            <div class="container">
                <div class="row justify-content-between">
                     <div class="col-sm-6 col-lg-3">
                        <div class="single_footer_part">
                            <h4>Social Media</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Facebook: Wetu_trends</a></li>
								 <li><a href="#">Instagram: WetuTrends_ke</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="single_footer_part">
                            <h4>Contact</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Phone: 0721404385</a></li>
                                <li><a href="#">Moi Ave, Leader Building</a></li>
                                <li><a href="#">P.o Box: 3800-00300</a></li>
                            </ul>
                        </div>
                    </div>
                   
                    <div class="col-sm-6 col-lg-4">
                        <div class="single_footer_part">
                          
                           
                            <div class="social_icon">
                                <a href="#"><i class="ti-facebook"></i></a>
                                <a href="#"><i class="ti-twitter-alt"></i></a>
                                <a href="#"><i class="ti-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </footer>
        <!--::footer_part end::-->
     </body>
    
    </html>

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
    

    <!--================Home Banner Area =================-->
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <p>Home / Official</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

                          
                    
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product_top_bar d-flex justify-content-between align-items-center">
                                <div class="single_product_menu product_bar_item">
                                    <h2>Official Wear</h2>
                                </div>
                                

                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_category_product">
                                <div class="single_category_img">
                                <img src="<?=base_url();?>assets/img/category/category_1.png" alt="">
                                    <div class="category_social_icon">
                                        <ul>
                                           
                                            <li><a href="#"><i class="ti-bag"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="category_product_text">
                                        <a href="single-product.html"><h5>Long Sleeve TShirt</h5></a>
                                        <p>$150.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                       
                       
                

            </div>
        </div>
    </section>
   </body>

</html>
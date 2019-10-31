
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
                        
                                <a  href="<?php echo base_url('Home/cart'); ?>" id="navbarDropdown3" role="button"
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
                            <p>Home / Login</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================login_part Area =================-->
    <section class="login_part section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>New to our Shop?</h2>
                            <p>Join today by creating an account and start shopping. </p>
                            <a class="btn_3" href="<?php echo base_url('Home/signup'); ?>" >Create an Account</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Welcome Back !<br>
                                Please Sign in now</h3>
                            <form class="row contact_form" action="<?= base_url('Main/loginValidation')?>" method="post" novalidate="novalidate">
                                <div class="col-md-12 form-group p_star">
                                    <input type="email" class="form-control" id="email" name="email" value=""
                                        placeholder="Email">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="password" value=""
                                        placeholder="Password">
                                </div>
                                <div class="col-md-12 form-group">
                                  
                                    <button type="submit" value="submit" class="btn_3">
                                        log in
                                    </button>
                                  
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->
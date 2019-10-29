
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
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="sneakers.html">Sneakers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="official.html">Official Wear</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="clothing.html">Clothing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="accessories.html">Accessories</a>
                                </li>
                                
                              
                           
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex">
                            <div class="dropdown cart">
                                <a  href="cart.html" id="navbarDropdown3" role="button"
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
                            <p>Home / Sign Up</p>
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
                            <h2>Already Have an Account?</h2>
                            <p>Login and continue Shopping </p>
                            <a  class="btn_3" href="<?php echo base_url('Home/login'); ?>" >Log In</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Sign Up.
                               </h3>
                
                            <form class="row contact_form" action="<?php echo base_url('Home/account_validation'); ?> " method="post" novalidate="novalidate">
                               
                               
                                <div class="col-md-12 form-group p_star">
                                <?php echo form_error('first_name'); ?>
                                    <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo   set_value('first_name'); ?>"
                                        placeholder="First Name">
                                </div>

                                 <div class="col-md-12 form-group p_star">
                                 <?php echo form_error('last_name'); ?>
                                    <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo   set_value('last_name'); ?>"
                                        placeholder="Last Name">
                                </div>

                                <div class="col-md-12 form-group p_star">
                                <?php echo form_error('email'); ?>
                                    <input type="email" class="form-control" id="email" name="email" value="<?php echo   set_value('email'); ?>"
                                        placeholder="Email">
                                </div>

                                <div class="col-md-12 form-group p_star">
                                <?php echo form_error('phone_number'); ?>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?php echo   set_value('phone_number'); ?>"
                                        placeholder="Phone Number">
                                </div>

                                <div class="col-md-12 form-group p_star">
                                <?php echo form_error('location'); ?>
                                    <input type="text" class="form-control" id="location" name="location" value="<?php echo   set_value('location'); ?>"
                                        placeholder="Location">
                                </div>

                                <div class="col-md-12 form-group p_star">
                                <?php echo form_error('password'); ?>
                                    <input type="password" class="form-control" id="password" name="password" value="<?php echo   set_value('password'); ?>"
                                        placeholder="Password">
                                </div>

                                <div class="col-md-12 form-group p_star">
                                <?php echo form_error('password_confirm'); ?>
                                    <input type="password" class="form-control" id="password_confirm" name="password_confirm" value="<?php echo   set_value('password_confirm'); ?>"
                                        placeholder="Confirm Password">
                                </div>

                                <div class="col-md-12 form-group">
                                  
                                <button type="clear" class="btn btn-default">Clear</button>
                                
                                    <button type="submit" value="submit" class="btn_3">
                                        Create Account
                                    </button>
                                  
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
           
            
        </div>
    </section>
    <!--================login_part end =================-->

   

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
                                <li>
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
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Add Products
                               </h3>
                
                            <form class="row contact_form" action="<?php echo base_url('wetuAdmin/form_validation'); ?> " method="post" novalidate="novalidate">
                               
                               
                                <div class="col-md-12 form-group p_star">
                             
                                    <input type="text" class="form-control" id="product_name" name="product_name" value="<?php echo   set_value('product_name'); ?>"
                                        placeholder="Product Name">
                                </div>
                                <div class="col-md-12 form-group p_star">
                             <label></label>
                                    <input type="file" class="form-control" id="pic" name="pic" value="<?php echo   set_value('pic'); ?>"
                                        placeholder="Photo">
                                </div>

                                 <div class="col-md-12 form-group p_star">
                             
                                    <input type="text" class="form-control" id="description" name="description" value="<?php echo   set_value('description'); ?>"
                                        placeholder="Description">
                                </div>

                                <div class="col-md-12 form-group p_star">
                              
                                    <input type="text" class="form-control" id="price" name="price" value="<?php echo   set_value('price'); ?>"
                                        placeholder="Price">
                                </div>
                                <div class="col-md-12 form-group p_star">
                             
                             <input type="text" class="form-control" id="stock" name="stock" value="<?php echo   set_value('stock'); ?>"
                                 placeholder="Stock available">
                         </div>

                             
                                <div class="col-md-12 form-group p_star">
                            
                                   <label><p>Choose a category: </p> </label> <select class="option" name="category_id" style="width:100%;
                                    height:35px;">
                                        <option value="1">Sneakers</option>
                                        <option value="2">Official</option>
                                        <option value="3">Clothing</option>
                                        <option value="4">Accessories</option>
                                        
                                    </select>
                                </div>

                             

                                <div class="col-md-12 form-group">
                                  
                             
                                
                                    <button type="submit" value="submit" class="btn_3">
                                       Save Producs
                                    </button>
                                  
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
           
            
        </div>
    </section>
    <!--================login_part end =================-->

   
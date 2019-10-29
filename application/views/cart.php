<!doctype html>
<html lang="zxx">

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
                          <p>Home/Cart</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- breadcrumb start-->

  <!--================Cart Area =================-->
  <section class="cart_area section_padding">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                    
                            
                      <img src="<?=base_url();?>assets/img/arrivel/arrivel_1.png" alt="" />
                    </div>
                    <div class="media-body">
                      <p>Minimalistic shop for multipurpose use</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>$360.00</h5>
                </td>
                <td>
                  <div class="product_count">
                  
                    <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                    <input class="input-number" type="text" value="1" min="0" max="10">
                    <span class="input-number-increment"> <i class="ti-plus"></i></span>
                  </div>
                </td>
                <td>
                  <h5>$720.00</h5>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img src="<?=base_url();?>assets/img/arrivel/arrivel_2.png" alt="" />
                    </div>
                    <div class="media-body">
                      <p>Minimalistic shop for multipurpose use</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>$360.00</h5>
                </td>
                <td>
                  <div class="product_count">
                      <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                      <input class="input-number" type="text" value="1" min="0" max="10">
                      <span class="input-number-increment"> <i class="ti-plus"></i></span>
                  </div>
                </td>
                <td>
                  <h5>$720.00</h5>
                </td>
              </tr>
              <tr class="bottom_button">
                <td>
                  <a class="btn_1" href="#">Update Cart</a>
                </td>
                <td></td>
                <td></td>
                <td>
                
                </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>
                  <h5>Subtotal</h5>
                </td>
                <td>
                  <h5>$2160.00</h5>
                </td>
              </tr>
              <tr class="shipping_area">
                <td></td>
                <td></td>
                <td>
                  <h5>Extra Charges</h5>
                </td>
                <td>
                  <div class="shipping_box">
                    <ul class="list">
                     
                      
                      <li>
                        Delivery: Ksh 350.00
                        <input type="radio" aria-label="Radio button for following text input">
                      </li>
                     
                    </ul>
                   
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="checkout_btn_inner float-right">
            <a class="btn_1" href="#">Clear Cart</a>
            <a class="btn_1 checkout_btn_1" href="<?php echo base_url('Home/checkout'); ?>">Proceed to checkout</a>
          </div>
        </div>
      </div>
  </section>
  <!--================End Cart Area =================-->
</body>

</html>
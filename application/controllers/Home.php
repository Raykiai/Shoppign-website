<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Home extends CI_Controller{

     
        public function index(){
            $this->load->view('shop_header');
          $this->load->view('index');
            $this->load->view('shop_footer');

        }
      public function signup(){
        $this->load->view('shop_header');
           $this->load->view('signup');
           $this->load->view('shop_footer');

       }
       public function login(){
        $this->load->view('shop_header');
          $this->load->view('login');
        $this->load->view('shop_footer');
       }

       public function sneakers(){
        $this->load->view('shop_header');
          $this->load->view('sneakers');
        $this->load->view('shop_footer');
       }
       public function official(){
        $this->load->view('shop_header');
          $this->load->view('official');
        $this->load->view('shop_footer');
       }
       public function accessories(){
        $this->load->view('shop_header');
          $this->load->view('accessories');
        $this->load->view('shop_footer');
       }
       public function clothing(){
        $this->load->view('shop_header');
          $this->load->view('clothing');
        $this->load->view('shop_footer');
       }
       public function about(){
        $this->load->view('shop_header');
          $this->load->view('about');
        $this->load->view('shop_footer');
       }
       public function cart(){
        $this->load->view('shop_header');
          $this->load->view('cart');
        
       }
       public function checkout(){
        $this->load->view('shop_header');
          $this->load->view('checkout');
        
       }
     public function dash(){
      $this->load->view('shop_header');
      $this->load->view('dash');
      $this->load->view('shop_footer');
     }
     public function add_products(){
      $this->load->view('shop_header');
      $this->load->view('add_products');
     
     }

      
      
    }
     
?>
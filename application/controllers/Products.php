<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        
        // Load cart library
        $this->load->library('cart');
        
        // Load product model
        $this->load->model('product');
    }
    
    function index(){
        $data = array();
        
        // Fetch products from the database
        $data['tbl_products'] = $this->product->getRows();
        
        // Load the product list view
        $this->load->view('products/index', $data);
    }
    
    function addToCart($proID){
        
        // Fetch specific product by ID
        $product = $this->product->getRows($proID);
        
        // Add product to the cart
        $data = array(
            'product_id'    => $product['product_id'],
            'product_name'    => $product['product_name'],
            'description'    => $product['description'],
            'pic'    => $product['pic'],
            'stock' => $product['stock'],
            'price' => $product['price']
        );
        $this->cart->insert($data);
        
        // Redirect to the cart page
        redirect('Home/sneakers');
    }
    
}
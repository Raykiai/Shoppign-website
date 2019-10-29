<?php
class Auth extends CI_Controller{

   public function __construct(){
        parent::__construct();
        $this->load->model('users_model');
      }

       public function process_login(){
         $email=$this->input->post('email');
         $password=$this->input->post('password');
         $result=$this->login_model->login($email,$password);
         if ($result==true){
          echo "<script type='text/javascript'>alert('Success');</script>";
          redirect('Home/sneakers');
          
         }else{
          echo "<script type='text/javascript'>alert('Failed');</script>";die();
          redirect('Home/login');
         }

       }
    }
?>

<?php
defined('BASEPATH') or exit ('No direct script access allowed');
class Main extends CI_Controller{
    function _construct(){
        parent::_construct();
        $this->load->model('user_model');
       }
    public function account_validation(){
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|callback_check_availability');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'trim|required');
		
        $this->form_validation->set_rules('location', 'Location', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
		$this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|md5|matches[password]');
 
        if ($this->form_validation->run()==FALSE){
            $this->account();
        
        }
        else{
            $this->user_model->account_insert();
            redirect('Home/login', 'refresh');
        }
    }
public function check_availability(){
    if ($this->user_model->username_available()){
        return true;
    }
    else{
        $this->form_validation->set_message('check_availability', 'The email adress already exists');
    }
}
public function account_valid(){
    //form validation
    $this->user_model->account_validate();
    if($this->user_model->account_validate()==FALSE){
        $this->account();
    }
    else{
        $this->user_model->account_insert();
        redirect('Home/login', 'refresh');
    }
}


}


?>
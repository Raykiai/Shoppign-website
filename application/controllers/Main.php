<?php
    class Main extends CI_Controller
	{
		public function __construct()
		{
	         parent::__construct();
			 $this->load->helper('url');
			 $this->load->model('user_model');
			 //$this->load->view('Login');
			 //$this->load->library('form_validation');
			 //$this->session->keep_flashdata('message');

		}
		

	
        public function logout() {
            $user_data = $this->session->all_userdata();
            foreach ($user_data as $key=>$value) {
                if($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                    $this->session->unset_userdata($key);
                }
            }
            $this->session->sess_destroy();
            redirect('Home/login');
        }

		public function loginValidation(){

			$result = $this->user_model->can_login($this->input->post('email'), $this->input->post('password'));
			$role_id = $this->session->userdata('role_id');

			if($result == 'role_id'){//if there's no error message:
				//redirect based on user type
				if($role_id == "2"){
					redirect('Home/cart');
				}elseif( $role_id == "1"){
					redirect('Home/dash');
				}
				
				}else{//remain on login page and set flashdata message as error(see login view)
					$this->session->set_flashdata('message',$result);
					redirect('Home/login');
			}

		}
		   
         
		   function insert_validation()
		   {
			   $this->load->library('form_validation');
			   $this->form_validation->set_rules('first_name','first name','required|trim');
               $this->form_validation->set_rules('last_name','last name','required|trim');
			   $this->form_validation->set_rules('email','email','required|trim');
			   $this->form_validation->set_rules('phone_number','phone number','required|trim');
			   $this->form_validation->set_rules('location','location','required|trim');
			   $this->form_validation->set_rules('password','password','required|trim');
			   $this->form_validation->set_rules('password_confirm','confirm password','required|trim|matches[password]');
			  
                 
			   if($this->form_validation->run()==false)
			   {
                    #if form validation fails, redirect to (reload) signup page
				    redirect('Home/signup'); 
			   }
			   else
			   {
                   #form validation successful
				   $pass=$this->input->post('password');
				   $pass_hash=password_hash($pass,PASSWORD_DEFAULT);
				   $data=array(
				       
					
                        'first_name'=>$this->input->post('first_name'),
                        'last_name'=>$this->input->post('last_name'),
                        'email'=>$this->input->post('email'),
                        'phone_number'=>$this->input->post('phone_number'),
                        'location'=>$this->input->post('location'),
						'password'=>$pass_hash
				   );
				   $this->user_model->insert($data);
				   $this->session->set_flashdata('action','Data Inserted');
				   redirect('Home/login');
			   }
           }
           




           

	}
	?>

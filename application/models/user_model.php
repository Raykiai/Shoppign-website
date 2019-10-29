<?php 
	Class User_model extends CI_Model{



		

		public function login_validate(){
			$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|callback_login_validate_credentials');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			if($this->form_validation->run()==FALSE){
				return FALSE;
			}
			else{
				return true;
			}

		}

		public function can_log_in(){
			$this->db->where('email', $this->input->post('email'));
			$this->db->where('password', $this->input->post('password'));
			$query=$this->db->get('tbl_users');

			if($query->num_rows()==1){
				return true;
			}else{
				return false;
			}
		}

		public function username_available(){
			$this->db->where('email', $this->input->post('email'));
			$query=$this->db->get('tbl_users');

			if($query->num_rows()==1){
				return false;
			}else{
				return true;
			}

		}

		function account_validate(){
			$this->form_validation->set_rules('first-name', 'First Name', 'trim|required');
			$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
			$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
			$this->form_validation->set_rules('location', 'Location', 'trim|required');
            $this->form_validation->set_rules('phone_number', 'Phone Number', 'trim|required');
			
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
			$this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|matches[password]');

			if ($this->form_validation->run()==FALSE) {

				return FALSE;
			}
			else{
				return true;
			}
			
		}

		function account_insert(){
			$first_name=$this->input->post('first_name');
			$last_name=$this->input->post('last_name');
            $email=$this->input->post('email');
            $location=$this->input->post('location');
			$phone_number=$this->input->post('phone_number');
			$password=$this->input->post('password');

			$data=array(
				'first_name'=>$first_name,
				'last_name'=>$last_name,
                'email'=>$email,
                'phone_number'=>$phone_number,
				'location'=>$location,
				'password'=>$password);
			$this->db->insert('tbl_users', $data);


		}
		/*function getAll(){
			$results=$this->db->get('products')->result();
			foreach ($results as $result) {
				if($result->option_values){
					$result->option_values=explode(',', $result->option_values);
				}
				
			}
			return $results;
        }
   
		
		 function get($id){
			$results=$this->db->get_where('products', array('id'=>$id))->result();
			$result=$results[0];	

			if($result->option_values){
					$result->option_values=explode(',', $result->option_values);
				}		
				return $result;

        }
             */
	}
 ?>
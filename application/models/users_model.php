<?php
class Users_model extends CI_Model{
    public function login($email,$password){
        $this->db->select();
        $this->db->from('tbl_users');
        $this->db->where(['email'=>$email]);
        $query=$this->db->get()->row_array();
        // foreach ($query as $key => $result) {
            if(password_verify($password, $query['password'])){
                $data=array(
                    'user_id'=>$query['user_id'],
                    'email'=>$query['email']
                );
                $this->session->set_userdata($data);
                return true;
            }
            else {
                return false;
            }

        
    return false;
    }
}

?>
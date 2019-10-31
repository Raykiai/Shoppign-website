<?php
defined ('BASEPATH') OR exit ('no direct script access allowed');

class wetuAdmin extends CI_Controller{

public function form_validation(){
	

$this-> load->library('form_validation');
$this-> form_validation->set_rules("product_name","product name",'required');
$this-> form_validation->set_rules("pic","picture",'required');
$this-> form_validation->set_rules("description","description",'required');
$this-> form_validation->set_rules("stock","stock",'required');
$this-> form_validation->set_rules("price","price",'required');

$this-> form_validation->set_rules("category_id","category",'required');

if($this->form_validation->run())
{
$this-> load-> model('wetuAdmin_model');

   
$data = array (
"product_name" => $this->input->post("product_name"),
"pic" => $this->input->post ("pic"),

"description" =>$this->input->post("description"),
"stock" => $this->input->post("stock"),
"price" => $this->input->post("price"),
"category_id" =>$this->input->post("category_id")
);
 
 $this->wetuAdmin_model->insert_data($data);

redirect('Home/add_products');

} 



}
}
?>

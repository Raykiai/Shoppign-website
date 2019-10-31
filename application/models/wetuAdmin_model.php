<?php

class WetuAdmin_model extends CI_Model
{

public function insert_data($data)
{
$this -> db -> insert("tbl_products",$data);
}

}


?>
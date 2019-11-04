<?php
class Cart_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all()
    {
        $query = $this->db->query("SELECT * FROM tbl_products ORDER BY id ASC");
        /*foreach ($query->result() as $row)
        {
                echo $row->name;
                echo $row->price;
                echo $row->image;
        }*/
        //var_dump($query);
        return $query->result_array();
    }


    // Insert order date with customer id in "orders" table in database.
    public function insert_order($data)
    {
        $this->db->insert('tbl_orders', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }

}
?>

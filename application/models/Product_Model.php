<?php

class Product_Model extends CI_Model
{ 
	    public function __construct(){
	    	parent::__construct();
	    }

        function get_all_products()
        {
            return $this->db->get('product')->result();
        }

        function get_product_by_id($id)
        {
            return $this->db->where('id', $id)->get('product')->row();
        }

        public function get_limited_products()
        {
            $query = $this->db->query('SELECT * FROM product LIMIT 6'); 
            return $query->result();
        }        
        

}

?>
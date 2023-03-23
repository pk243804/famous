<?php

class Pages_Model extends CI_Model
{ 
	    public function __construct(){
	    	parent::__construct();
	    }

        public function get_slider()
        {
            $query = $this->db->get("home"); 
            return $query->result();
        }

        public function get_blog()
        {
            $query = $this->db->get("blog"); 
            return $query->result();
        }    

        public function new_arrivals()
        {
            $query = $this->db->get("new_arrivals"); 
            return $query->result();
        }  
}

?>
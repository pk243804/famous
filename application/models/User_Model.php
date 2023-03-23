<?php

class User_Model extends CI_Model
{ 
	    public function __construct(){
	    	parent::__construct();
	    }

        public function insert_records()
        {
            $data = array(  
                    'name'   => $this->input->post('name'),  
                    'email'  => $this->input->post('email'),  
                    'password' => $this->input->post('password'),
                    'address' => $this->input->post('address')
                    );    
            $this->db->insert('user',$data);  
        }

        public function login_data()
        {
			$email=$this->input->post('email');
			$password=$this->input->post('password');
	
			$this->db->where('email', $email);
			$this->db->where('password', $password);
              $query = $this->db->get('user');
              return $query->result();
		}	
}

?>
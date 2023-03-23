<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() 
    {
        parent:: __construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('cart');
        $this->load->library('session');
        $this->load->model('Pages_Model');
        $this->load->model('Product_Model');
        $this->load->model('User_Model');
    }

	public function index()
	{
	    $result['res'] = $this->Pages_Model->get_slider();
	    $result['val'] = $this->Pages_Model->get_blog();
	    $result['que'] = $this->Pages_Model->new_arrivals();
	    $result['data'] = $this->Product_Model->get_limited_products();
		$this->load->view('home', $result);
	}
    public function about()
	{
		$result['val'] = $this->Pages_Model->get_blog();
	    $result['que'] = $this->Pages_Model->new_arrivals();
		$this->load->view('about', $result);
	}
	public function blog()
	{
		$result['val'] = $this->Pages_Model->get_blog();
		$this->load->view('blog', $result);
	}
    public function product()
    {
        $data['data'] = $this->Product_Model->get_all_products();           
        $this->load->view('product', $data);
    }
    





    ///////////////user login and register/////////////
    public function account()
	{
	    $result['que'] = $this->Pages_Model->new_arrivals();
	  if (isset($_POST['insert'])) {
	    $sql = $this->User_Model->insert_records();
		    if ($sql == TRUE) {
		       echo "<script> alert('Successfully Registered'); </script>";
		    } else{
	           echo "<script> alert('Not Registered'); </script>";
		    }
	  } else { 
		$this->load->view('account', $result);
	  }
	}
	public function login()
	{
	    $result['que'] = $this->Pages_Model->new_arrivals();

	  if(isset($_POST['login'])){
	    $sql=$this->User_Model->login_data();
		    if($sql){ 
		    echo "<script> alert('Logged in'); </script>";	
		    } else{
		  	echo "<script> alert('Invalid Details'); </script>";
		    }
	  }else{
	  	$this->load->view('login', $result);
	  }
	}
	
    /////////////////////////////////////////////
    public function index()
    {
        //Get all data from database
        $data['products'] = $this->cart_model->get_all();
        //send all product data to "welcome_message", which fetch from database.
        $this->load->view('welcome_message',$data);
    }



    function add()
    {
    // Set array for send data.
    $insert_data = array(
                'id' => $this->input->post('id'),
                'name' => $this->input->post('name'),
                'price' => $this->input->post('price'),
                'image' => $this->input->post('image'),
                'qty' => 1
                );
    // This function add items into cart.
    $this->cart->insert($insert_data);
    echo $fefe = count($this->cart->contents());
    // This will show insert data in cart.
    }

    


    function remove() {
    $rowid = $this->input->post('rowid');
    // Check rowid value.
    if ($rowid==="all"){
    // Destroy data which store in session.
        $this->cart->destroy();
    }else{
    // Destroy selected rowid in session.
    $data = array(
            'rowid' => $rowid,
            'qty' => 0
            );
    // Update cart data, after cancel.
    $this->cart->update($data);
    }
    echo $fefe = count($this->cart->contents());
    // This will show cancel data in cart.
    }




    function update_cart(){
    // Recieve post values,calcute them and update
    $rowid = $_POST['rowid'];
    $price = $_POST['price'];
    $amount = $price * $_POST['qty'];
    $qty = $_POST['qty'];

    $data = array(
        'rowid' => $rowid,
        'price' => $price,
        'amount' => $amount,
        'qty' => $qty
        );
    $this->cart->update($data);
    echo $data['amount'];
    }

    function billing_view(){
    // Load "billing_view".
    $this->load->view('billing_view');
    }

    public function save_order()
    {
    // This will store all values which inserted from user.
    $customer = array(
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'address' => $this->input->post('address'),
        'phone' => $this->input->post('phone')
        );
    // And store user information in database.
    $cust_id = $this->cart_model->insert_customer($customer);
    $order = array(
        'date' => date('Y-m-d'),
        'customerid' => $cust_id
        );
    $ord_id = $this->cart_model->insert_order($order);
    if ($cart = $this->cart->contents()){
    foreach ($cart as $item){
    $order_detail = array(
        'orderid' => $ord_id,
        'productid' => $item['id'],
        'quantity' => $item['qty'],
        'price' => $item['price']
        );
    // Insert product imformation with order detail, store in cart also store in database.
    $cust_id = $this->cart_model->insert_order_detail($order_detail);
        }
    }
    $this->cart->destroy();
    // After storing all imformation in database load "billing_success".
    $this->load->view('billing_success');
    }
    
    public function opencart()
    {
        $data['cart']  = $this->cart->contents();
        $this->load->view("cart_modal", $data);
    }

}

?>
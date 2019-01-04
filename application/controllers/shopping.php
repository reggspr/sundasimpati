<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Shopping extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('billing_model');
                $this->load->library('cart');
	}

	public function index()
	{	
                //Get all data from database
		$data['products'] = $this->billing_model->get_all();
                //send all product data to "shopping_view", which fetch from database.		
		$this->load->view('v_delivery', $data);
	}
	
	
	 function add()
	{
              // Set array for send data.
		$insert_data = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			'price' => $this->input->post('price'),
			'qty' => 1
		);		

                 // This function add items into cart.
		$this->cart->insert($insert_data);
	      
                // This will show insert data in cart.
		redirect('shopping');
	}
	
	function remove($rowid)
	{
                    // Check rowid value.
		if ($rowid==="all"){
                       // Destroy data which store in  session.
			$this->cart->destroy();
		}else{
                    // Destroy selected rowid in session.
			$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);
                     // Update cart data, after cancle.
			$this->cart->update($data);
		}
		
                 // This will show cancle data in cart.
		redirect('shopping/show_cart');
	}
	
	function update_cart(){
                
                // Recieve post values,calcute them and update
                $cart_info =  $_POST['cart'] ;
 		foreach( $cart_info as $id => $cart)
		{	
                    $rowid = $cart['rowid'];
                    $price = $cart['price'];
                    $amount = $price * $cart['qty'];
                    $qty = $cart['qty'];
                    
                    	$data = array(
				'rowid'   => $rowid,
                                'price'   => $price,
                                'amount' =>  $amount,
				'qty'     => $qty
			);
             
			$this->cart->update($data);
		}
		redirect('shopping/show_cart');        
	}	
        function billing_view(){
                // Load "billing_view".
		$this->load->view('billing_view');
        }
        
    public function save_order()
	{
          // This will store all values which inserted  from user.
		$customer = array(
			'nama_pemesan' 		=> $this->input->post('name'),
			'no_hp' 	=> $this->input->post('nohp'),
			'alamat' 	=> $this->input->post('alamat'),
			'pesanan' 	=> $this->input->post('pesanan'),
			'total' => $this->input->post('total'),
			'tgl_pesan' => $this->input->post('tgl_pesan'),
			'status_delivery' => $this->input->post('status')
		);		
                 // And store user imformation in database.
		$this->billing_model->insert_customer($customer);
		$this->cart->destroy();
		
	      
                // After storing all imformation in database load "billing_success".
                $this->load->view('billing_success');
	}
	public function show_cart()
	{
		$this->load->view('headerhome');
		$this->load->view('navhome');
		$this->load->view('cart_view');
		$this->load->view('footerhome');
	}
}
<?php
class Cart extends CI_Controller{
	public $paypal_data = '';
	public $tax;
	public $shipping;
	public $total = 0;
	public $grant_total;
	
	/*
	* Cart Index
	*/
	public function index(){
		//Load View
		$data['main_content'] = 'cart';
		$this->load->view('layouts/main',$data);
	}
	
	/*
	* add to Carts
	*/
	public function add(){
		//Item Data
		$data = array(
				'id' => $this->input->post('item_number'),
				'qty' => $this->input->post('qty'),
				'price' => $this->input->post('price'),
				'name' => $this->input->post('title')
		);
		//print_r($data);
		
		//Insert Into Cart
		$this->cart->insert($data);
		
		redirect('products');
	}
	public function update($in_cart = null){
		$data = $_POST;
		$this->cart->update($data);
		
		//show cart page
		redirect('products','refresh');
	}
	
}
?>
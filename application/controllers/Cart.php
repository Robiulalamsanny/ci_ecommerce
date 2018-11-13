<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
			{
				parent::__construct();
				// $this->load->library('cart');
			}


	public function add_to_cart()
	{


		$qty = $this->input->post('qty');
		$product_id = $this->input->post('product_id');
		$products_info = $this->welcome_model->selsct_product_by_product_id($product_id);
		$data = array(
        'id'      => $products_info->product_id,
        'qty'     => $qty,
        'price'   => $products_info->product_new_price,
        'name'    => $products_info->product_name,
        'options' => array('image' =>  $products_info->product_image)
		);

		$this->cart->insert($data);
		
		redirect('cart/cart_details');
	}


	public function cart_details()
	{
		$data=array();
		$data['title'] = "Cart Details";
		 // $data['products_info'] = $this->welcome_model->selsct_product_by_product_id($product_id);
		 // $data['all_featured_image'] = $this->welcome_model->all_featured_image();
		 $data['main_content'] = $this->load->view('pages/cart','',true);
		 $this->load->view('master',$data);
	}


	public function update_cart($rowid)
	{
		$qty = $this->input->post('qty');
		$rowid = $this->input->post('rowid');


		$data = array(
        'rowid' => $rowid,
        'qty'   => $qty
		);

		$this->cart->update($data);

		redirect('cart/cart_details');

	}



	public function deleteCart($rowid)
	{

		$data = array(
        'rowid' => $rowid,
        'qty'   => 0
		);

		$this->cart->update($data);
		redirect('cart/cart_details');
	}













}

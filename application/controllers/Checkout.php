<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	// public function __construct()
	// 		{
	// 			parent::__construct();
	// 			$this->load->model('checkout_model');
	// 		}



	public function customer_details()
	{
		 $data=array();
		 $data['title'] = "Checkout";
		 $data['all_featured_image'] = $this->welcome_model->all_featured_image();
		 $data['main_content'] = $this->load->view('pages/checkout',$data,true);
		 $this->load->view('master',$data);
	}

	public function save_customer_info()
	{
		$data = array();
		$data['customer_first_name'] = $this->input->post('customer_first_name',true);
		$data['customer_last_name'] = $this->input->post('customer_last_name',true);
		$data['customer_email_address'] = $this->input->post('customer_email_address',true);
		$data['customer_password'] = $this->input->post('customer_password',true);
		$data['customer_phone_number'] = $this->input->post('customer_phone_number',true);
		$data['customer_address'] = $this->input->post('customer_address',true);

		$customer_id = $this->checkout_model->save_customer_info($data);
		$sdata = array();
		$sdata['customer_id'] = $customer_id;
		$this->session->set_userdata($sdata);
		redirect('checkout/shipping');
	}







	public function shipping()
	{
		 $data=array();
		 $data['title'] = "Shipping";
		 $data['all_featured_image'] = $this->welcome_model->all_featured_image();
		 $data['main_content'] = $this->load->view('pages/shipping',$data,true);
		 $this->load->view('master',$data);
	}


	public function save_shipping_info()
	{
		$data = array();
		$data['shipping_first_name'] = $this->input->post('customer_first_name',true);
		$data['shipping_last_name'] = $this->input->post('customer_last_name',true);
		$data['shipping_email_address'] = $this->input->post('customer_email_address',true);
		$data['shipping_password'] = $this->input->post('customer_password',true);
		$data['shipping_phone_number'] = $this->input->post('customer_phone_number',true);
		$data['shipping_address'] = $this->input->post('customer_address',true);

		$shipping_id = $this->checkout_model->save_shipping_info($data);
		$sdata = array();
		$sdata['shipping_id'] = $shipping_id;
		$this->session->set_userdata($sdata);
		redirect('checkout/payment');
	}


	public function payment()
	{
		 $data=array();
		 $data['title'] = "payment";
		 // $data['all_featured_image'] = $this->welcome_model->all_featured_image();
		 $data['main_content'] = $this->load->view('pages/payment',$data,true);
		 $this->load->view('master',$data);
	}


	public function save_payment_info()
	{
		$data = array();
		$data['payment_method'] = $this->input->post('payment_method',true);
		$payment_id = $this->checkout_model->save_payment_info($data);

		$sdata = array();
		$sdata['payment_id'] = $payment_id;
		$this->session->set_userdata($sdata);



		$odata = array();
		$odata['customer_id'] = $this->session->userdata('customer_id');
		$odata['shipping_id'] = $this->session->userdata('shipping_id');
		$odata['payment_id'] = $this->session->userdata('payment_id');
		$odata['order_total'] = $this->session->userdata('total');
		$order_id = $this->checkout_model->save_order_info($odata);

		$contents = $this->cart->contents();

		$od_data = array();
		foreach ($contents as  $v_contents) {
			$od_data['order_id'] = $order_id;
			$od_data['product_id'] = $v_contents['id'];
			$od_data['product_name'] = $v_contents['name'];
			$od_data['product_price'] = $v_contents['price'];
			$od_data['product_sales_quantity'] = $v_contents['qty'];
			$order_details_id = $this->checkout_model->save_order_details_info($od_data);
		}

		$contents = $this->cart->destroy();
		
		redirect('checkout/confirm');
	}


	public function confirm()
	{
		$data=array();
		 $data['title'] = "Confirm";
		 // $data['all_featured_image'] = $this->welcome_model->all_featured_image();
		 $data['main_content'] = $this->load->view('pages/confirm',$data,true);
		 $this->load->view('master',$data);
	}





	public function logout()
	{
		$this->session->unset_userdata('customer_id');
		// $this->session->unset_userdata('shipping_id');
		// $this->session->unset_userdata('payment_id');
		$this->cart->destroy();
		// $sdata= array();
		// $sdata['message'] = "You are sucessfully logout !";
		// $this->session->set_userdata($sdata);
		redirect('home');

	}









}

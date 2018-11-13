<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {

	// public function __construct()
	// 		{
	// 			parent::__construct();
	// 			$this->load->model('checkout_model');
	// 		}



	public function manage_invoice()
	{
		 $data=array();
		 
		 $data['all_invoice'] = $this->invoice_model->select_all_invoice();
		 // echo "<pre>";
		 // print_r($data);
		 // exit();
		 $data['admin_main_content'] = $this->load->view('admin/pages/manage_invoice',$data,true);
		 $this->load->view('admin/admin_master',$data);
	}


	public function view_invoice($order_id)
	{
	 $data=array();	 
	 $order_info = $this->invoice_model->order_info_by_id($order_id);
	 $data['order_information'] = $this->invoice_model->order_information_info_by_id($order_id);
	 $data['customer_info'] = $this->invoice_model->customer_info_by_id($order_info->customer_id);
	 $data['shipping_info'] = $this->invoice_model->shipping_info_by_id($order_info->shipping_id);
	 $data['order_details'] = $this->invoice_model->order_details_info_by_id($order_info->order_id);
	 $data['admin_main_content'] = $this->load->view('admin/pages/view_invoice',$data,true);
	 $this->load->view('admin/admin_master',$data);
	}








}

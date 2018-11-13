<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout_model extends CI_Model {



	public function save_customer_info($data)
	{
		$this->db->insert('tbl_customer',$data);
		$customer_id = $this->db->insert_id();
		return $customer_id;
	}


	public function save_shipping_info($data)
	{
		$this->db->insert('tbl_shipping',$data);
		$shipping_id = $this->db->insert_id();
		return $shipping_id;
	}


	public function save_payment_info($data)
	{
		$this->db->insert('tbl_payment',$data);
		$payment_id = $this->db->insert_id();
		return $payment_id;
	}

	public function save_order_info($odata)
	{
		$this->db->insert('tbl_order',$odata);
		$order_id = $this->db->insert_id();
		return $order_id;
	}

	public function save_order_details_info($od_data)
	{
		$this->db->insert('tbl_order_details',$od_data);
		$order_details_id = $this->db->insert_id();
		return $order_details_id;
	}


}
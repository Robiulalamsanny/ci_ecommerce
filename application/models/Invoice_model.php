<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice_model extends CI_Model {


	public function select_all_invoice()
	{
	return	$this->db->select('*')
				 ->from('tbl_order')
				 ->join('tbl_customer','tbl_customer.customer_id=tbl_order.customer_id')
				 ->join('tbl_shipping','tbl_shipping.shipping_id=tbl_order.shipping_id')
				 ->join('tbl_order_details','tbl_order_details.order_id=tbl_order.order_id')
				 ->get()
				 ->result();
	}

	public function order_info_by_id($order_id)
	{
		return $this->db->select('*')
				 ->from('tbl_order')
				 ->where('order_id',$order_id)
				 ->get()
				 ->row();
	}


	public function customer_info_by_id($customer_id)
	{
		return $this->db->select('*')
				 ->from('tbl_customer')
				 ->where('customer_id',$customer_id)
				 ->get()
				 ->row();
	}


	public function order_information_info_by_id($order_id)
	{
		return $this->db->select('*')
				 ->from('tbl_order')
				 ->where('order_id',$order_id)
				 ->get()
				 ->row();
	}

	public function shipping_info_by_id($shipping_id)
	{
		return $this->db->select('*')
				 ->from('tbl_shipping')
				 ->where('shipping_id',$shipping_id)
				 ->get()
				 ->row();
	}


	public function order_details_info_by_id($order_id)
	{
		return $this->db->select('*')
				 ->from('tbl_order_details')
				 ->where('order_id',$order_id)
				 ->get()
				 ->row();
	}


}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model {

public function __construct()
	{
		parent::__construct();
		$this->load->model('welcome_model');
		
		
	}

				/***********************************/
				/*     *****  Category  *****      */
				/***********************************/

	



	public function	all_published_product_info()
	{
		$this->db->select('*');
		$this->db->from('tbl_product');
		$this->db->where('publication_status',1);
		// $this->db->where('is_featured',1);
		$this->db->limit(12);
		$query_result = $this->db->get();
		$product_info = $query_result->result();
		return $product_info;
	}


	public function	all_featured_image()
	{
		$this->db->select('*');
		$this->db->from('tbl_product');
		$this->db->where('publication_status',1);
		$this->db->where('is_featured',1);
		$query_result = $this->db->get();
		$all_featured_image = $query_result->result();
		return $all_featured_image;
	}



	public function	all_published_product_info_by_category($category_id)
	{
		$this->db->select('*');
		$this->db->from('tbl_product');
		$this->db->where('publication_status',1);
		$this->db->where('category_id',$category_id);
		// $this->db->limit(5);
		$query_result = $this->db->get();
		$product_info = $query_result->result();
		return $product_info;
	}



	public function selsct_product_by_product_id($product_id)
	{
		$this->db->select('tbl_product.*, tbl_manufacture.manufacture_name');
		$this->db->from('tbl_product');
		$this->db->join('tbl_manufacture', 'tbl_manufacture.manufacture_id = tbl_product.manufacture_id');
		$this->db->where('product_id',$product_id);
		$query_result = $this->db->get();
		$products_info = $query_result->row();

		return $products_info;
	}









}
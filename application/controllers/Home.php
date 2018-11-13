<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {





	public function index()
	{
		 $data=array();
		 $data['slider'] = true;
		 $data['title'] = "Home";
		 $data['all_published_product_info'] = $this->welcome_model->all_published_product_info();
		 $data['all_featured_image'] = $this->welcome_model->all_featured_image();
		 $data['main_content'] = $this->load->view('pages/home_content',$data,true);
		 $this->load->view('master',$data);

	}

	public function checkout()
	{
		 $data=array();
		 $data['title'] = "Checkout";
		 $data['all_featured_image'] = $this->welcome_model->all_featured_image();
		 $data['main_content'] = $this->load->view('pages/checkout','',true);
		 $this->load->view('master',$data);
	}


				/***********************************/
				/****  Category By Product     *****/
				/***********************************/

	public function	category_product($category_id)
	{
		 $data=array();
		 $data['title'] = "Product Category";
		 $data['all_published_product_info_by_category'] = $this->welcome_model->all_published_product_info_by_category($category_id);
		 $data['all_featured_image'] = $this->welcome_model->all_featured_image();
		 $data['main_content'] = $this->load->view('pages/category_product',$data,true);
		 $this->load->view('master',$data);
	}


	public function product_details($product_id)
	{
		$data=array();
		$data['title'] = "Product Details";
		 $data['products_info'] = $this->welcome_model->selsct_product_by_product_id($product_id);
		 $data['all_featured_image'] = $this->welcome_model->all_featured_image();
		 $data['main_content'] = $this->load->view('pages/product_details',$data,true);
		 $this->load->view('master',$data);
	}






	// public function cart()
	// {
	// 	$data=array();
	// 	 // $data['products_info'] = $this->welcome_model->selsct_product_by_product_id($product_id);
	// 	 // $data['all_featured_image'] = $this->welcome_model->all_featured_image();
	// 	 $data['main_content'] = $this->load->view('pages/cart','',true);
	// 	 $this->load->view('master',$data);
	// }













}

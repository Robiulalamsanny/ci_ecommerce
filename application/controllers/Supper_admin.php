<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supper_admin extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('supper_admin_model');
		$admin_id = $this->session->userdata('admin_id');
		if ($admin_id == NULL) {
			redirect('admin');
		}
		$this->load->library('form_validation');
	}



	public function index()
	{
		$data = array();
		$data['admin_main_content'] = $this->load->view('admin/pages/dashboard','',true);
		$this->load->view('admin/admin_master',$data);
	}

				/***********************************/
				/*     *****  Category  *****      */
				/***********************************/

	public function add_category()
	{
		
		$data = array();
		$data['admin_main_content'] = $this->load->view('admin/pages/add_category','',true);
		$this->load->view('admin/admin_master',$data);
	}


	public function save_category()
	{
		// $this->form_validation->set_rules('category_name', 'Category Name', 'required|max_length[20]');
		$this->supper_admin_model->save_category_info();
		$sdata = array();
		$sdata['message'] = "Save Category Information Sucessfully!";
		$this->session->set_userdata($sdata);
		redirect('add-category');
	}


	public function manage_category()
	{
		$data = array();
		$data['all_category_info'] = $this->supper_admin_model->all_category_info();
		$data['admin_main_content'] = $this->load->view('admin/pages/manage_category',$data,true);
		$this->load->view('admin/admin_master',$data);
	}



	public function unpublish_category($category_id)
	{
		$this->supper_admin_model->unpublish_category($category_id);
		redirect('/manage-category');
	}


	public function publish_category($category_id)
	{
		$this->supper_admin_model->publish_category($category_id);
		redirect('/manage-category');
	}


	public function delete_category($category_id)
	{
		$this->supper_admin_model->delete_category($category_id);
		redirect('/manage-category');
	}


	public function edit_category($category_id)
	{
		$data = array();
		$data['category_info'] = $this->supper_admin_model->select_category_by_id($category_id);
		$data['admin_main_content'] = $this->load->view('admin/pages/edit_category',$data,true);
		$this->load->view('admin/admin_master',$data);
	}

	public function update_category()
	{
		
		$this->supper_admin_model->update_category_info();
		redirect('/manage-category');
		
	}





			/***********************************/
			/*     *****Manufacture *****      */
			/***********************************/

	public function add_manufacture()
	{
		$data = array();
		$data['admin_main_content'] = $this->load->view('admin/pages/add_manufacture','',true);
		$this->load->view('admin/admin_master',$data);
	}



	public function save_manufacture()
	{
		$this->supper_admin_model->save_manufacture_info();
		$sdata['message'] = "Save Manufacture Information Sucessfully";
		$this->session->set_userdata($sdata);
		redirect('add-manufacture');
	}


	public function manage_manufacture()
	{
		$data = array();
		$data['all_manufacture_info'] = $this->supper_admin_model->all_manufacture_info();
		$data['admin_main_content'] = $this->load->view('admin/pages/manage_manufacture',$data,true);
		$this->load->view('admin/admin_master',$data);
	}

	public function unpublish_manufacture($manufacture_id)
	{
		$this->supper_admin_model->unpublish_manufacture($manufacture_id);
		redirect('/manage-manufacture');
	}


	public function publish_manufacture($manufacture_id)
	{
		$this->supper_admin_model->publish_manufacture($manufacture_id);
		redirect('/manage-manufacture');
	}


	public function delete_manufacture($manufacture_id)
	{
		$this->supper_admin_model->delete_manufacture($manufacture_id);
		redirect('/manage-manufacture');
	}


	public function edit_manufacture($manufacture_id)
	{
		$data = array();
		$data['manufacture_info'] = $this->supper_admin_model->select_manufacture_by_id($manufacture_id);
		$data['admin_main_content'] = $this->load->view('admin/pages/edit_manufacture',$data,true);
		$this->load->view('admin/admin_master',$data);
	}


	public function update_manufacture()
	{
		$this->supper_admin_model->update_manufacture_info();
		redirect('/manage-manufacture');
	}


			/***********************************/
			/*     *****   Product  *****      */
			/***********************************/



	public  function add_product()
	{
		$data = array();
		$data['publish_category_info'] = $this->supper_admin_model->select_all_publish_category_info();
		$data['publish_manufacture_info'] = $this->supper_admin_model->select_all_publish_manufacture_info();
		$data['admin_main_content'] = $this->load->view('admin/pages/add_product',$data,true);
		$this->load->view('admin/admin_master',$data);
	}



	public function save_product()
	{
		$this->supper_admin_model->save_product_info();
		$sdata = array();
		$sdata['message'] = "Save Product Information Sucessfully!";
		$this->session->set_userdata($sdata);
		redirect('add-product');
	}


	public function manage_product()
	{
		$data = array();
		$data['all_product_info'] = $this->supper_admin_model->all_product_info();
		$data['admin_main_content'] = $this->load->view('admin/pages/manage_product',$data,true);
		$this->load->view('admin/admin_master',$data);
	}




	public function unpublish_product($product_id)
	{
		$this->supper_admin_model->unpublish_product($product_id);
		redirect('/manage-product');
	}


	public function publish_product($product_id)
	{
		$this->supper_admin_model->publish_product($product_id);
		redirect('/manage-product');
	}


	public function edit_product($product_id)
	{
		$data = array();
		// $data['manufacture_info'] = $this->supper_admin_model->select_manufacture_by_id($manufacture_id);
		$data['publish_category_info'] = $this->supper_admin_model->select_all_publish_category_info();
		$data['publish_manufacture_info'] = $this->supper_admin_model->select_all_publish_manufacture_info();
		$data['product_info'] = $this->supper_admin_model->product_info_by_id($product_id);
		$data['admin_main_content'] = $this->load->view('admin/pages/edit_product',$data,true);
		$this->load->view('admin/admin_master',$data);
	}


		private function upload_product_img(){
		$config['upload_path'] = './product_images/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = 1000;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('product_image')) {
			$data = $this->upload->data();
			$image_path = "product_images/$data[file_name]";
			return $image_path;
		}else{
			$error = $this->upload->display_errors();
			print_r($error);
		}
	}


	public function update_product()
	{
		if ($_FILES['product_image']['name'] == '' || $_FILES['product_image']['size'] == '0') {

  			$product_image = $this->input->post('product_old_image', True);
  			$this->supper_admin_model->update_product($product_image);
  			$sdata = array();
  			$sdata['message'] = "Update product Information Sucessfully";
  			$this->session->set_userdata($sdata);
  			$product_id = $this->input->post('product_id', True);
  			redirect('manage-product');
  		}else
  		{

  			$product_image = $this->upload_product_img();
  			$this->supper_admin_model->update_product($product_image);
  			unlink( $this->input->post('product_old_image', True));
  			$sdata = array();
  			$sdata['message'] = "Update product Information Sucessfully";
  			$this->session->set_userdata($sdata);
  			$product_id = $this->input->post('product_id', True);
  			redirect('manage-product');
  		}
	}






































































	public function logout()
	{
		$this->session->unset_userdata('admin_id');
		$this->session->unset_userdata('admin_name');
		$sdata= array();
		$sdata['message'] = "You are sucessfully logout !";
		$this->session->set_userdata($sdata);
		redirect('admin');

	}


	



}

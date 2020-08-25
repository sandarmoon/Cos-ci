<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryCtrl extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['categories']=$this->CategoryMdl->read();
		$data['innerData']='backend/category/list';
		$this->load->view('backend_template',$data);
	}

	public function create()
	{
		$data['innerData']="backend/category/create";
		$this->load->view('backend_template',$data);
		
	}


	public function store(){
		
		$result=$this->CategoryMdl->store();
		
		redirect('category');
		
	}

	public function edit(){
		$id=$this->uri->segment(3);
		$data['category']=$this->CategoryMdl->edit($id);
		$data['innerData']='backend/category/edit';
		// var_dump($data);die();
		return $this->load->view('backend_template',$data);
	}

	public function update(){
		$this->CategoryMdl->update();
		$data=array('msg'=>'successfully updated');
		
		$this->session->set_userdata($data);
		
		return redirect('category');
	}

	public function delete(){
		$id=$this->uri->segment(3);
		$this->CategoryMdl->destroy($id);
		$data=array('msg'=>'successfully deleted');
		
		$this->session->set_userdata($data);
		
		return redirect('category');

	}
}

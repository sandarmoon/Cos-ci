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
	// $session_data = $this->session->userdata('data');
 //    $data['message'] = $session_data['msg']; 
 //    var_dump($data);die();
		$session_data=$this->session->flashdata('item');
		var_dump($session_data);die();
		$data['message'] = $session_data['datsa']; 
		$data['categories']=$this->CategoryMdl->read();
		$data['innerData']='backend/category/list';
		$this->load->view('backend_template',$data);
	}

	public function create()
	{
		$data['innerData']="backend/category/create";
		$this->load->view('backend_template',$data);
		// $result=$this->CategoryMdl->store();
		// var_dump($result);die();
		// $data['innerData']='backend/category/list';
		// $this->load->view('backend_template',$data);
	}


	public function store(){
		//die('helo');
		$result=$this->CategoryMdl->store();
		// var_dump($result);die();
		redirect('category');
		// $data['innerData']='backend/category/list';
		// $this->load->view('backend_template',$data);
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
		$this->load->helper('url');
		$this->session->set_flashdata('item',$data);
		 $this->session->keep_flashdata('item');
		return redirect('category');
	}
}

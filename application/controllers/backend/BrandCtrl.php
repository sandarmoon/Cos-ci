<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BrandCtrl extends CI_Controller {

	protected $allowed_mime_type_arr=array('application/pdf','image/gif','image/jpeg','image/pjpeg','image/png','image/x-png');


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
		$data['brands']=$this->BrandMdl->read();
		
		$data['innerData']='backend/brand/list';
		$this->load->view('backend_template',$data);
	}

	public function store(){
		 $this->load->helper(array('form'));
		$this->load->library(array('upload'));
		// $config=array(
		// 	array('field'=>'name','label'=>'name','rule'=>'required','errors'=>array('required'=>'you must provide %s')
		// 	),
		// 	array('field'=>'logo','label'=>'logo','rule'=>'callback_file_check')
		// );
		//  $this->form_validation->set_rules($config);

		$this->form_validation->set_rules('name','Brandname','required',
			array('required'=>'you must provide %s')
		);
		$this->form_validation->set_rules('logo','Logo','callback_file_check');
		if($this->form_validation->run()==FALSE){
			$data['innerData']='backend/brand/list';
			$this->load->view('backend_template',$data);
			
		}else{
			//echo "helo";
			$config['upload_path'] ='./uploads/';
		    $config['allowed_types'] = 'gif|jpg|png';
		    $config['max_size'] = '500';
		    $config['max_width']  = '1024';
		    $config['max_height']  = '768';
		    $config['overwrite']  = FALSE;
		    $config['max_filename_increment']  = 100;

		    $this->upload->initialize($config);
	  
		    if ( ! $this->upload->do_upload('logo')) {
		        $data['imageError'] =  $this->upload->display_errors();
		        var_dump($data);
		    } else {
		    	$data=$this->upload->data();
		    	$imageName='uploads/'.$data['file_name'];
		    	$this->BrandMdl->save($imageName);
		    	redirect('brand');
		    }

		}
	}

	public function file_check($str){
		// echo "helo";
		
		if($_FILES['logo']['size'] > 0){
			if(in_array($_FILES['logo']['type'], $this->allowed_mime_type_arr)){
				return true;
			}else{
				$this->form_validation->set_message('file_check', 'Please select only pdf/gif/jpg/png file.');
				return false;
			}
		}else{
			 $this->form_validation->set_message('file_check', 'Please choose a file to upload.');
            return false;
		}
		
	}

	public function edit(){
		$id= $this->uri->segment(3);
		echo json_encode($this->BrandMdl->edit($id));
	}

	public function update(){
		$this->load->helper(array('form','file'));
		$this->load->library(array('upload'));
	
		$this->form_validation->set_rules('logo','Logo','callback_update_file');
		$oldlogo=$this->input->post('oldLogo');
		if($this->form_validation->run()==FALSE){
			$imageName=$oldlogo;
			
		}else{
			//echo "helo";
			$config['upload_path'] ='./uploads/';
		    $config['allowed_types'] = 'gif|jpg|png';
		    $config['max_size'] = '500';
		    $config['max_width']  = '1024';
		    $config['max_height']  = '768';
		    $config['overwrite']  = FALSE;
		    $config['max_filename_increment']  = 100;

		    $this->upload->initialize($config);
	  
		    if ( ! $this->upload->do_upload('logo')) {
		        $data['imageError'] =  $this->upload->display_errors();
		        var_dump($data);
		    } else {
		    	$data=$this->upload->data();
		    	delete_files($oldlogo,TRUE);
		    	$imageName='uploads/'.$data['file_name'];
		    	
		    }

		}

		echo  $this->BrandMdl->update($imageName) ? "updated":'not';
	}

	public function update_file($str){
		
		if($_FILES['logo']['size']>0){

			if(in_array($_FILES['logo']['type'], $this->allowed_mime_type_arr)){
				return true;
			}else{
				$this->form_validation->set_message('file_check', 'Please select only pdf/gif/jpg/png file.');
				return false;
			}
		}
	}

}
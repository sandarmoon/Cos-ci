<?php

class CategoryMdl extends CI_Model{
	public function read(){
		$this->db->select('*');
		$this->db->from('categories');
		$res=$this->db->get('');
		return $res->result();//array of object
	}
	public function store(){
		$name=$this->input->post('name');
		$data=array(
			'name'=>$name
		);
		return $this->db->insert('categories',$data);

	}

	public function edit($id){
		$this->db->select('*');
		$this->db->from('categories');
		$this->db->where('id',$id);
		$sql=$this->db->get('');
		return $sql->row();// use for single array 
	}

	public function update(){
		$id=$this->input->post('id');
		$name=$this->input->post('name');
		$data=[
			'name'=>$name
		];
		$this->db->where('id',$id);
		$result=$this->db->update('categories',$data);
		return $result;
	}


	public function destroy($id){
		$result=$this->db->delete('categories',array('id'=>$id));
		return $result; 
	}
}


?>
<?php 
  /**
   * 
   */
  class BrandMdl extends CI_Model
  {

    public function read(){
     return  $this->db->select('*')->from('brands')->get()->result();
    }

  	
  	public function save($file){
  		$name=$this->input->post('name');
  		$result=$this->db->insert('brands',array('name'=>$name,'logo'=>$file));
  		return $result;
  	}

    public function edit($id){
      return $this->db->select('*')->from('brands')->where('id',$id)->get()->row();
    }

    public function update($file){
      $id=$this->input->post('oldid');
      return $this->db->where('id',$id)->update('brands',array('name'=>$this->input->post('name'),'logo'=>$file));
    }




  }


?>
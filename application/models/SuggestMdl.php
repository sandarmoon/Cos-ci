<?php 
  /**
   * 
   */
  class SuggestMdl extends CI_Model
  {
  	
  	//Read
  	public function list(){

  		$this->db->select('*');
  		$this->db->from('suggests');
  		$sql=$this->db->get('');

  		return $sql->result();


  	}

  	//Crate

  	public function save(){



  		$name=$this->input->post('name');
  		$careerlife=$this->input->post('careerlife');
  		$fileerror=$this->input->post('fileerror');
  		$teamwork=$this->input->post('teamwork');
  		$stress=$this->input->post('stress');
  		$rolemodel=$this->input->post('rolemodel');
  		$phapplication=$this->input->post('phapplication');
  		$website=$this->input->post('website');




  		$data=array(

  				'username'=>$name,

  				'suggest_one'=>$careerlife,

  				'suggest_two'=>$fileerror,

  				'suggest_three'=>$teamwork,

  				'suggest_four'=>$stress,

  				'suggest_five'=>$rolemodel,

  				'suggest_six'=>$phapplication,

  				'suggest_seven'=>$website

  				
  		);


  		$result=$this->db->insert('suggests',$data);

  		return $result;

  		

  	}

  	public function delete($id){
  		$query="DELETE FROM suggests WHERE  id=".$id;


  		return $this->db->query($query);


  	}



  	 public function edit($id){
  	  	$this->db->select('*');
  	  	$this->db->from('suggests');
  	  	$this->db->where('id',$id);

  	  	$sql=$this->db->get('');
  	  	return $sql->row_array();


  	}


  	public function update(){

  		$id=$this->input->post('id');
  		$name=$this->input->post('name');
  		$careerlife=$this->input->post('careerlife');
  		$fileerror=$this->input->post('fileerror');
  		$teamwork=$this->input->post('teamwork');
  		$stress=$this->input->post('stress');
  		$rolemodel=$this->input->post('rolemodel');
  		$phapplication=$this->input->post('phapplication');
  		$website=$this->input->post('website');

  		$data=array(

  				'username'=>$name,

  				'suggest_one'=>$careerlife,

  				'suggest_two'=>$fileerror,

  				'suggest_three'=>$teamwork,

  				'suggest_four'=>$stress,

  				'suggest_five'=>$rolemodel,

  				'suggest_six'=>$phapplication,

  				'suggest_seven'=>$website

  				
  		);

  		$this->db->where('id',$id);
  		$result=$this->db->update('suggests',$data);
  		return $result;



  	}

  	public function detail($id){
  	  	$this->db->select('*');
  	  	$this->db->from('suggests');
  	  	$this->db->where('id',$id);

  	  	$sql=$this->db->get('');
  	  	return $sql->row_array();


  	}






  }


?>
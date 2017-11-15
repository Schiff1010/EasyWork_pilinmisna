<?php 
/**
* 
*/
class Mcoba extends Ci_Model {

	public function ___construct(){
		
		parent::___construct();
	}

	public function getProv(){
		$query = $this->db->get('provinsi');
		if($query->num_rows() > 0){
			return $query->result();			
		}
	}

	public function getKab(){
		$query = $this->db->get('kabupaten');
		if($query->num_rows() > 0){
			return $query->result();			
		}
	}


	

	
}


 ?>
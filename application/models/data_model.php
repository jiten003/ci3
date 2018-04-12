	<?php

class Data_model extends  CI_Model{
	
Public function getall(){
		
			$q = $this->db->get('users');
		
		//if ( $q->num_row() > 0 ) {	
			foreach ($q->result() as $row ){
			   $data[] = $row ;
			}
	  return $data ;
	
	//   }
	   
	}
	
	

	
	}
	

	?>
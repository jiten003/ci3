<?php
class Loginmodel extends CI_Model{


public function login_valid($email,$password){

//$q = $this->db->query("select * FROM admin where username='" . $username . "' and pwd='" . $password . "' ");
 	$q=$this->db->where(['email'=>$email,'pwd'=>$password])
	             ->get('admin');
				 
	 if ($q->num_rows()){
	     return $q->row()->admid;
	
    }else{
        return FALSE;
    }	
	
}


}
?>
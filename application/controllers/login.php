<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

 
	public function index()
	{
		if ($this->session->userdata('user_id')){
			echo $this->session->userdata['user_id']['0'];
			
            return redirect('admin');	
		}
		$this->load->helper('form');
		$this->load->view('admin/login'); 	 
	}

	
   public function admin_login()
   {
	   $this->load->library('form_validation');
       $this->form_validation->set_rules('email', 'Email', 'required');
	   $this->form_validation->set_rules('email', 'Email', 'valid_email');
	   $this->form_validation->set_rules('password', 'Password', 'required');
	
     	if($this->form_validation->run()){
	           $email = $this->input->post('email');	   
			   $password= $this->input->post('password');
	          
			   $this->load->model('loginmodel');		  
			   $login_id = $this->loginmodel->login_valid($email,$password);
			    
			    if ($login_id) {
					 
				    $this->session->set_userdata('user_id','$login_id');
                         
			        return redirect('admin/'); 
					
	        	}else{
		           echo "invalid email and password";	 
                        echo "<div style='color:white' align='center'>";
			                     // echo $this->session->userdata('user_id');
							echo $this->session->userdata['user_id']['0'];
        						 //   $this->load->view('admin/login'); 
			                        echo "Server Message : invalid email or password";
		                echo "</div>";				   
	         	}
			  

	   }else{
		       echo "<div style='color:white' align='center'>";
			   $this->load->view('admin/login'); 
			   echo "admin login failed ";   
		       echo "</div>";
	   }
   }

}


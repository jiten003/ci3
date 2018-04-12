<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {



	public function index()
	{

	$this->load->view('admin/dashboard-main');

	}
		
    public function order(){
		 $this->load->view('admin/order'); 	
	}


    public function products(){
		 $this->load->view('admin/products'); 	
	}
	
	 public function categories(){
		 $this->load->view('admin/categories'); 	
	}


	 public function order_inner(){
		 $this->load->view('admin/order_inner');
  	
	}
	
	 public function clientapproval(){
		 $this->load->view('admin/ctapproval');
  	
	}
	
	public function logout(){
       $this->session->sess_destroy();
	   echo "<h1 >";
	     echo "User logout Successfully";
	    echo "</h1>";
	}
	
	
   	public function __construct()
	{
		parent::__construct();
	    if( !$this->session->userdata('user_id')){
			 return redirect('login');
		}

	}			     
	
}

<?php

class Site extends MY_Controller {	
  
	Public function index(){
	    $this->load->model('data_model');	
	    $data['r1'] = $this->data_model->getall();
		$this->load->view('site', $data);
 
	}

	
}




?>
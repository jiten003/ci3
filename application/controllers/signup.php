<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

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
	 
	function __construct() {
       parent::__construct();
       $this->load->model('signup_model');
} 
	 
	 
function index() {
//Including validation library
$this->load->library('form_validation');

$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

//Validating Name Field
$this->form_validation->set_rules('dname', 'Username', 'required|max_length[15]');

//Validating Email Field
$this->form_validation->set_rules('demail', 'Email', 'required|valid_email');

//Validating Mobile no. Field
$this->form_validation->set_rules('dmobile', 'Mobile No.', 'required|regex_match[/^[0-9]{10}$/]');

//Validating Address Field
$this->form_validation->set_rules('dpwd', 'Address', 'required|min_length[8]');

if ($this->form_validation->run() == FALSE) {
$this->load->view('signup_view');
} else {
//Setting values for tabel columns
$data = array(
'fname' => $this->input->post('dname'),
'email' => $this->input->post('demail'),
'mobile' => $this->input->post('dmobile'),
'pwd' => $this->input->post('dpwd')
);
//Transfering data to Model


echo  $data['email'];
$this->signup_model->form_insert($data);
$data['message'] = 'Data Inserted Successfully';


//Loading View
$this->load->view('signup_view', $data);
}
}

}

?>
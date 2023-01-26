<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class C_data extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
	}
	
	function index(){
		$this->load->model('M_data');
		$data['data'] = $this->M_data->get_data()->result();
		$this->load->view('V_data.php',$data);
	}
 
}
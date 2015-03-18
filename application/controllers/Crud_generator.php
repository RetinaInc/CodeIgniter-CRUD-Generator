<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_generator extends CI_Controller {

	public function index()
	{
		$this->load->view('crud_generator_home_view');
	}
	function step1(){
		echo 'Start connexion to database!';

	}
}

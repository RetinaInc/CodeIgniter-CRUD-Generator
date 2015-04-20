<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_generator extends CI_Controller {

	public function index()
	{
		$this->load->view('crud_generator_home_view');
	}
	function step1(){
		$this->form_validation->set_rules('hostname', 'Hostname', 'trim|required|xss_clean');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Paswword', 'trim|required|xss_clean');
		$this->form_validation->set_rules('dbname', 'Database name', 'trim|required|xss_clean');
		if ($this->form_validation->run()==TRUE) {
			$response=$this->_check_db();

			if ($response) {
				echo 'Connected';
			}else{
				echo 'No Connected';

			}
		} else {
			$this->load->view('crud_generator_home_view');
		}
		
		

	}

	protected function _check_db($hostname,$username,$password,$dbname)
{
			// Format DSN
		$dsn = 'mysqli://'.$username.':'.password.'@'.$hostname.'/'.$dbname.'';

		// Load database and dbutil
		$this->load->database($dsn);
		$this->load->dbutil();

		// check connection details
		if(! $this->dbutil->database_exists('database'))
		{
			// if connection details incorrect show error
			echo 'Incorrect database information provided';
		}
 }

}

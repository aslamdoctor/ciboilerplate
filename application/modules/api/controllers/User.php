<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

// Load REST API Service Library
use Restserver\Libraries\REST_Controller;
require(APPPATH.'/libraries/REST_Controller.php');
require(APPPATH.'/libraries/Format.php');

class User extends REST_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	public function index_get()
	{
		$this->response([]); 
	}

	public function index_post(){
		$data = array(
				$this->post('id'),
				$this->post('name')
			);
        $this->response($data);
	}

	public function index_put(){
		$data = array(
				$this->put('id'),
				$this->put('name')
			);
        $this->response($data);
	}

	public function index_delete($id){
		$data = array('returned: '. $id);
        $this->response($data);
	}

}

/* End of file User.php */

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

	public function test_get(){
		$this->response(array(
			'name' => 'Aslam',
			'email' => 'aslam.doctor@gmail.com'
		)); 
	}
	
	public function test_post(){
		$foo = $this->post('foo');
		$bar = $this->post('bar');
		$array_variable = $this->post('array_variable');
		$this->response(array(
			'foo' => $foo.' POSTED',
			'bar' => $bar.' POSTED',
			'array_variable' => $array_variable
		)); 
	}
	
	public function test_put(){
		$foo = $this->PUT('foo');
		$bar = $this->PUT('bar');
		$array_variable = $this->PUT('array_variable');
		$this->response(array(
			'foo' => $foo.' PUT DONE',
			'bar' => $bar.' PUT DONE',
			'array_variable' => $array_variable
		)); 
	}
	
	public function test_delete(){
		$this->response(array(
			'name' => 'Aslam DELETE',
			'email' => 'aslam.doctor@gmail.com DELETE'
		)); 
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

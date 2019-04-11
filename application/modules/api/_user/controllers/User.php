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
		echo 123; exit;
	}
	
	public function index()
	{
		
	}

}

/* End of file User.php */

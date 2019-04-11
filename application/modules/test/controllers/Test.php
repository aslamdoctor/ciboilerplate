<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends MY_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$data['content_view'] = 'test/test_view';

		$this->template->render($data);
	}

}

/* End of file Test.php */

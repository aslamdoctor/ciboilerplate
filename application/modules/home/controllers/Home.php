<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['content_view'] = 'home/home_view';

		$this->template->render($data);
	}

}

/* End of file Home.php */

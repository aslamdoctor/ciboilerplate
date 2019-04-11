<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MY_Controller {
	
	function __construct()
	{
		parent::__construct();
	}

	public function render($data = NULL)
	{
		$this->load->view('Template/template_view', $data);
	}

}

/* End of file Template.php */

<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use GuzzleHttp\Client;

class Test extends MY_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		// GET Request
		$client = new GuzzleHttp\Client(['base_uri' => 'http://localhost/ciboilerplate/api/user/']);
		$response = $client->request('GET', 'test');
		$code = $response->getStatusCode(); 
		$data['get_api_response'] = $response->getBody();

		// POST Request
		$client = new GuzzleHttp\Client(['base_uri' => 'http://localhost/ciboilerplate/api/user/']);
		$response = $client->request('POST', 'test', [
			'form_params' => [
				'foo' => 'abc',
				'bar' => '123',
				'array_variable' => [
					'index1' => 'val1',
					'index2' => 'val2'
				]
			]
		]);
		$code = $response->getStatusCode(); 
		$data['post_api_response'] = $response->getBody();
		
		// PUT Request
		$client = new GuzzleHttp\Client(['base_uri' => 'http://localhost/ciboilerplate/api/user/']);
		$response = $client->request('PUT', 'test', [
			'form_params' => [
				'foo' => 'abc',
				'bar' => '123',
				'array_variable' => [
					'index1' => 'val1',
					'index2' => 'val2'
				]
			]
		]);
		$code = $response->getStatusCode(); 
		$data['put_api_response'] = $response->getBody();

		// DELETE Request
		$client = new GuzzleHttp\Client(['base_uri' => 'http://localhost/ciboilerplate/api/user/']);
		$response = $client->request('DELETE', 'test');
		$code = $response->getStatusCode(); 
		$data['delete_api_response'] = $response->getBody();
		

		$data['content_view'] = 'test/test_view';
		$this->template->render($data);
	}

}

/* End of file Test.php */

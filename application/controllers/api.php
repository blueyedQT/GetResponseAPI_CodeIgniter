<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {
	// This code was inspired a lot from https://github.com/robertstaddon/GetResponse-PHP-Wrapper/blob/master/PHPwrapper/examples.php

	public function index() {
		$this->load->library('GetResponse');
		// GetResponse API key http://www.getresponse.com/my_api_key.html
		$api = new GetResponse('## API KEY GOES HERE ##'); 

		// Test to make sure connection is working
		echo $api->ping(); // Output: "pong"


		// Display account information
		$account = $api->getAccountInfo();
		var_dump($account);
	}

}
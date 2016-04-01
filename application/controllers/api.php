<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {
	// This code was inspired a lot from https://github.com/robertstaddon/GetResponse-PHP-Wrapper/blob/master/PHPwrapper/examples.php

	public function index() {
		$this->load->library('GetResponse');
		$api = new GetResponse('929e79b37d3acd438f49957aab51521b'); // Testing Account

		// Test to make sure connection is working
		echo $api->ping(); // Output: "pong"


		// Display account information
		$account = $api->getAccountInfo();
		var_dump($account);
	}

}
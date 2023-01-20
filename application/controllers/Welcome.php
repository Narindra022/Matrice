<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {
		parent::__construct() ;
		$this->load->helper('url') ;
		$this->load->helper('form') ;
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function connect() {
		$data = [
			"diso" => [
				"rakoto","12"
			],
			"marina" => "ok" 
		] ;
		

		$this->load->view('test',$data);
		
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->template->load('templates/adminTemplate', 'welcome_message');
	}

	public function test(){
		print "chegou";
	}
}

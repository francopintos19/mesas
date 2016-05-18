<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {



	public function index()
	{

		$data['css'] = $this->config->item('css');
		
		$this->load->view('welcome_message');
	}
}

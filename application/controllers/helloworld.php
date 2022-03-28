<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mhs extends CI_Controller {

	public function index()
	{
		$this->load->view('hello_world');
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {

	public function index()
	{
		$data['nama'] = 'Yunisa Sianturi';
		$data['nim'] = '201401090';
		$data['kom'] = 'C';
		$this->load->view('mahasiswa_view',$data);

    }
}
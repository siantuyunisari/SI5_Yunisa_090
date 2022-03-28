<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {

	public function index()
	{
		echo 'Hello World!!!';
	}
	
	Public function hello1() {
		echo 'hello';
	}

	Public function hello2($nama) {
		echo 'hello '.$nama;
	}
}

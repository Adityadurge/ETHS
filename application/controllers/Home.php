<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('login');
	}
	public function login()
	{
		$this->load->view('login');
	}
}

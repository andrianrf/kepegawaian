<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'title' => 'Home',
			'content' => 'index'
			);

		$this->load->view('template/admin/index', $data);
	}
}
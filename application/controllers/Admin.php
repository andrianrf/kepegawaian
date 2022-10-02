<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('admin/M_pegawai');
	}

	public function index()
	{
		$this->load->view('admin/home');
	}

	public function data()
	{
		$this->load->view('admin/data');
	}

	public function tambah()
	{
		$this->load->view('admin/tambah');
	}

	public function action_simpan()
	{
		$this->M_pegawai->simpan_data_pegawai($_POST);
		echo "<script>alert('data berhasil disimpan');window.location='".base_url('admin/data')."'</script>";
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_jabatan');
	}

	public function index()
	{
		$data = array(
			'title' => 'Data Jabatan',
			'content' => 'data'
			);

		$this->load->view('template/admin/index', $data);
	}

	public function data()
	{
		$this->load->view('jabatan/data');
	}

	public function tambah()
	{
		$this->load->view('jabatan/tambah');
	}

	public function action_simpan()
	{
		$this->M_jabatan->simpan_data_jabatan($_POST);
		echo "<script>alert('data berhasil disimpan');window.location='".base_url('jabatan/data')."'</script>";
	}
	
	public function ubah($id)
	{
		foreach($this->M_jabatan->get_data_jabatan_by_id($id)->result() as $row){
		$data = array(
			'id' => $id,
			'jabatan' => $row->jabatan,
			);
		}
		$this->load->view('jabatan/ubah', $data);
	}

	public function action_ubah($id)
	{
		$this->M_jabatan->ubah_data_jabatan($id, $_POST);
		echo "<script>alert('data berhasil diubah');window.location='".base_url('jabatan/data')."'</script>";
	}

	public function hapus($id)
	{
		$this->M_jabatan->hapus_data_jabatan($id);
		echo "<script>alert('data berhasil dihapus');window.location='".base_url('jabatan/data')."'</script>";
	}
}

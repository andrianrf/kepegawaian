<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('pegawai/M_pegawai');
	}

	public function index()
	{
		$data = array(
			'title' => 'Data Pegawai',
			'content' => 'pegawai/data'
			);

		$this->load->view('template/admin/index', $data);
	}

	public function data()
	{
		$data = array(
			'title' => 'Data Pegawai',
			'content' => 'pegawai/data'
			);

		$this->load->view('template/admin/index', $data);
	}


	public function tambah()
	{
		$data = array(
			'title' => 'Tambah Pegawai',
			'content' => 'pegawai/tambah'
			);

		$this->load->view('template/admin/index', $data);
	}

	public function action_simpan()
	{
		$this->M_pegawai->simpan_data_pegawai($_POST);
		echo "<script>alert('data berhasil disimpan');window.location='".base_url('pegawai/data')."'</script>";
	}
	
	public function ubah($id)
	{
		foreach($this->M_pegawai->get_data_pegawai_by_id($id)->result() as $row){
		$data = array(
			'title' => 'Ubah Pegawai',
			'content' => 'pegawai/ubah',
			'id' => $id,
			'nip' => $row->nip,
			'nama' => $row->nama,
			'hp' => $row->hp,
			'email' => $row->email,
			);
		}
		$this->load->view('template/admin/index', $data);
	}

	public function action_ubah($id)
	{
		$this->M_pegawai->ubah_data_pegawai($id, $_POST);
		echo "<script>alert('data berhasil diubah');window.location='".base_url('pegawai/data')."'</script>";
	}

	public function hapus($id)
	{
		$this->M_pegawai->hapus_data_pegawai($id);
		echo "<script>alert('data berhasil dihapus');window.location='".base_url('pegawai/data')."'</script>";
	}

	public function helo()
	{
		$data = array(
			'title' => 'Helo Pegawai',
			'content' => 'pegawai/helo'
			);

		$this->load->view('template/admin/index', $data);
	}
}

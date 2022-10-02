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
	
	public function ubah($id)
	{
		$this->M_pegawai->get_data_pegawai_by_id($id);
		foreach($this->M_pegawai->get_data_pegawai_by_id($id)->result() as $row){
		$data = array(
			'id' => $id,
			'nip' => $row->nip,
			'nama' => $row->nama,
			'hp' => $row->hp,
			'email' => $row->email,
			);
		}
		$this->load->view('admin/ubah', $data);
	}

	public function action_ubah($id)
	{
		$this->M_pegawai->ubah_data_pegawai($id, $_POST);
		echo "<script>alert('data berhasil diubah');window.location='".base_url('admin/data')."'</script>";
	}

	public function hapus($id)
	{
		$this->M_pegawai->hapus_data_pegawai($id);
		echo "<script>alert('data berhasil dihapus');window.location='".base_url('admin/data')."'</script>";
	}
}

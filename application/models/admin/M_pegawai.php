<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_pegawai extends CI_Model {

	function get_data_pegawai(){
        return $this->db->query("select id, nip, nama, hp, email from pegawai");
	}

}
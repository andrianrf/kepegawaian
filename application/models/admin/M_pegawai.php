<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_pegawai extends CI_Model {

	function get_data_pegawai(){
        return $this->db->query("select id, nip, nama, hp, email from pegawai");
	}

    function simpan_data_pegawai($data){
        return $this->db->query("insert into pegawai (nip, nama, hp, email) values('".$data['nip']."', '".$data['nama']."', '".$data['hp']."', '".$data['email']."')");
    }

}
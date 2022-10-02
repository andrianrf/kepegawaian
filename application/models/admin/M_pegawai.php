<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_pegawai extends CI_Model {

	function get_data_pegawai(){
        return $this->db->query("select id, nip, nama, hp, email from pegawai");
	}

    function simpan_data_pegawai($data){
        return $this->db->query("insert into pegawai (nip, nama, hp, email) values('".$data['nip']."', '".$data['nama']."', '".$data['hp']."', '".$data['email']."')");
    }
    
	function get_data_pegawai_by_id($id){
        return $this->db->query("select nip, nama, hp, email from pegawai where id='".$id."'");
	}

    function ubah_data_pegawai($id, $data){
        return $this->db->query("update pegawai set nip='".$data['nip']."', nama='".$data['nama']."', hp='".$data['hp']."', email='".$data['email']."' where id='".$id."'");
    }

    function hapus_data_pegawai($id){
        return $this->db->query("delete from pegawai where id='".$id."'");
    }

}
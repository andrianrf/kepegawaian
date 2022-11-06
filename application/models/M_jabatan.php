<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_jabatan extends CI_Model {

	function get_data_jabatan(){
        return $this->db->query("select id, jabatan from jabatan");
	}

    function simpan_data_jabatan($data){
        return $this->db->query("insert into jabatan (jabatan) values('".$data['jabatan']."')");
    }
    
	function get_data_jabatan_by_id($id){
        return $this->db->query("select jabatan from jabatan where id='".$id."'");
	}

    function ubah_data_jabatan($id, $data){
        return $this->db->query("update jabatan set jabatan='".$data['jabatan']."' where id='".$id."'");
    }

    function hapus_data_jabatan($id){
        return $this->db->query("delete from jabatan where id='".$id."'");
    }

}
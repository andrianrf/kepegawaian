<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model {

    function check_login($data){
        return $this->db->query("select id, email, password, nama from login where email='".$data['email']."' and password='".$data['password']."'");
    }

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_pendaftaran extends CI_Model {
    public function getPendaftaran(){
        $this->db->select('*');
        $this->db->from('pendaftaran');
        $this->db->join('jnslomba','jnslomba.id = pendaftaran.id_lomba');
        return $this->db->get()->result_array();
    }
}
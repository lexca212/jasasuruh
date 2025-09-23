<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_jasa extends CI_Model {

    public function simpan($data)
    {
        return $this->db->insert('pesan', $data);
    }

    

}

/* End of file M_jasa.php */

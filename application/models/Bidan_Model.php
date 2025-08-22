<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Bidan_Model extends CI_Model
{
    public function get()
    {
        $query = $this->db->get('tbidan');

        return $query->result_array();
    }
}

/* End of file RekamMedis_Model.php */

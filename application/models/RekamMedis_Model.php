<?php

defined('BASEPATH') or exit('No direct script access allowed');

class RekamMedis_Model extends CI_Model
{
    public function get()
    {
        $sql = "SELECT 
          rm.no_transaksi, 
          rm.kode_peserta, 
          p.nama_peserta, 
          p.tanggal_lahir, 
          p.jenis_kelamin, 
          rm.keluhan, 
          pl.nama_poli, 
          b.nama_bidan, 
          rm.biaya_admin
      FROM trekammedis rm
      JOIN tpeserta p ON p.kode_peserta = rm.kode_peserta
      JOIN tbidan b ON b.kode_bidan = rm.kode_bidan
      JOIN tpoli pl ON pl.kode_poli = b.kode_poli";

        $query = $this->db->query($sql);

        return $query->result_array();
    }

    public function store($data)
    {
        return $this->db->insert('trekammedis', $data);
    }

    public function delete($no_transaksi)
    {
        $this->db->where('no_transaksi', $no_transaksi);
        return $this->db->delete('trekammedis');
    }
}

/* End of file RekamMedis_Model.php */

<?php
class Cabang_model extends CI_model{
    public function getAllCabang()
    {
        return $this->db->get('cabang')->result_array();
    }

    public function tambahDataCabang()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nomor_cabang" => $this->input->post('nomor_cabang', true),
            "alamat" => $this->input->post('alamat', true),
            
        ];

        $this->db->insert('cabang', $data);
    }

    public function hapusDataCabang($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('cabang');

    }
    public function getCabangById($id)
    {
        return $this->db->get_where('cabang', ['id' =>$id])->row_array();
    }

    public function ubahDataCabang()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nomor_cabang" => $this->input->post('nomor_cabang', true),
            "alamat" => $this->input->post('alamat', true),
            
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('cabang', $data);
    }

    public function cariDataCabang()
    {
        $keyword= $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        // $this->db->or_like('jabatan', $keyword);
        $this->db->or_like('nomor_cabang', $keyword);
        $this->db->or_like('alamat', $keyword);
        return $this->db->get('cabang')->result_array();
    }
}
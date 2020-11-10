<?php
class Karyawan_model extends CI_model{
    public function getAllKaryawan()
    {
        return $this->db->get('karyawan')->result_array();
    }

    public function tambahDataKaryawan()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nik" => $this->input->post('nik', true),
            "email" => $this->input->post('email', true),
            "jabatan" => $this->input->post('jabatan', true)
        ];

        $this->db->insert('karyawan', $data);
    }

    public function hapusDataKaryawan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('karyawan');

    }
    public function getKaryawanById($id)
    {
        return $this->db->get_where('karyawan', ['id' =>$id])->row_array();
    }

    public function ubahDataKaryawan()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nik" => $this->input->post('nik', true),
            "email" => $this->input->post('email', true),
            "jabatan" => $this->input->post('jabatan', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('karyawan', $data);
    }

    public function cariDataKaryawan()
    {
        $keyword= $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jabatan', $keyword);
        $this->db->or_like('nik', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('karyawan')->result_array();
    }
}
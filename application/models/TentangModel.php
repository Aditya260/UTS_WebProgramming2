<?php
class TentangModel extends CI_model{
	public function getAllTentang()
	{
		return $this->db->get('Tentang')->result_array();
	}
}
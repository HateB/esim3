<?php
class asiakas_model extends CI_model
{
	public function getAsiakas()
	{
		$this->db->select('id_asiakas,etunimi,sukunimi,email');
		$this->db->from('asiakas');
		return $this->db->get()->result_array();
	}

	public function addAsiakas($lisaa_asiakas)
	{
		$this->db->set($lisaa_asiakas);
		$this->db->insert('asiakas');
		$testi=$this->db->affected_rows();
		return $testi;
	}

	public function delAsiakas($id)
	{
		$this->db->where('id_asiakas',$id);
		$this->db->delete('asiakas');		
		$testi=$this->db->affected_rows();
		return $testi;
	}

	public function getValittuAsiakas($id)
	{
		$this->db->select('*');
		$this->db->from('asiakas');
		$this->db->where('id_asiakas',$id);
		return $this->db->get()->result_array();
	}

	public function updateValittuAsiakas($uusiData,$id)
	{
		$this->db->where('id_asiakas',$id);
		$this->db->update('asiakas',$uusiData);
		$testi=$this->asiakas_model->afftected_rows();
		return $testi;
	}
}


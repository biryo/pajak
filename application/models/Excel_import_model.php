<?php
class Excel_import_model extends CI_Model
{
	function select()
	{
		$this->db->order_by('nop_gabung', 'DESC');
		$query = $this->db->get('p_pbb');
		return $query;
	}

	function insert($data)
	{
		$this->db->insert_batch('p_pbb', $data);
	}

	function insert_resto($data)
	{
		$this->db->insert_batch('p_resto', $data);
	}


	function insert_parkir($data)
	{
		$this->db->insert_batch('p_parkir', $data);
	}


	function insert_hotel($data)
	{
		$this->db->insert_batch('p_hotel', $data);
	}


	function insert_hiburan($data)
	{
		$this->db->insert_batch('p_hiburan', $data);
	}
}

<?php
/**
 * 
 */
class pembelian_model extends CI_Model
{
	
	function pembelian()
	{
		$result = $this->db->get('pembelian');
		return $result;
	}
	function penghasilan()
	{
		$this->db->select_sum('subtotal');
		$result = $this->db->get('pembelian');
		return $result;
	}

}
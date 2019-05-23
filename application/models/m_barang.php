<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
Class M_barang extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function del_barang($id){
		$this->db->where('idbarng', $id);
		$this->db->from('barang');
		$this->db->delete('barang');
	}
}

/* End of file absen_m.php */
/* Location: ./application/models/absen_m.php */
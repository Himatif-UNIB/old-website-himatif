<?php if(!defined('BASEPATH')) exit('No direct script acceess allowed');

class M_struktur extends CI_Model{
	public function viewstruktur(){
		$query = $this->db->query('select * from struktur');
		return $query->result_array();
	}

	public function editstruktur($x){
		$query = $this->db->query("select * from struktur where id like $x");
		return $query->result_array();
	}

	public function updatestruktur($x,$data,$table){
		$this->db->where('id', $x);
		return $this->db->update($table,$data);
	}
}

?>
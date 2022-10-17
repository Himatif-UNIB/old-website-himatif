<?php if(!defined('BASEPATH')) exit('No direct script acceess allowed');

class M_tentang extends CI_Model{
	public function viewpost(){
		$query = $this->db->query('select * from tentang');
		return $query->result_array();
	}

	public function editpost(){
		$query = $this->db->query("select * from tentang where id like 1");
		return $query->result_array();
	}

	public function update($data){
		$this->db->where('id', '1');
		return $this->db->update('tentang',$data);
	}
}

?>
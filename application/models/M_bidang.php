<?php if(!defined('BASEPATH')) exit('No direct script acceess allowed');

class M_bidang extends CI_Model{
	public function ketua($x){
		$query = $this->db->query("select * from ketua_bidang where bidang like '%$x%'");
		return $query->result_array();
	}

	public function saveanggota($data){
		$this->db->insert('anggota_bidang', $data);
	}

	public function showanggota($x){
		$query = $this->db->query("select * from anggota_bidang where bidang like '%$x%'");
		return $query->result_array();
	}

	public function delete_anggota($x){
		$this->db->where('id_anggota',$x);
		$this->db->delete('anggota_bidang');
	}

	public function bidanganggota($x){
		$query = $this->db->query("select * from anggota_bidang where id_anggota like $x");
		return $query->result_array();
	}

	public function editanggota($x){
		$query = $this->db->query("select * from anggota_bidang where id_anggota like $x");
		return $query->result_array();
	}

	public function updateanggota($x,$data){
		$this->db->where('id_anggota', $x);
		return $this->db->update('anggota_bidang',$data);
	}

	public function updateketua($x,$data){
		$this->db->where('bidang', $x);
		return $this->db->update('ketua_bidang',$data);
	}

	public function saveproker($data){
		$this->db->insert('proker_bidang', $data);
	}

	public function showproker($x){
		$query = $this->db->query("select * from proker_bidang where bidang like '%$x%'");
		return $query->result_array();
	}

	public function delete_proker($x){
		$this->db->where('id',$x);
		$this->db->delete('proker_bidang');
	}

	public function editproker($x){
		$query = $this->db->query("select * from proker_bidang where id like $x");
		return $query->result_array();
	}

	public function updateproker($x,$data){
		$this->db->where('id', $x);
		return $this->db->update('proker_bidang',$data);
	}
}

?>
<?php if(!defined('BASEPATH')) exit('No direct script acceess allowed');

class M_event extends CI_Model{

	public function viewall(){
		$query = $this->db->query('select * from event order by id_event desc');
		return $query->result_array();
	}

	public function viewpaging($sampai, $dari){
		$query = $this->db->query("select * from event order by date asc limit $dari,$sampai");
		return $query->result();
	}

	public function jumlah(){
		$query = $this->db->get('event');
   		return $query->num_rows();
	}

	public function edit($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update($id,$data,$table){
		$this->db->where('id_event', $id);
		return $this->db->update($table,$data);
	}

	function delete($id) {
		$this->db->where('id_event',$id);
		return $this->db->delete('event');
	}

	/****************************PAMFLET****************************/

	function cek_status(){
		$query = $this->db->query("select * from pamflet where id_event like '%1%'");
		return $query->row()->status;
	}

	function savepamflet($data){
		$this->db->insert('pamflet', $data);
	}

	function updatestatus($id,$data){
		$this->db->where('id_event', $id);
		return $this->db->update('pamflet',$data);
	}

	function hapuspamflet(){
		$this->db->where('status','-');
		return $this->db->delete('pamflet');
	}

	function showpamflet(){
		$query = $this->db->query("select * from pamflet where status like '%-%'");
		return $query->result_array();
	}
}


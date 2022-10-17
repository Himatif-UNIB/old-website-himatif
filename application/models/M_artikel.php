<?php if(!defined('BASEPATH')) exit('No direct script acceess allowed');

class M_artikel extends CI_Model{

	public function viewall(){
		$query = $this->db->query('select * from artikel order by id_artikel desc');
		return $query->result_array();
	}

	public function viewallevent(){
		$query = $this->db->query('select * from event order by id_event asc');
		return $query->result_array();
	}

	public function view($x){
		if ($x == "all") {
			$query = $this->db->query('select * from artikel');
			return $query->result_array();
		}
		elseif ($x == "publish") {
			$query = $this->db->query("select * from artikel where status like '%publish%'");
			return $query->result_array();
		}
		else{
			$query = $this->db->query("select * from artikel where status like '$x'");
			return $query->result_array();
		}
	}

	public function artikel_baru($data){
		$this->db->insert('artikel', $data);
	}

	public function event_baru($data){
		$this->db->insert('event', $data);
	}

	public function edit($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update($id,$data,$table){
		$this->db->where('id_artikel', $id);
		return $this->db->update($table,$data);
	}

	function delete($id) {
		$this->db->where('id_artikel',$id);
		return $this->db->delete('artikel');
	}

	public function jumlah($x){
		if ($x == "draft") {
			$query = $this->db->query("select * from artikel where status like '%draft%'");
			return $query->num_rows(); 
		}
		elseif ($x == "publish") {
			$query = $this->db->query("select * from artikel where status like '%publish%'");
			return $query->num_rows();
		}
		else{
			$query = $this->db->get('artikel');
   			return $query->num_rows();
		}
	}

  	public function lihat($sampai, $dari, $x){
  		$y = $dari;
   		if ($x == "all") {
   			
			$query = $this->db->query("select * from artikel order by id_artikel desc limit $dari,$sampai");
			return $query->result();
		}
		elseif ($x == "publish") {
			$query = $this->db->query("select * from artikel where status like 'publish' order by id_artikel desc limit $dari,$sampai");
			return $query->result();
		}
		else{
			$query = $this->db->query("select * from artikel where status like 'draft' order by id_artikel desc limit $dari,$sampai");
			return $query->result();
		}
	}

	/*----------------------------Blog---------------------------*/

	public function lihatartikel($x){
		$query = $this->db->query("select * from artikel where slink like'%$x%'");
		return $query->result_array();
	}
	public function getIdArtikel($x){
		return $this->db->get_where('artikel', $data=array('slink'=>$x))->result();
	}

	public function submit_komen($data){
		return $this->db->insert('komentar_artikel',$data);
	}

	public function lihatevent($x){
		$query = $this->db->query("select * from event where slink like'%$x%'");
		return $query->result_array();
	}
  	
}
?>
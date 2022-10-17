<?php if(!defined('BASEPATH')) exit('No direct script acceess allowed');

class M_identitas extends CI_Model{

	function inputData($data){
		$this->db->insert('identitas',$data);
	}
}
?>
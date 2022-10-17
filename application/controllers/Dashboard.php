<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller{

	function __construct(){
		parent::__construct();

		if($this->session->userdata('status') != "login1234"){
			redirect(base_url());
		}
		$this->load->model('m_artikel');
	}

	function index(){
		$query = $this->m_artikel->viewall();
	  	$jumlahA = $this->m_artikel->jumlah('all');

		$data=array('isi'  		=>'home',
					'artikel'	=>$query,
					'jumlahA'	=>$jumlahA,
				);
		  
		$this->load->view('dashboard',$data);
	}
}
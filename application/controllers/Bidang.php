<?php if(!defined('BASEPATH')) exit('No direct script acces allowed');

class Bidang extends CI_Controller{

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('status') != "login1234"){
			redirect(base_url());
		}
		$this->load->model('m_bidang');
	}

	public function index(){
		$data=array('isi'	=>'bidang/bidang',
					);

		$this->load->view('dashboard',$data);
	}

	public function subbidang($x){
		$ketua =$this->m_bidang->ketua($x);
		$anggota = $this->m_bidang->showanggota($x);
		$proker = $this->m_bidang->showproker($x);

		$y;
		if($x=="it"){
			$y = "Information Technology";
		}
		else if($x=="minatbakat"){
			$y = "Minat & Bakat";
		}
		else if($x=="pm"){
			$y = "Pengabdian Masyarakat";
		}
		else if($x=="pendidikan"){
			$y = "Pendidikan";
		}
		else if($x=="danus"){
			$y = "Dana & Usaha";
		}
		else if($x=="kerohanian"){
			$y = "Kerohanian";
		}
		else{
			$x= "Werewolf";
		}
		
		$data=array('isi'		=>"bidang/bidang",
					'ketua'		=>$ketua,
					'anggota'	=>$anggota,
					'bidang'	=>$y,
					'proker'	=>$proker
					);
		$this->load->view('dashboard',$data);
	}

	public function tambahanggota($x){
		$data=array('nama' 	=> $this->input->post('nama'),
					'npm'	=> $this->input->post('npm'),
					'bidang'=> $x,
				);
		$this->m_bidang->saveanggota($data);
		redirect("bidang/subbidang/$x");
	}

	public function hapus_anggota($x,$y){
		$this->m_bidang->delete_anggota($x);
		
		redirect("bidang/subbidang/$y");
	}

	public function edit_anggota($x){
		$anggota = $this->m_bidang->editanggota($x);
		$data = array('isi'		=>'bidang/edit-anggota',
					  'anggota'	=> $anggota
					 );

		$this->load->view('dashboard',$data);
	}

	public function updateanggota($x,$y){
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('npm', 'NPM', 'required');

		if($this->form_validation->run() == false){
			redirect("edit_anggota($x");
		}
		else{
			$data= array('nama'		=> $this->input->post('nama'),
						'npm'		=> $this->input->post('npm'),
						);
			$this->m_bidang->updateanggota($x,$data);
			redirect("bidang/subbidang/$y");
		}
	}

	public function editketua($x){
		$data=array('nama' 	=> $this->input->post('nama'),
					'npm'	=> $this->input->post('npm'),
					'link_image'	=> $this->input->post('link')
					);
		$this->m_bidang->updateketua($x,$data);
		redirect("bidang/subbidang/$x");
	}

	public function tambahproker($x){
		$data=array('nama_proker' 	=> $this->input->post('nama'),
					'bidang'		=> $x,
				);
		$this->m_bidang->saveproker($data);
		redirect("bidang/subbidang/$x");
	}

	public function hapus_proker($x,$y){
		$this->m_bidang->delete_proker($x);
		
		redirect("bidang/subbidang/$y");
	}

	public function edit_proker($x){
		$proker = $this->m_bidang->editproker($x);
		$data = array('isi'		=>'bidang/edit-proker',
					  'proker'	=> $proker
					 );

		$this->load->view('dashboard',$data);
	}

	public function updateproker($x,$y){
		$this->form_validation->set_rules('nama', 'Nama', 'required');

		if($this->form_validation->run() == false){
			$proker = $this->m_bidang->editproker($x);
			$data = array(	'proker'	=>$proker,
							'isi'		=>'bidang/edit-proker'
							);
			$this->load->view('dashboard',$data);
		}
		else{
			$data= array('nama_proker'		=> $this->input->post('nama'),
						);
			$this->m_bidang->updateproker($x,$data);
			redirect("bidang/subbidang/$y");
		}
	}
}
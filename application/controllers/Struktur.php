<?php if(!defined('BASEPATH')) exit('No direct script acces allowed');

class Struktur extends CI_Controller{

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('status') != "login1234"){
			redirect(base_url());
		}
		$this->load->model('m_struktur');
	}

	public function index(){
		$nama = $this->m_struktur->viewstruktur();
		$data=array('isi'	=>'struktur/view-struktur',
					'nama'	=>$nama
					);

		$this->load->view('dashboard',$data);
	}

	public function edit($x){
		$nama = $this->m_struktur->editstruktur($x);
		$data=array('isi'	=>'struktur/edit-form',
					'nama'	=>$nama
					);

		$this->load->view('dashboard',$data);
	}

	public function updatestruktur($x){
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');

		if($this->form_validation->run() == false){
			$where = array('id' => $x);
			$nama = $this->m_struktur->editstruktur($x);
			$data = array(	'nama'	=>$nama,
							'isi'	=>'struktur/edit-form'
							);
			$this->load->view('dashboard',$data);
		}
		else{
			$data= array('jabatan' 	=> $this->input->post('jabatan'),
						 'nama'		=> $this->input->post('nama'),
						 'nip/npm' 	=> $this->input->post('nip/npm'),
						 'link-image'=> $this->input->post('image')
						);
			$this->m_struktur->updatestruktur($x,$data,'struktur');
			redirect('struktur');
		}
	}
}
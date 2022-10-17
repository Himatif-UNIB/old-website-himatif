<?php if(!defined('BASEPATH')) exit('No direct script acces allowed');

class Pamflet extends CI_Controller{

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('status') != "login1234"){
			redirect(base_url());
		}
		$this->load->model('m_event');
	}

	public function index(){

		$status= $this->m_event->cek_status();
		$pamflet= $this->m_event->showpamflet();
		$data=array('isi'		=>'Event/pamflet',
					'status'	=>$status,
					'pamflet'	=>$pamflet
					);

		$this->load->view('dashboard',$data);
	}

	public function simpanpamflet(){
		$data=array('judul' 	=> $this->input->post('title'),
					'image'		=> $this->input->post('image'),
					'link'		=> $this->input->post('link'),
					'status'	=>'-'
				);
		$this->m_event->savepamflet($data);
		$this->updatestatus('aktif');
		$status= $this->m_event->cek_status();
		$pamflet= $this->m_event->showpamflet();
		$data1=array(	'isi'  		=>'Event/pamflet',
						'status'=> $status,
						'pamflet'	=>$pamflet
					);
		redirect('pamflet');
	}

	public function updatestatus($x){
		$id='1';
		$data=array('status'	=>$x,
					);
		$this->m_event->updatestatus($id,$data);
	}

	public function hapuspamflet(){
		$this->m_event->hapuspamflet();
		$this->updatestatus('nonaktif');

		redirect('pamflet');
	}

	public function updatepamflet($id){
		$this->form_validation->set_rules('title', 'Judul', 'required');
		$this->form_validation->set_rules('image', 'Image', 'required');
		$this->form_validation->set_rules('link', 'Link', 'required');

		if($this->form_validation->run() === FALSE){
			redirect('pamflet');
		}
		else{
			$data= array(	'judul' 	=>$this->input->post('title'),
							'image'		=>$this->input->post('image'),
							'link' 		=>$this->input->post('link'),
							'status'	=>'-'
							);
			$this->m_event->update($id,$data,'pamflet');
			redirect('pamflet');
		}
	}

}
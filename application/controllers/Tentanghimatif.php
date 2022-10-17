<?php if(!defined('BASEPATH')) exit('No direct script acces allowed');

class Tentanghimatif extends CI_Controller{

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('status') != "login1234"){
			redirect(base_url());
		}
		$this->load->model('m_tentang');
	}

	public function index(){
		$post = $this->m_tentang->viewpost();

		$data=array('isi'  		=>'tentang/tentang',
					'artikel'	=>$post,
					);
		  
		$this->load->view('dashboard',$data);
		}

	public function update(){
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');

		if($this->form_validation->run() === FALSE){
			redirect('tentanghimatif');
		}
		else{
			$data= array('judul' 	=> $this->input->post('judul'),
						 'isi' 		=> $this->input->post('isi'),
						);
			$this->m_tentang->update($data);
			redirect('tentanghimatif');
			}
		}

	}
?>
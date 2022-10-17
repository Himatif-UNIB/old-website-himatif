<?php if(!defined('BASEPATH')) exit('No direct script acces allowed');

class Event extends CI_Controller{

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('status') != "login1234"){
			redirect(base_url());
		}
		$this->load->model('m_event');
	}

	public function index(){
		$this->load->library('pagination');

		$config['base_url'] = site_url('Event/allevent');
        $config['total_rows'] = $this->m_event->jumlah();
        $config['per_page'] = "6";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

		//berfungsi untuk melampirkan markup
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		  
		//berfungsi untuk Menyesuaikan "first" Link
		$config['first_link'] = '« First';
		$config['first_tag_open'] = '<li><span aria-hidden="true"><i class="fa fa-chevron-left"></i>';
		$config['first_tag_close'] = '</span></li>';
		  
		//berfungsi untuk Menyesuaikan Link terakhir
		$config['last_link'] = 'Last »';
		$config['last_tag_open'] = '<li><span aria-hidden="true"><i class="fa fa-chevron-left"></i>';
		$config['last_tag_close'] = '</span></li>';
		  
		//berfungsi untuk Menyesuaikan "next" Link
		$config['next_link'] = 'Next <i class="fa fa-chevron-right"></i>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		  
		//berfungsi untuk Menyesuaikan "previous" Link
		$config['prev_link'] = '<i class="fa fa-chevron-left"></i> Previous';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		  
		//berfungsi untuk Menyesuaikan "Current Page" Link
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		  
		//berfungsi untuk Menyesuaikan "digit angka" Link
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';


        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //$dari = $this->uri->total_segments();

        //call the model function to get the department data
        $deptlist = $this->m_event->viewpaging($config["per_page"], $page);           

        $pagination = $this->pagination->create_links();

	  	$query = $this->m_event->viewall();
		$data=array('isi'  		=>'Event/allevent',
					'artikel'	=>$query,
					'page'		=>$page,
					'deptlist'	=>$deptlist,
					'pagination'=>$pagination,
				);
		  
		$this->load->view('dashboard',$data);
	}

	public function allevent(){
		$this->load->library('pagination');

		$config['base_url'] = site_url('Event/allevent');
        $config['total_rows'] = $this->m_event->jumlah();
        $config['per_page'] = "6";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

		//berfungsi untuk melampirkan markup
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		  
		//berfungsi untuk Menyesuaikan "first" Link
		$config['first_link'] = '« First';
		$config['first_tag_open'] = '<li><span aria-hidden="true"><i class="fa fa-chevron-left"></i>';
		$config['first_tag_close'] = '</span></li>';
		  
		//berfungsi untuk Menyesuaikan Link terakhir
		$config['last_link'] = 'Last »';
		$config['last_tag_open'] = '<li><span aria-hidden="true"><i class="fa fa-chevron-left"></i>';
		$config['last_tag_close'] = '</span></li>';
		  
		//berfungsi untuk Menyesuaikan "next" Link
		$config['next_link'] = 'Next <i class="fa fa-chevron-right"></i>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		  
		//berfungsi untuk Menyesuaikan "previous" Link
		$config['prev_link'] = '<i class="fa fa-chevron-left"></i> Previous';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		  
		//berfungsi untuk Menyesuaikan "Current Page" Link
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		  
		//berfungsi untuk Menyesuaikan "digit angka" Link
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';


        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //$dari = $this->uri->total_segments();

        //call the model function to get the department data
        $deptlist = $this->m_event->viewpaging($config["per_page"], $page);           

        $pagination = $this->pagination->create_links();

	  	$query = $this->m_event->viewall();
		$data=array('isi'  		=>'Event/allevent',
					'artikel'	=>$query,
					'page'		=>$page,
					'deptlist'	=>$deptlist,
					'pagination'=>$pagination,
				);
		  
		$this->load->view('dashboard',$data);
	}

	public function edit($id){
		$where = array('id_event' => $id);
		$data = array('artikel'	=> $this->m_event->edit($where, 'event')->result(),
						'isi'	=>'artikel/form_edit'
					);

		$this->load->view('dashboard',$data);
	}

	public function update($id){
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('image', 'Image', 'required');
		$this->form_validation->set_rules('artikel', 'Artikel', 'required');
		$this->form_validation->set_rules('writter', 'Writter', 'required');
		$this->form_validation->set_rules('date','Date', 'required');

		if($this->form_validation->run() === FALSE){
			$where = array('id_artikel' => $id);
			$data = array(	'artikel'	=> $this->m_artikel->edit($where, 'artikel')->result(),
							'isi'	=>'artikel/form_edit'
					);
			$this->load->view('dashboard',$data);
		}
		else{
			$slink = url_title($this->input->post('judul'), 'dash', TRUE);
			$data= array('judul' 	=> $this->input->post('judul'),
						'image'		=> $this->input->post('image'),
						'artikel' 	=> $this->input->post('artikel'),
						'writter'	=> $this->input->post('writter'),
						'date'		=> $this->input->post('date'),
						'bidang'	=> $this->input->post('bidang'),
						'slink'		=> $slink,
						'id_event'	=> $id
						);
			$this->m_event->update($id,$data,'event');
			redirect('event');
		}
	}

	public function hapus($id){
		$this->m_event->delete($id);
		redirect('artikel/allpost/all');
	}

}
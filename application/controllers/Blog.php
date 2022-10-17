<?php if(!defined('BASEPATH')) exit('No direct script acces allowed');

class Blog extends CI_Controller{
	public function __construct(){
		parent::__construct();

		$this->load->model('m_artikel');
		$this->load->model('m_event');
	}

	public function index(){
		$this->load->library('pagination');

		$config['base_url'] = site_url('blog/beranda/');
        $config['total_rows'] = $this->m_artikel->jumlah('all');
        $config['per_page'] = "4";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

		//berfungsi untuk melampirkan markup
		$config['full_tag_open'] = '<ul class="pager">';
		$config['full_tag_close'] = '</ul>';
		  
		//berfungsi untuk Menyesuaikan "next" Link
		$config['next_link'] = '<span aria-hidden="true">&larr;</span> Older';
		$config['next_tag_open'] = '<li class="previous">';
		$config['next_tag_close'] = '</li>';
		  
		//berfungsi untuk Menyesuaikan "previous" Link
		$config['prev_link'] = 'Newer <span aria-hidden="true">&rarr;</span>';
		$config['prev_tag_open'] = '<li class="next">';
		$config['prev_tag_close'] = '</li>';

		$config['display_pages'] = FALSE;
		$config['first_link'] = FALSE;
		$config['last_link'] = FALSE;


        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

         //call the model function to get the department data
        $deptlist = $this->m_artikel->lihat($config["per_page"], $page, 'all');           
        $pagination = $this->pagination->create_links();

		$query = $this->m_artikel->viewall();
		$query1 = $this->m_artikel->viewallevent();
		$pamflet= $this->m_event->showpamflet();
		$status= $this->m_event->cek_status();

		$data=array('artikel'	=>$query,
					'event'		=>$query1,
					'page'		=>$page,
					'deptlist'	=>$deptlist,
					'pagination'=>$pagination,
					'pamflet'	=>$pamflet,
					'status'	=>$status
					);

		$this->load->view('blog/beranda', $data);
	}

	public function viewArtikel($x){
		if(isset($x) == null){
			redirect('blog');
		}
		else{
			$query1 = $this->m_artikel->viewall();
			$query = $this->m_artikel->lihatartikel($x);
			$data = array(	'artikel1'		=>$query,
							'artikel'		=>$query1
						);

			$this->load->view('blog/viewartikel', $data);
		}
	}

	public function submit_komen(){
		$id = $this->m_artikel->getIdArtikel($this->uri->segment(3));
		$art=$this->uri->segment(4);
		foreach($id as $i){
			$d = $i->id_artikel;
		}
		$data=array(
				'id_artikel'=> 10,
				'nama'=>$this->input->post('nama'),
				'komen'=>$this->input->post('komen'),
			);
		$this->m_artikel->submit_komen($data);
		redirect('blog/viewartikel/',$art);
	}

	public function viewevent($x){
		if(isset($x) == null){
			redirect('blog');
		}
		else{
			$query1 = $this->m_artikel->viewall();
			$query = $this->m_artikel->lihatevent($x);
			$data = array(	'artikel1'		=>$query,
							'artikel'		=>$query1
						);

			$this->load->view('blog/viewartikel', $data);
		}
	}

	public function beranda(){
		$this->load->library('pagination');

		$config['base_url'] = site_url('blog/beranda/');
        $config['total_rows'] = $this->m_artikel->jumlah('all');
        $config['per_page'] = "4";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

		//berfungsi untuk melampirkan markup
		$config['full_tag_open'] = '<ul class="pager">';
		$config['full_tag_close'] = '</ul>';
		  
		//berfungsi untuk Menyesuaikan "next" Link
		$config['next_link'] = '<span aria-hidden="true">&larr;</span> Older';
		$config['next_tag_open'] = '<li class="previous">';
		$config['next_tag_close'] = '</li>';
		  
		//berfungsi untuk Menyesuaikan "previous" Link
		$config['prev_link'] = 'Newer <span aria-hidden="true">&rarr;</span>';
		$config['prev_tag_open'] = '<li class="next">';
		$config['prev_tag_close'] = '</li>';

		$config['display_pages'] = FALSE;
		$config['first_link'] = FALSE;
		$config['last_link'] = FALSE;


        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //call the model function to get the department data
        $deptlist = $this->m_artikel->lihat($config["per_page"], $page, 'all');           
        $pagination = $this->pagination->create_links();

		$query = $this->m_artikel->viewall();
		$query1 = $this->m_artikel->viewallevent();
		$pamflet= $this->m_event->showpamflet();
		$status= $this->m_event->cek_status();

		$data=array('artikel'	=>$query,
					'event'		=>$query1,
					'page'		=>$page,
					'deptlist'	=>$deptlist,
					'pagination'=>$pagination,
					'pamflet'	=>$pamflet,
					'status'	=>$status
					);

		$this->load->view('blog/beranda', $data);
	}

	public function berandaevent(){
		$this->load->library('pagination');

		$config2['base_url'] = site_url('blog/berandaevent/');
        $config2['total_rows'] = $this->m_artikel->jumlah('all');
        $config2['per_page'] = "2";
        $config2["uri_segment"] = 3;
        $choice = $config2["total_rows"] / $config["per_page"];
        $config2["num_links"] = floor($choice);

		//berfungsi untuk melampirkan markup
		$config2['full_tag_open'] = '<ul class="pager">';
		$config2['full_tag_close'] = '</ul>';
		  
		//berfungsi untuk Menyesuaikan "next" Link
		$config2['next_link'] = '<span aria-hidden="true">&larr;</span> Older';
		$config2['next_tag_open'] = '<li class="previous">';
		$config2['next_tag_close'] = '</li>';
		  
		//berfungsi untuk Menyesuaikan "previous" Link
		$config2['prev_link'] = 'Newer <span aria-hidden="true">&rarr;</span>';
		$config2['prev_tag_open'] = '<li class="next">';
		$config2['prev_tag_close'] = '</li>';

		$config2['display_pages'] = FALSE;
		$config2['first_link'] = FALSE;
		$config2['last_link'] = FALSE;


        $this->pagination->initialize($config2);
        $page2 = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //call the model function to get the department data
        $deptlist2 = $this->m_event->viewpaging($config2["per_page"], $page2);           

        $pagination2 = $this->pagination->create_links();

		$data=array('page2'		=>$page2,
					'deptlist2'	=>$deptlist2,
					'pagination2'=>$pagination2,
					);

		$this->load->view('blog/beranda', $data);
	}
}
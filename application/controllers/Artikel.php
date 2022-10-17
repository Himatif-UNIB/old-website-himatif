<?php if(!defined('BASEPATH')) exit('No direct script acces allowed');

class Artikel extends CI_Controller{

	public function __construct(){
		parent::__construct();
		
		if($this->session->userdata('status') != "login1234"){
			redirect(base_url());
		}
		$this->load->model('m_artikel');
	}

	public function tambah_artikel(){
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('image', 'Image Cover', 'required');
		$this->form_validation->set_rules('artikel', 'Artikel', 'required');
		$this->form_validation->set_rules('writter', 'Writter', 'required');
		$this->form_validation->set_rules('date','Date', 'required');

		if($this->form_validation->run() === FALSE){
			$data=array('isi'  	=>'artikel/post_artikel',
						'status'=>'',
						'query'	=>''
						);
			$this->load->view('dashboard',$data);
		}
		else{
			if($this->input->post('radio') == 'event'){
				if($this->input->post('sbmt') == 'publish'){
					$slink = url_title($this->input->post('judul'), 'dash', TRUE);
					$data_artikel = array(
										'judul' 	=> $this->input->post('judul'),
										'image'=> $this->input->post('image'),
										'artikel' 	=> $this->input->post('artikel'),
										'writter'	=> $this->input->post('writter'),
										'date'		=> $this->input->post('date'),
										'bidang'	=> $this->input->post('bidang'),
										'slink'		=> $slink,
										'status'	=> 'publish'
									);
					$this->m_artikel->event_baru($data_artikel);
					//echo "artikel baru telah masuk ke database";
				}
				else{
					$slink = url_title($this->input->post('judul'), 'dash', TRUE);
					$data_artikel = array(
										'judul' 	=> $this->input->post('judul'),
										'image'		=> $this->input->post('image'),
										'artikel' 	=> $this->input->post('artikel'),
										'writter'	=> $this->input->post('writter'),
										'date'		=> $this->input->post('date'),
										'bidang'	=> $this->input->post('bidang'),
										'slink'		=> $slink,
										'status'	=> 'draft'
									);
					$this->m_artikel->event_baru($data_artikel);
				}
			}
			else{
				if($this->input->post('sbmt') == 'publish'){
					$slink = url_title($this->input->post('judul'), 'dash', TRUE);
					$data_artikel = array(
										'judul' 	=> $this->input->post('judul'),
										'image'		=> $this->input->post('image'),
										'artikel' 	=> $this->input->post('artikel'),
										'writter'	=> $this->input->post('writter'),
										'date'		=> $this->input->post('date'),
										'slink'		=> $slink,
										'status'	=> 'publish'
									);
					$this->m_artikel->artikel_baru($data_artikel);
					//echo "artikel baru telah masuk ke database";
				}
				else{
					$slink = url_title($this->input->post('judul'), 'dash', TRUE);
					$data_artikel = array(
										'judul' 	=> $this->input->post('judul'),
										'image'		=> $this->input->post('image'),
										'artikel' 	=> $this->input->post('artikel'),
										'writter'	=> $this->input->post('writter'),
										'date'		=> $this->input->post('date'),
										'slink'		=> $slink,
										'status'	=> 'draft'
									);
					$this->m_artikel->artikel_baru($data_artikel);
				}
			}
			
			$data=array('isi'  		=>'artikel/post_artikel',
						'status'	=>'artikel baru telah berhasil masuk ke database'				
						);
			$this->load->view('dashboard',$data);
		}
	}

	public function allpost($x){
		$this->load->library('pagination');

		$config['base_url'] = site_url('artikel/allpost/'.$x);
        $config['total_rows'] = $this->m_artikel->jumlah($x);
        $config['per_page'] = "6";
        $config["uri_segment"] = 4;
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
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        //$dari = $this->uri->total_segments();

        //call the model function to get the department data
        $deptlist = $this->m_artikel->lihat($config["per_page"], $page, $x);           

        $pagination = $this->pagination->create_links();

	  	$query = $this->m_artikel->viewall();
	  	$jumlahA = $this->m_artikel->jumlah('all');
	  	$jumlahD = $this->m_artikel->jumlah('draft');
	  	$jumlahP = $this->m_artikel->jumlah('publish');
		$data=array('isi'  		=>'artikel/view_allpost',
					'artikel'	=>$query,
					'page'		=>$page,
					'deptlist'	=>$deptlist,
					'pagination'=>$pagination,
					'jumlahA'	=>$jumlahA,
					'jumlahD'	=>$jumlahD,
					'jumlahP'	=>$jumlahP,
					'status'	=>''
				);
		  
		$this->load->view('dashboard',$data);
	}

	public function edit($id){
		$where = array('id_artikel' => $id);
		$data = array('artikel'	=> $this->m_artikel->edit($where, 'artikel')->result(),
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
			$data= array(	'judul' 	=> $this->input->post('judul'),
							'image'		=> $this->input->post('image'),
							'artikel' 	=> $this->input->post('artikel'),
							'writter'	=> $this->input->post('writter'),
							'date'		=> $this->input->post('date'),
							'slink'		=> $slink,
							'id_artikel'=> $id
							);
			$this->m_artikel->update($id,$data,'artikel');
			redirect('artikel/allpost/all');
			//echo "artikel berhasil di update";
		}
	}

	public function hapus($id){
		$this->m_artikel->delete($id);
		redirect('artikel/allpost/all');
	}

	public function artikelterbaru(){
		$query = $this->m_artikel->viewall();
	  	$jumlahA = $this->m_artikel->jumlah('all');

		$data=array('isi'  		=>'home',
					'artikel'	=>$query,
					'jumlahA'	=>$jumlahA,
				);
		  
		$this->load->view('dashboard',$data);
	}
}
?>
<?php 
class Login extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('m_login');

	}

	function index(){
		$this->load->view('login');
	}

	public function aksi_login(){
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$where = array(
			'userN' => $user,
			'passW' => $pass
			);

		$cek = $this->m_login->cek_login("user",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $user,
				'status' => "login1234"
				);

			$this->session->set_userdata($data_session);
			redirect('dashboard');
		}
		else{
			echo "username dan password salah !!";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	function tesmce(){
		$this->load->view('tesmce');
	}
}

?>
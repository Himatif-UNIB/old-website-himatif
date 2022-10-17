<?php 
class Landing extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_bidang');
		$this->load->model('m_struktur');
		$this->load->model('m_tentang');
	}

	function index(){
		$it = $this->m_bidang->ketua('it');
		$itMember = $this->m_bidang->showanggota('it');
		$itProker = $this->m_bidang->showproker('it');

		$danus = $this->m_bidang->ketua('danus');
		$danusMember = $this->m_bidang->showanggota('danus');
		$danusProker = $this->m_bidang->showproker('danus');

		$pendidikan = $this->m_bidang->ketua('pendidikan');
		$pendidikanMember = $this->m_bidang->showanggota('pendidikan');
		$pendidikanProker = $this->m_bidang->showproker('pendidikan');

		$pm = $this->m_bidang->ketua('pm');
		$pmMember = $this->m_bidang->showanggota('pm');
		$pmProker = $this->m_bidang->showproker('pm');

		$kerohanian = $this->m_bidang->ketua('kerohanian');
		$kerohanianMember = $this->m_bidang->showanggota('kerohanian');
		$kerohanianProker = $this->m_bidang->showproker('kerohanian');

		$minatbakat = $this->m_bidang->ketua('minatbakat');
		$minatbakatMember = $this->m_bidang->showanggota('minatbakat');
		$minatbakatProker = $this->m_bidang->showproker('minatbakat');

		$namaStruktur = $this->m_struktur->viewstruktur();

		$tentang = $this->m_tentang->viewpost();

		$jabat1 = $this->m_struktur->editstruktur('1');
		$jabat2 = $this->m_struktur->editstruktur('2');
		$jabat3 = $this->m_struktur->editstruktur('3');
		$jabat4 = $this->m_struktur->editstruktur('4');
		$jabat5 = $this->m_struktur->editstruktur('5');
		$jabat6 = $this->m_struktur->editstruktur('6');
		$jabat7 = $this->m_struktur->editstruktur('7');
		$jabat8 = $this->m_struktur->editstruktur('8');
		$jabat9 = $this->m_struktur->editstruktur('9');
		$jabat10 = $this->m_struktur->editstruktur('10');
		$jabat11 = $this->m_struktur->editstruktur('11');
		$jabat12 = $this->m_struktur->editstruktur('12');
		$jabat13 = $this->m_struktur->editstruktur('13');
		$jabat14 = $this->m_struktur->editstruktur('14');
		$jabat15 = $this->m_struktur->editstruktur('15');


		$data=array('ketuaIT'	=>$it,
					'anggotaIT'	=>$itMember,
					'prokerIT'	=>$itProker,
					'ketuaPM'	=>$pm,
					'anggotaPM'	=>$pmMember,
					'prokerPM'	=>$pmProker,
					'ketuaDanus'	=>$danus,
					'anggotaDanus'	=>$danusMember,
					'prokerDanus'	=>$danusProker,
					'ketuaKerohanian'	=>$kerohanian,
					'anggotaKerohanian'	=>$kerohanianMember,
					'prokerKerohanian'	=>$kerohanianProker,
					'ketuaMinatbakat'	=>$minatbakat,
					'anggotaMinatbakat'	=>$minatbakatMember,
					'prokerMinatbakat'	=>$minatbakatProker,
					'ketuaPendidikan'	=>$pendidikan,
					'anggotaPendidikan'	=>$pendidikanMember,
					'prokerPendidikan'	=>$pendidikanProker,
					'namaStruktur'		=>$namaStruktur,
					'jabat1'			=>$jabat1,
					'jabat2'			=>$jabat2,
					'jabat3'			=>$jabat3,
					'jabat4'			=>$jabat4,
					'jabat5'			=>$jabat5,
					'jabat6'			=>$jabat6,
					'jabat7'			=>$jabat7,
					'jabat8'			=>$jabat8,
					'jabat9'			=>$jabat9,
					'jabat10'			=>$jabat10,
					'jabat11'			=>$jabat11,
					'jabat12'			=>$jabat12,
					'jabat13'			=>$jabat13,
					'jabat14'			=>$jabat14,
					'jabat15'			=>$jabat15,
					'tentang'			=>$tentang
					);

		$this->load->view('profile',$data);
	}
}

<?php
 if(!defined('BASEPATH')) exit('No direct script acces allowed');

class Main extends CI_Controller{
	public function __construct(){
		parent::__construct();

	}

	public function index(){
		$this->load->view('blog/beranda.php');
	}

	public function viewArtikel(){
		$this->load->view('blog/viewartikel.php');
	}
}
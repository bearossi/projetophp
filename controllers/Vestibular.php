<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vestibular extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')==TRUE) {
        	echo "Você precisa estar logado!!!";
        	die;
        }
    }

	
	public function doPostVestibular(){
		if($_POST){
			require_once APPPATH."models/VestibularFabrica.php";
			$this->load->model('vest');
			$this->vest->insert(new VestibularFabrica($_POST["nome"],$_POST["rg"],$_POST["unidade"],$_POST["curso"])); //o nome é o name dentro do form
		}
	}
	
	public function listar2(){

			require_once APPPATH."models/VestibularFabrica.php";
			$this->load->model('vest');
			$vestibular=$this->vest->searchAll();
			$data['vestibular'] = $vestibular;
			$this->load->view('lista2',$data);

	}
}
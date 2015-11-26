<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dep extends CI_Controller {
    
 public function doPostDep(){
		if($_POST){
			require_once APPPATH."models/depoimentos.php";
			$this->load->model('deps');
			$this->deps->insert(new depoimentos($_POST["nome"],$_POST["curso"],$_POST["depoimento"])); //o nome é o name dentro do form
		}
    }
	
	
	public function listar3(){

			require_once APPPATH."models/depoimentos.php";
			$this->load->model('deps');
			$data['dep'] = $this->deps->searchAll();
			$this->load->view('lista3',$data);

	}
}
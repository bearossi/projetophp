<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

	public function form(){
		$this->load->view('form');
	}

    public function index(){
        $this->load->view('index');    
    }
 
    public function home(){
        $this->load->view('home');
    }  

    public function vestibular(){
        $this->load->view('vest');
    }
    	
	public function doPost(){
		require_once APPPATH."models/user.php";
		$this->load->model('model');
		$this->model->insert(new Usuario ($_POST["nome"],$_POST["tel"],$_POST["email"],$_POST["msg"],$_POST["eusou"])); //o nome é o name dentro do form
		echo "Formulario enviado com sucesso!";
	}

	public function listar(){
		require_once APPPATH."models/user.php";
		$this->load->model('model');
		$m=$this->model;
		$usuarios=$m->searchAll();
		$data['usuarios'] = $usuarios;
		$this->load->view('lista',$data);
		//print_r($usuarios);
		
	}
    
    
}
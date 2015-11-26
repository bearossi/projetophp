<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aut extends CI_Controller {
    
    public function cadastrousuario(){
		if($_POST){
			require_once APPPATH."models/Log.php";
			$this->load->model('login');
			$this->login->insert(new Log($_POST["login"],$_POST["senha"])); //o nome é o name dentro do form
		}
	}
    
    public function logout(){
        $this->session->unset_userdata("username");
        $this->session->unset_userdata("logged_in");
        $this->load->view("home");
    }
    

   public function login(){
       // receber dados POST do formulari....
       if($_POST){
    	    if ($_POST["login"] === "biarudy" && $_POST["senha"] === "1234"){
    	        $newdata = array(
                       'username'  => 'Bia e Rodolfo',
                       'logged_in' => TRUE
                );
                $this->session->set_userdata($newdata);
            }
        }
    
       // estiver logado...
       if($this->session->userdata('logged_in')==TRUE) {
           $this->load->view("restrito");
       }
       else{
           $this->load->view("naoautorizado");
       }
    }
    
    public function restrito
    (){
        $this->load->view("restrito");
    }
    
    public function naoautorizado(){
        $this->load->view("naoautorizado");
    }
    
}
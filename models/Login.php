<?php

class Login extends CI_Model {
    
    public function insert($aut){
        $this->db->insert('Aut',$login); //insere registro no bd
    }
    
    public function searchAll(){ 
        $query = $this->db->query("Select * from Aut"); //User é o nome da tabela
        return $query->result();
    }
    
    
}
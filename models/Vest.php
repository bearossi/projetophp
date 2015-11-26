<?php

class Vest extends CI_Model {
    
    public function insert($vestibular){
        $this->db->insert('Vestibular',$vestibular); //insere registro no bd
    }
    
    public function searchAll(){ 
        $query = $this->db->query("Select * from Vestibular"); //User é o nome da tabela
        return $query->result();
    }
    
    
}
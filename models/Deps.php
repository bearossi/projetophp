<?php

class Deps extends CI_Model {
    
    public function insert($dep){
        $this->db->insert('Dep',$dep); //insere registro no bd
    }
    
    public function searchAll(){ 
        $query = $this->db->query("Select * from Dep"); //User é o nome da tabela
        return $query->result();
    }
    
    
}